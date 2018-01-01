<?php
//file cek.php untuk cek data
$last = $_GET['last'];
$sql = "select * from booking where id_booking='$last'";
$rs = mysql_query($sql);
//output berupa json
if(mysql_num_rows($rs) > 0){
$lastSql = "select max(where id_booking) from booking";
$lastId = mysql_fetch_array(mysql_query($lastSql));
echo '{"result":"new data","last":"'.$lastId[0].'"}';
}else{
echo '{"result":false}';
}