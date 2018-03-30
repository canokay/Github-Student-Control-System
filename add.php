<?php
 $sID = $_POST['sID'];
 $sName = $_POST['sName'];
 $soyisim = $_POST['sSurname'];
 $githubUser = $_POST['githubUserName'];
 
 
$con=mysql_connect("localhost","root","","vtokul"); 
mysql_set_charset($con, "utf8");
 
$sql="select snumber from student WHERE snumber='$snumber'";
 
$quest=mysql_num_rows($query);
 
if ($quest>0)
{
echo "Bu TC Kimlik No daha önce kaydedilmiş";
 
} else{
$sqladd="INSERT INTO student( sID, sName, sSurname, githubUserName) 
VALUES ('$sID','$sName','$sSurname','$githubUser')";
 
$sonuc=mysql_query($con,$sqladd);
 
if ($sonuc==0)
echo "Eklenemedi, kontrol ediniz";
else
echo "Başarıyla eklendi";
};
 
?>
