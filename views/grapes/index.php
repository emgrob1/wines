<?php include 'backend_header.php';?>
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12">



<form id="randomInsert" action="<?php echo URL;?>grapes/insertGrapes/" method="post">
	<label>Name: </label><input type="text" name="name" /><br />
	<label>Color: </label><input type="text" name="color" /><br />
	<input type="submit" />
</form>

<br />

<div id="listInserts"></div>
</div>
</div>
</div>
</div>


<?php include 'footer.php';?>