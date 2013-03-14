
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function(){
    setTimeout(function(){
        tampil();
    },10);
    $("#tambah").click(function(){
     $.ajax({
        type:"POST",
        url:"FormData.php",
        success:function(data){
            $("#form_data").fadeIn("10");
            $("#form_data").html(data);
        }
     })
    })
    function tampil()
    {
        $.ajax({
            type:"POST",
            url:"ViewData.php",
            success:function(data){
                $("#view_data").fadeOut("fast");
                $("#view_data").html(data);
                $("#view_data").fadeIn("fast");
            }
        })
    }
    $("#refresh").click(function(){
        tampil();
    })
})
</script>
<div id="add_button">
<input type="button" value="Tambah" id="tambah" />
</div>
<div id="form_data"></div>
<div id="view_data"></div>
<div id="refresh"></div>
