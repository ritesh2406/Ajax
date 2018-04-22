<style>
.status-available{color:#2FC332;}
.status-not-available{color:#D60202;}
</style>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
function checkAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
    url: "register.php",
    data:'username='+$("#username").val(),
    type: "POST",
    success:function(data){
		//alert(data);
        $("#user-availability-status").html(data);
        $("#loaderIcon").hide();
		if(data!='Available'){
         $('#submit').prop('disabled', true);
		}
    },
    error:function (){}
    });
}
</script>

<div id="frmCheckUsername">
  <label>Check Username:</label>
  <input name="username" type="text" id="username" onBlur="checkAvailability()">
  <span id="user-availability-status" class="status-not-available"></span>  <br><br>

  <button type="submit" name="submit" id="submit"> Register </button>  
</div>
<p><img src="loading.gif" id="loaderIcon" style="display:none" /></p>
On this one as soon as the user leaves the input box the checkAvailability(); is fired up

shareimprove this answer
