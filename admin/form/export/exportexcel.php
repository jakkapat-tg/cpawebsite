<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excel</title>
</head>

<body>
    <?php
    function send_line_notify($message, $token)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "message=$message");
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $headers = array("Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token",);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    $token = 'h2HpXvbLStvNUIs2lqId3LVu9KTI4MLDOR9WQeRJzdJ';
    send_line_notify($message, $token);
    include "../../../sqlconfig/config.php";
    $connstring = "host=172.16.0.192 dbname=cpahdb user=iptscanview password=iptscanview";
    $conn = pg_connect($connstring);
    pg_set_client_encoding($conn, "utf8");
    $todate = date('Ymd_His');
    header("Content-Disposition: attachment; filename=export" . $todate . ".xls");
    $sql = $_POST['sendsql'];
    $sql = str_replace("SELECTDATA", 'SELECT', $sql);  // แปลง select กลับมาเพื่อ query มาทำตาราง export excel
    $sql = str_replace("FROMTABLES", 'FROM', $sql);   // แปลง select กลับมาเพื่อ query มาทำตาราง export excel

    if ($_POST['page'] == 'covid19' && ($_POST['submit'] != '' || $_POST['submit'] != null)) {
        $sql = "SELECT a.vn,d.lab_items_name,pt.pname,pt.fname,pt.lname,ov.main_dep,ov.pttype,c.lab_order_number,lab_order_result  ,pt.cid,pt.birthday,order_date , c.update_datetime
FROM lab_head AS a
INNER JOIN lab_order c ON c.lab_order_number = a.lab_order_number
INNER JOIN lab_items d ON d.lab_items_code = c.lab_items_code  and d.lab_items_name like '%SARS%'--  AND d.icode IN ('3029894','3029917')
INNER JOIN patient pt on pt.hn = a.hn
INNER JOIN ovst ov on ov.vn = a.vn
WHERE order_date BETWEEN '" . $_POST['datepickers'] . "' AND '" . $_POST['datepickert'] . "' ORDER BY lab_order_number, vstdate ";
        $message = "\r\n" .
            'คุณ ' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . "\r\n" .
            'ดึงข้อมูล  Covid-19 ' . "\r\n" .
            'วันที่: ' . $_POST['datepickers'] . '-' . $_POST['datepickert'] . "\r\n" .
            'วันที่ดำเนินการ: ' . date('d-m-Y H:i น.');
        $token = 'h2HpXvbLStvNUIs2lqId3LVu9KTI4MLDOR9WQeRJzdJ';
        send_line_notify($message, $token);
    }

    $resultqueryhos = pg_query($conn, $sql);
    ?>

    <div class="container">
        <table width="100%" border="1">
            <thead>
                <tr>
                    <?php
                    $i = pg_num_fields($resultqueryhos);
                    for ($j = 0; $j < $i; $j++) {
                        $fieldname = pg_field_name($resultqueryhos, $j);
                        echo '<th  bgcolor="#1abc9c" >' . $fieldname . '</th>';
                    }
                    ?>
                </tr>
            </thead>
            <tbody>
                <?php $rw = 0;
                while ($row_result = pg_fetch_array($resultqueryhos)) {
                    $rw++;
                ?>
                    <tr>
                        <?php
                        for ($j = 0; $j < $i; $j++) {
                            $fieldname = pg_field_name($resultqueryhos, $j);
                            echo '<td>' . $row_result[$fieldname] . '</td>';
                        }
                        ?>
                    </tr>
                <?php
                }
                ?>
        </table>
        <?php
        pg_close($conn);
        ?>
    </div>
</body>

</html>