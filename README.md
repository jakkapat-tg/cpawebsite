# cpawebsite
cpawebsite V.3 add Altorouter
ติดตั้ง 
1.cut index and .htaccess ไปยังโฟลเดอร์ที่จำลองไว้เช่น Ampps จะอยู่ที่ www
2.สร้าง folder sqlconfig ไว้ที่ cpawebsite และ สร้างไฟล์ config.phpเพื่อเชื่อม DB ปัจจุบัน project เป็นแบบ mysql ไม่ได้ใช้ PDO
3.สร้างโฟลเดอร์ uploads ไว้เก็บไฟล์อัพโหลดจากหน้า admin ในpath cpawebsite 
 UPLOADS จะมี -> image ในโฟลเดอร์ก็จะมีสับลงไปอีก คือ  ceo,event event-gallery,slideimg 
             -> ita
             -> pdffile ในโฟลเดอร์ก็จะมีสับลงไปอีก คือ pdf,price,spec
4.หากโฟลเดอร์ vender ไม่มีหรือมาไม่ครบทำให้เรียก path Routing ไม่ได้ ให้รันคำสั้ง composer  require altorouter/altorouter ใน directory cpawebsite
