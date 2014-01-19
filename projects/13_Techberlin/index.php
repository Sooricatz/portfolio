<?php
    session_start();
    $path = $_SERVER['DOCUMENT_ROOT'];
    $_SESSION['path'] = $path;
?>

<?php include ($path . "/included/project_template.php"); ?>