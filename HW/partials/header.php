<?php 
    $page_name = basename($_SERVER["SCRIPT_NAME"], ".php");
    if ($page_name == "index") $page_name = "všetko";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo ucfirst($page_name)?> / Nightfury</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600&amp;subset=latin,latin-ext">
	<link rel="stylesheet" href="./css/font-awesome.css">
	<link rel="stylesheet" href="./css/normalize.css">
	<link rel="stylesheet" href="./css/style.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="./js/jquery-2.1.1.min.js"></script>
	<!--[if lt IE 9]>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>