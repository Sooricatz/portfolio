<?php
    session_start();
    $path = $_SERVER['DOCUMENT_ROOT'];
    $baseaddress = 'http://' . $_SERVER['SERVER_NAME'];
    $_SESSION['path'] = $path;
?>

<?php include ($path . "/included/head.php"); ?>

<div class="hero-unit right-container">
    <span>Aloha!</span>
    <p>I'm Guillaume, a french Design Engineer, who is specialised in digital interactions and products.
    <p>At large! Not only talking graphical stuff here.</p>
</div>

    <?php include ($path . "/included/project_list.php"); ?>

<?php include ($path . "/included/footer.php"); ?>