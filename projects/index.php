<?php
    session_start();
    $path = $_SERVER['DOCUMENT_ROOT'];
    $_SESSION['path'] = $path;
?>

<?php include ($path . "/included/head.php"); ?>

<section id="work" class="content container">
	<header><h1>What I worked on</h1></header>
    
    <?php include ($path . "/included/project_list.php"); ?>

          
</section>

<?php include ($path . "/included/footer.php"); ?>