<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title; ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/') ?>css/sb-admin-2.min.css" rel="stylesheet">

	<!-- My CSS -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/mystyle.css">

</head>

<body>
	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-gradasi">
		<a class="navbar-brand" href="<?= base_url(); ?>">
			<img src="<?= base_url('assets/') ?>img/logo.png" width="200" height="40" class="d-inline-block align-top" alt="Portal Amal">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			
			<form class="form-inline my-2 my-lg-0 ">
				<input class="form-control mr-sm-2" type="search" placeholder="Cari di sini..." aria-label="Search">
				<button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
			</form>
			<div class="navbar-nav ml-2">
				<a class="nav-item nav-link active font-weight-bold" href="<?= base_url(); ?>login">Masuk</a>
			</div>
		</div>
	</nav>

	<!-- Navbar End -->