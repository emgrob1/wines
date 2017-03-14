
<div id="information" class="spacer reserve-info ">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12">


<p>Enter the Name of Grape and select color</p>
<form id="insertGrapes" action="<?php echo URL;?>grapes/insertGrapes/" method="post">
	<table class="table table-striped">
	<tr>
		<td>
	<label>Name: </label>
		</td>
		<td>
	<input type="text" name="name" /><br />
	</td>
	</tr>
		<tr>
			<td>
	<label>Color: </label>
	</td>
	<td>
		<select name="color">
			<option value="red">Red</option>
			<option value="white">White</option>
		</select>
	
	</td>
		</tr>
		<tr>
			<td>
	<input type="submit" value="Save" />
	</td>
	</tr>
	</table>
</form>

<br />

<div id="listInserts"></div>
</div>
</div>
</div>
</div>
