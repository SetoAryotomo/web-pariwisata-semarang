<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wisata Semarang</title>
  </head>
  <style>
  h1{
text-align:center;
color:black;
background-color:#d9d8d7;
margin:0;
height:35px;
padding:10px;
font-family:cambria;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}
  h2{
text-align:center;
color:black;
background-color:#d9d8d7;
margin:0;
height:35px;
padding:10px;
font-family:cambria;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);}

body{
background-color:#f7f7f7;
margin:0;}
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
}

.container {
  padding: 16px;

}

input[type=text], input[type=password] {
  width: 97%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  	border:none;
	border-radius:4px;

}


.registerbtn {
  background-color: #595959;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

.saran{
	margin:auto;
}

.email{
	text-align:center;
	font-size:18px;
}

.bottom{
background-color:black;
color:white;
height:45px;
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

<h1>Contact</h1>

<div class="email">
<hr>
<p><b>SETO ARYTOMO</b></p>
<p><b>Email : seto4137@gmail.com</b></p>
<hr>
</div>

 <h2>Kritik & Saran</h2>
<form class="saran">
  <div class="container">
   
	
    <label for="nama">Nama</label><br>
    <input type="text" placeholder="Isi Nama" name="nama" id="nama" required>
	<br>
    <label for="email">Email</label><br>
    <input type="text" placeholder="Isi Email" name="email" id="email" required>
	<br>
    <label for="pesan">Pesan</label><br>
    <input type="text" placeholder="Isi Pesan" name="pesan" id="pesan" required>
	<br>
    <center><button type="submit" class="registerbtn" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Kirim</button><center>
  </div> 
</form>

<div class="bottom">
<p style="padding:10px;text-align:center;">© 2022 Website Pariwisata Kota Semarang</p>
</div>

  </body>
  </html>