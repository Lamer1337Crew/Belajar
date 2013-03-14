<script>
$(document).ready(function(){
    $("#batal").click(function(){
        $("#form_data").fadeOut("slow");
    })
    $("#save_data").submit(function(){
        var data = $("#save_data").serialize();
        $.ajax({
            type:"POST",
            data:"aksi=Update&"+data,
            url:"SimpanData.php",
            success:function(data){
                //alert(data);
                $("#refresh").click();
                $("#batal").click();
                return true;
            }
        })
        return false;
    })
})
</script>
<?php
include "koneksi.php";
$sql = "select * from biodata where id = $_POST[id]";
$sql = mysql_query($sql);
$h = mysql_fetch_array($sql);
?>
<form id="save_data" method="post">
<input type="hidden" name="id" id="id" value="<?php echo $_POST["id"];?>" />
<table>
<tr>
    <td>Nama</td>
    <td><input  type="text" name="nama" id="nama" required="required" value="<?php echo $h[nama];?>" /></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input  type="text" name="alamat" id="nama" required="required" value="<?php echo $h[alamat];?>"/></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" value="Update" id="update" /><input type="button" id="batal" value="Batal" /></td>
</tr>

</table>
</form>
