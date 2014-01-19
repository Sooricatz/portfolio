<?php
    session_start();
    $path = $_SERVER['DOCUMENT_ROOT'];
    $baseaddress = 'http://' . $_SERVER['SERVER_NAME'];
?>

<?php include ($path . "/included/head.php"); ?>

<section class="hero-unit">
    <div>
    <h1>Guillaume Mutschler<span>UX Manager*</span></h1>
    <p>*Product Design Management with a focus on building user-centered experiences</p>
    <a href="#work" class="btn" id="more">↓ DISCOVER MORE ↓</a>
    </div>
</section>

<section id="work">
    <header><h2>What I worked on</h2></header>
    <?php include ($path . "/included/project_list.php"); ?>
</section>

<?php include ($path . "/included/footer.php"); ?>