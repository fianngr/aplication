<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $judul ?></title>
    <link rel="stylesheet"  href="<?= base_url('assets/css/home/style.css')?>">
	<link href="<?= base_url()?>assets/boostrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?=base_url()?>assets/boostrap/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div class="container" style="height: 1200px;">

	<div class="container">
		<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Maycake</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
					<div class="navbar-nav">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
						<a class="nav-link" href="#">Product</a>
						<a class="nav-link" href="#">Contact Us</a>
						<a class="nav-link disabled">Our Team</a>
					</div>
				</div>
			</div>
		</nav>
		
		