<!DOCTYPE html>
<html>
<head>
	<?php
	session_start();
	include 'koneksi.php';
	?>
	<title>NOMOR 4</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<style type="text/css">
		.gambar{
			width: 200px;
			height: 200px;
			display: block;
			margin: auto;
		}
		.tengah
		{
			display: block;
			margin: auto;	
			padding-bottom: 10px;
		}
		.btn-pison {
			color: #fff;
			background-color: rgb(147, 0, 217);
			border-color: rgb(147, 0, 217);
			rgb(217, 195, 0);
		}
		.btn-elec {
			color: #fff;
			background-color: rgb(217, 195, 0);
			border-color: rgb(217, 195, 0);
		}
		.btn-flaying {
			color: #fff;
			background-color: rgb(177, 177, 177);
			border-color: rgb(177, 177, 177);
		}
		.btn-dragon {
			color: #fff;
			background-color: rgb(231, 83, 0);
			border-color: rgb(231, 83, 0);
		}
		

	</style>
</head>
<body>
<div>
	<div class="container">
		<div class="row no-gutters">
  <div class="col-12 col-sm-6 col-md-8"><h1>PokeDumb Find</h1></div>
  <div class="col-6 col-md-4" >
  	<div style="float: right; display: block; ">
  		<?php $judul = 'Input Pokemon';?>
  	<a href="insert_pokemon.php"><button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalCenter"> Add Pokemon</button></a>
  	<button type="button" class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#exampleModalCenter"> <?php $judul = 'Input Element';?>Add Element</button>
  </div>
  </div>
</div>
	<div class="row">
    <div class="col">
      <div class="row"><img class="gambar" src="gambar/bulbasaur.png"></div>
      <div class="row"><h1 class="tengah">Bulbasaur</h1></div>
      <div> 
      	<button type="button" class="btn btn-success btn-sm">Grass</button>
      	<button type="button" class="btn btn-pison btn-sm">Poison</button>
      </div>
    </div>
    <div class="col-5">
      <div class="row"><img class="gambar" src="gambar/pikachu.png"></div>
      <div class="row"><h1 class="tengah">Pikachu</h1></div>
      <div><button type="button" class="btn btn-elec btn-sm">Electric</button></div>
    </div>
    <div class="col">
      <div class="row"><img class="gambar" src="gambar/rayquaza.png"></div>
      <div>
      	<div class="row"><h1 class="tengah">Rayquaza</h1></div>
      	<button type="button" class="btn btn-dragon btn-sm">Dragon</button>
      	<button type="button" class="btn btn-flaying btn-sm">Flaying</button>
      </div>
    </div>
  </div>
</div>
</div>


<!-- Modal -->
<form action="input_pokemon.php" method="POST">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo $judul ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	      	<table>
	      		<tr>
	      			<td><label> Pokemon Name </label></td>
	      			<td><input type="text" name="txtNama"><br></td>
	      		</tr>
	      		<tr>
	      			<td><label> Str </label></td>
	      			<td><input type="number" name="txtSTR"><br></td>
	      		</tr>
	      		<tr>
	      			<td><label> Def </label></td>
	      			<td><input type="number" name="txtDEF"><br></td>
	      		</tr>
	      		<tr>
	      			<td><label> Photo </label></td>
	      			<td><input type="text" name="txtPIC"></td>
	      		</tr>
	      	</table>
	     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>