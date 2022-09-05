<!DOCTYPE html>
<html>
<body>
<?php
function hello($name){
    echo "Hello $name";
}
      $chanom = array (
        array(1,"ชานมไข่มุก",45,'https://img.thaibuffer.com/u/2019/wanwanat/boba/boba-1.jpg'),
        array(2,"กาเเฟไข่มุก",45,'https://img.thaibuffer.com/u/2021/wanwanat/05.jpg'),
        array(3,"ชาเขียวไข่มุก",45,'https://img.thaibuffer.com/u/2019/wanwanat/boba/boba-2.jpg'),
        array(4,"ช็อกโกเเลต",40,'https://img.thaibuffer.com/u/2021/wanwanat/03.jpg'),
        array(5,"ชานมสตรอว์เบอร์รี",50,'https://img.thaibuffer.com/u/2021/wanwanat/08.jpg'),
        array(6,"ชามะพร้าว",40,'https://img.thaibuffer.com/u/2021/wanwanat/11.jpg'),
        array(7,"ชาเผือก",30,'https://img.thaibuffer.com/u/2021/wanwanat/09.jpg'),
        array(8,"ชาเเตงโม",35,'https://img.thaibuffer.com/u/2021/wanwanat/04_1.jpg'),
        array(9,"ชาเขียวมะลิ",30,'https://img.thaibuffer.com/u/2021/wanwanat/06_1.jpg'),
        array(10,"ชานมลิ้นจี่",40,'https://img.thaibuffer.com/u/2021/wanwanat/07.jpg')
      );
     
      echo "</table>";
      echo "<table border='8'>";
      echo "<tr><td>เมนู</td><td>ชื่อ</td><td>ราคา</td><td>รูปประกอบ</td>";
      for($i=0;$i<10;$i++){
        $r=rand(0,256);
        $g=rand(0,256);
        $b=rand(0,256);
       
        $three=3;
        echo "<tr>
        <td><p style='color:rgb($r,$g,$b)'>" .$chanom[$i][0]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$chanom[$i][1]. "</p></td>
        <td><p style='color:rgb($r,$g,$b)'>" .$chanom[$i][2]. "</p></td>
        <td><img src=".$chanom[$i][3]." width=200 height=150></td>
        </tr>";
      }
      
?>
</body>
</html>