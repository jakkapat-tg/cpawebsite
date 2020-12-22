# cpawebsite
cpawebsite V.3 add Altorouter <br>
** ติดตั้ง **<br>
1.cut index and .htaccess ไปยังโฟลเดอร์ที่จำลองไว้เช่น Ampps จะอยู่ที่ www <br>
2.สร้าง folder sqlconfig ไว้ที่ cpawebsite และ สร้างไฟล์ config .php เพื่อเชื่อม DB หาก db ยังไม่ได้สร้างไว้ให้นำเข้าไฟล์ structureDB ก่อน
** ปัจจุบัน project เป็นแบบ mysql ไม่ได้ใช้ PDO <br> ** 
3.สร้างโฟลเดอร์ uploads ไว้เก็บไฟล์อัพโหลดจากหน้า admin ในpath cpawebsite <br>
&nbsp;&nbsp;&nbsp;UPLOADS จะมี -> image ในโฟลเดอร์ก็จะมีสับลงไปอีก คือ  ceo , event event-gallery ,  slideimg <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> ita<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-> pdffile ในโฟลเดอร์ก็จะมีสับลงไปอีก คือ pdf,price,spec<br>
4.หากโฟลเดอร์ vender ไม่มีหรือมาไม่ครบทำให้เรียก path Routing ไม่ได้ ให้รันคำสั้ง composer  require altorouter/altorouter ใน directory cpawebsite<br>
