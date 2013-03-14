<script>
$(document).ready(function(){
    $("#batal").click(function(){
        $("#form_data").fadeOut("slow");
    })
    $("#save_data").submit(function(){
        var data = $("#save_data").serialize();
        $.ajax({
            type:"POST",
            data:"aksi=Simpan&"+data,
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
<form id="save_data" method="post">
<table>
<tr>
    <td>Nama</td>
    <td><input  type="text" name="nama" id="nama" required="required" /></td>
</tr>
<tr>
    <td>Alamat</td>
    <td><input  type="text" name="alamat" id="nama" required="required"/></td>
</tr>
<tr>
    <td colspan="2"><input type="submit" value="Simpan" id="simpan" /><input type="button" id="batal" value="Batal" /></td>
</tr>

</table>
</form>
