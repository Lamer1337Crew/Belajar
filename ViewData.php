<script>
$(document).ready(function(){
    $(".edit").click(function(){
        var id = $(this).closest("tr").attr("id");
        $.ajax({
            type:"POST",
            data:"id="+id,
            url:"EditData.php",
            success:function(data){
            $("#form_data").fadeIn("10");
            $("#form_data").html(data);
            }
        })
    })
    $(".delete").click(function(){
        var id = $(this).closest("tr").attr("id");
        var nama = $(this).closest("tr").attr("title");
        var x = confirm("Menghapus User " + nama)
        if(x){
         $.ajax({
            type:"POST",
            data:"aksi=Delete&id="+id,
            url:"SimpanData.php",
            success:function(data){
              alert("Data Berhasil Dihapus");  
              $("#refresh").click();  
            }
         })
        }
    })
})
</script>
<?php
include "koneksi.php";
echo "<table width='750'>
<tr>
    <td>No</td>
    <td>Nama</td>
    <td>Alamat</td>
    <td>Aksi</td>
</tr>";
$sql = mysql_query("select * from biodata order by id asc");
while ($h=mysql_fetch_array($sql))
{
    ++$no;
 echo"<tr id='$h[id]' title='$h[nama]'>
    <td>$no</td>
    <td>$h[nama]</td>
    <td>$h[alamat]</td>
    <td><input type='button' value='Edit' class='edit'/>
<input  type='button' value='Delete' class='delete'/></td>
    </tr>";
}
echo "</table>";
?>
