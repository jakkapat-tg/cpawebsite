<?php
include "../../../sqlconfig/config.php";
$request = $_REQUEST;
$sql = $_POST['sql'] . " WHERE 1=1 ";
$getpage = $_POST['getpage'];

$result = mysqli_query($con, $sql);
while ($fieldinfo = mysqli_fetch_field($result)) {
    $myarray[] = $fieldinfo->name;
}

$col = $myarray;

$query = mysqli_query($con, $sql);

$totalData = mysqli_num_rows($query);

$totalFilter = $totalData;

//Search
if (!empty($request['search']['value'])) {
    $sql .= " AND (1!=1";
    foreach ($myarray as $value) {
        $sql .= " OR " . $value . " Like '" . $request['search']['value'] . "%' ";
    }
    $sql .= ")";
}

$totalData = mysqli_num_rows($query);

//Order
$sql .= " ORDER BY " . $col[$request['order'][0]['column']] . "   " . $request['order'][0]['dir'] . "  LIMIT " .
    $request['start'] . "  ," . $request['length'] . "  ";

$query = mysqli_query($con, $sql);

$data = array();

while ($row = mysqli_fetch_array($query)) {
    $subdata = array();
    for ($x = 0; $x < count($myarray); $x++) {
        $subdata[] = $row[$x];
    }
    $subdata[] = ' <a class="btn btn-info" href="./' . $getpage . '.php?pkid=' . $subdata[0] . ' ">
                                                             <i class="fa fa-edit ">แก้ไข</i></a>';
    $data[] = $subdata;
}

$json_data = array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);
