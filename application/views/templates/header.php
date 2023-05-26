<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $judul ?></title>
    <link rel="stylesheet" href="<?= base_url()?>assets/css/templates/style.css">
	<link href="<?= base_url()?>assets/boostrap/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="<?=base_url()?>assets/js/script.js"></script>
</head>
<body>
	<div class="preloader">
		<div class="loading">
			<img src="<?=base_url()?>assets/images/home/loading.gif">
		</div>
	</div>	
	<div class="container" style="height: 1200px;">
		<div class="container">
			<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Maycake</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup"> -->
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="nav nav-pills nav-fill ms-auto">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Product</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Contact Us</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Our Team</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>