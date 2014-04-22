<?php
    session_start();
    $path = $_SESSION['path'];
    $page =  basename($_SERVER['REQUEST_URI']);
    include_once $path . '/included/project_meta.php';
		$projroot = $path .'/projects/';
    $dir = opendir($projroot);
    $dir_arr = array();

    while ($entry = readdir($dir)) {
        $dir_arr[] = $entry;
    };
    closedir($dir);
    arsort($dir_arr);
?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Guillaume Mutschler - Digital Product Designer</title>
    <meta name="title" content="Guillaume Mutschler - Digital Product Designer">
	<meta name="description" content="I'm Guillaume, a french Design Engineer specialised in digital interactions and products">
	<meta name="author" content="Guillaume Mutschler">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">
</head>

<body <?php if (!$page){ echo'class="home"';} ?>> <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div id="site">
    <div id="header">
        <div id="title"><a href="/">Guillaume Mutschler <br />Digital Product Designer<span>_</span></a></div>

        <div id="menu">
            <li><a href="mailto:guillaume.mutschler@gmail.com" target="_blank">guillaume.mutschler@gmail.com</a></li>
            <li><a href="#" class="toggle-about">About Me</a></li>
        </div>
    </div>

    <div id="main">