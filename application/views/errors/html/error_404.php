<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>404 Page Not Found</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #4b9dd3;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, calibri;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}
h1 {
	font-size: 20em;
}		

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

p {
	font-size: 2em;
}

#container {
	margin: 10px;
}

p {
	margin: 12px 15px 12px 15px;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #4CAF50;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}


.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


</style>
</head>
<body>
	<div id="container">
		<center style="color:white">
		<h1>404</h1>
		<p>Maaf Laman Yang Anda Cari Tidak Tersedia</p>
		<br>
		<button  onclick="location.href = 'https://kemahasiswaan.itb.ac.id';" class="button" style="vertical-align:middle"><span>Kembali </span></button>
		</center>
	</div>
</body>
</html>