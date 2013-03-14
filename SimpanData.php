<?php
include "koneksi.php";
if($_POST["aksi"]=="Simpan"){
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$sql = mysql_query("insert into biodata(nama,alamat) values('$nama','$alamat')");
echo "insert into biodata(nama,alamat) values('$nama','$alamat')";
}
else if($_POST["aksi"]=="Update"){
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$sql = mysql_query("update biodata set nama = '$nama',alamat='$alamat' where id= $_POST[id]");
echo "update biodata set nama = '$nama',alamat='$alamat' where id= $_POST[id]";
}
else if($_POST["aksi"]=="Delete"){
$sql = mysql_query("delete from biodata where id= $_POST[id]");
echo "delete from biodata where id= $_POST[id]";
}
?>
