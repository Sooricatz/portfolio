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
	
	<title>G.Mutschler</title>
	<meta name="description" content="Portfolio from User Experience Manager Guillaume Mutschler">
	<meta name="author" content="Guillaume Mutschler">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <!--<script type="text/javascript" src="http://fast.fonts.net/jsapi/c67cbb23-5e21-4381-8fc3-e0d265e7f531.js"></script>-->
    <script src="/js/script.js"></script>
</head>

<body <?php if (!$page){ echo'class="home"';} ?>> <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
<div id="about-box">
    <div id="about-box-content">
        <div class="container">
            <p>Graduate from a French <a href="http://en.wikipedia.org/wiki/Grande_ecole">Grande Ecole</a> in Mechanical Engineering and Design with majors in Ergonomic and Human Computer Interactions, I provide intuitive product definition and execution with emphasis on the technical and functional, while taking in account ergonomics, cognition and industry constraints.</p>
            <p>I had the the opportunity and chance to work either for big corporations and smaller ventures. It teaches me how to be flexible in a teamwork situation and that compromises and decisions making are definitive an added values.</p>
            <p>You can learn more about my experiences on my <a href="http://www.linkedin.com/profile/view?id=43708188">Linkedin profile</a>.</p>
        </div>
    </div>
    <div id="about-toggle">
        <ul>
            <li>UX What ?</li>
        </ul>
    </div>    
</div>
    
<div id="site">
    
<?php if ($page): ?>
    <header role="banner">
            <nav>
                <a href="/"><h1>Guillaume<br />Mutschler</h1></a>
                <div id="nav-toggle"><span></span></div>
                <div class="clear"></div>
                <div id="nav-content">
                    <ul>
                    
<?php foreach ($dir_arr as $folder) : ?>
   <?php if( substr($folder, 0, 1) != '.' && is_dir($projroot.$folder) ): ?>
        <?php $metadatas = getprojectmeta($projroot.$folder); ?>
        
        <?php if ($metadatas["status"] != 0): ?>
            <li class="menu-item"><a href="/projects/<?=$folder ?>"><?=$metadatas["projectname"] ?></a></li>
        <?php endif ?>
    <?php endif ?>
<?php endforeach ?>
                    </ul>
                </div>
            </nav>
    </header>
<? endif; ?>
    
