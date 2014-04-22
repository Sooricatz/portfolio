<?php
    session_start();
    $path = $_SESSION['path'];
    include_once ($path . "/included/markdown.php");
    include ($path . "/included/head.php");
    include_once $path . '/included/project_meta.php';
    $metadatas = getprojectmeta($path.$_SERVER['REQUEST_URI']);
    $bannerimg = "images/banner.png";
    $bannervid = "images/banner.txt";
    $descriptionfile = "description.md";
?>


<div class="right-container">
    <div class="back"><a href="/">&larr; Back</a></div>
    <h1><?=$metadatas["projectname"] ?></h1>  

    <?php if (file_exists($bannerimg) OR file_exists($bannervid)) : ?>
        <div class="banner-img">
            <?php if (file_exists($bannerimg)): ?>
                <img src="<?=$bannerimg ?>" />
            <?php elseif (file_exists($bannervid)):
                $ex_media = file_get_contents($bannervid); ?>
                <div class="video-container"><?=$ex_media ?></div>';
            <?php endif ?>
        </div>
    <?php endif ?>

    <div id="project-description">
        <?php if (file_exists($descriptionfile)){
            ob_start();
            include($descriptionfile);
            $descriptionmd = ob_get_clean();
            $description = Markdown($descriptionmd);
            echo '<h2>Description</h2><div class="description-content">' .$description .'</div>';
        };
        ?>
    </div>
        <?php
            if ($metadatas["what"]) {
                $count = count($metadatas["what"]);
                for ($i=0; $i < $count; $i++) {
                    echo '<span class="what">#' .$metadatas["what"][$i] ."</span>";
                }
            }
        ?>
</div>

<?php $dirname = "images/illustrations/";
	if (file_exists($dirname)): ?>
<div id="project-illustrations">
	<?php 
           $images = scandir($dirname);
           $ignore = Array(".", "..","Thumbs.db",".localized",".DS_Store",);
           foreach($images as $node){
           $mac_hidden = strpos($node, '._');
           if(!in_array($node, $ignore) && $mac_hidden !== 0) {
               
               echo "<div class='ill-container";
               if (strpos($node, '_2X') OR strpos($node, '.txt')) {
                   echo " img2x";
               };
               echo "'/>";

               if (strpos($node, '.jpg') OR strpos($node, '.png')) {
                   echo "<img src='images/illustrations/" . $node . "'/>";
               } elseif (strpos($node, '.txt')){
                   $media_path = "images/illustrations/" .$node;
                   $ex_media = file_get_contents($media_path);
                   echo '<div class="video-container">' .$ex_media .'</div>';
               };

               echo "</div>";
           };
           }     
       ?>
    <div class="clear"></div>
</div>
<?php endif; ?>
    
<?php include ($path . "/included/footer.php"); ?>