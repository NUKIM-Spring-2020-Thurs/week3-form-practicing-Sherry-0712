<?php
$sname=$_POST["sname"];
$FB=$_POST["FB"];
$gender=$_POST["gender"];
$ID=$_POST["ID"];
$Bday=$_POST["birthday"];
$live=$_POST["live"];
$address=$_POST["ID_live"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$high_sch=$_POST["high_sch"];
$pname=$_POST["pname"];
$pphone=$_POST["pphone"];
$ac_num=$_POST["ac_num"];
$cloth=$_POST["cloth"];
$food=$_POST["food"];
$food_other=$_POST["food_other"];
$trans=$_POST["trans"];
$atime=$_POST["atime"];
$interest=$_POST["interest"];
$commet=$_POST["commet"];


echo "姓名：".$sname."</br>";
echo "FB：".$FB."</br>";
echo "性別：".$gender."</br>";
echo "身分證字號：".$ID."</br>";
echo "生日：".$Bday."</br>";
echo "居住地：".$live."</br>";
echo "地址：".$address."</br>";
echo "連絡電話：".$phone."</br>";
echo "E-mail：".$email."</br>";
echo "就讀/畢業高中：".$high_sch."</br>";
echo "緊急聯絡人姓名：".$pname."</br>";
echo "緊急聯絡人電話：".$pphone."</br>";
echo "繳費帳戶之末五碼：".$ac_num."</br>";
echo "衣服尺寸：".$cloth."</br>";
echo "飲食習慣：".$food."</br>";
echo "其他(飲食習慣)：".$food_other."</br>";
echo "如何到高大：".$trans."</br>";
echo "大約抵達時間：".$atime."</br>";
echo "感興趣的課程：".implode(",",$interest)."</br>";
echo "意見：".nl2br($commet)."</br>";

?>