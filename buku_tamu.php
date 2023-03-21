<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Semarang</title>
  </head>
  <style>
body{
margin:0;
background-color:#f7f7f7;
}

  h1{
text-align:center;
color:black;
background-color:#d9d8d7;
margin:0;
height:35px;
padding:10px;
font-family:cambria;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}


ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

input[type=text], select {
	width: 100%;
	padding : 12px 20px;
	margin: 8px 0;
	display : inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

input[type=submit] {
	width:100%;
	background-color: #c9ccd1; 
	color: white;
	padding: 14px 20px;
	margin:8px 0;
	border:none;
	border-radius:4px;
	cursor:pointer;
}

input[type=submit]:hover {
	background-color: #bdc1c7;
}

div {


	padding:10px; }

textarea {
	width:100%;
	height:150px;
	padding:12px 20px;
	box-sizing:border-box;
	border:2px solid #ccc;
	border-radius:4px;
	background-color:#f8f8f8;
	font-size:16px;
	resize:none;
}

#tamu {
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	border-collapse: collapse;
	width:100%;
}

#tamu td, #tamu th {
	border:1px solid #ddd;
	padding:8px;
}

#tamu tr:nth-child(even){background-color: #f2f2f2;}
#tamu tr:hover {background-color: #ddd;}
#tamu th {
	padding-top: 12px;
	padding-bottom: 12px;
	text-align:left;
	background-color:#bfc2c7;
	color:white;
}


  </style>
  <body>
  <ul>
  <li><a href="home.html">Home</a></li>
  <li><a href="artikel.html">Artikel</a></li>
  <li><a href="buku_tamu.php">Buku Tamu</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="tentangkami.html">Tentang Kami</a></li>
</ul>
<h1>Buku Tamu</h1>
<div class="row">
	<div class="column">
		
		<div>
			<form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
			<label for="fnama">Nama</label>
			<input type="text" name="fnama" placeholder="Nama anda..">
			<label>Email</label>
			<input type="text" name="femail" placeholder="Email..">
			<label>Provinsi</label>
			<select id="prov" name="fprovinsi">
				<option value="Jateng">Jateng</option>
				<option value="Jabar">Jabar</option>
				<option value="Jatim">Jatim</option>
			</select>
			
			<label>Pesan</label>
			<textarea name="fpesan"></textarea>
			<input type="submit" value="Submit" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
			
			</form>
			</div>
			<div>
			<?php
				if (isset($_POST['fnama'])){
					$nama=$_POST['fnama'];
					$email=$_POST['femail'];
					$prov=$_POST['fprovinsi'];
					$pesan=$_POST['fpesan'];
					
					echo "Daftar Tamu";
					echo "<table id='tamu'>";
					echo "<tr><th>No</th><th>Nama</th><th>Email</th><th>Provinsi</th><th>Pesan";
					echo "<tr><td>1.</td><td>$nama</td><td>$email</td><td>$prov</td><td>$pesan</td></tr>";
				}
			?>
			</div>
		</div>
	</div>
	<br>
  </body>
  </html>