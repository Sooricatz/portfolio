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

<section id="project-description">
    <h1><?=$metadatas["projectname"] ?></h1>
    
    <?php if (file_exists($descriptionfile)){
        ob_start();
        include($descriptionfile);
        $descriptionmd = ob_get_clean();
        $description = Markdown($descriptionmd);
        echo '<div class="description-content">' .$description .'</div>';
    };
    ?>
    <?php
        if ($metadatas["what"]) {
            $count = count($metadatas["what"]);
            for ($i=0; $i < $count; $i++) {
                echo '<span class="what">#' .$metadatas["what"][$i] ."</span>";
            }
        }
    ?>
    
</section>

<section id="project-illustrations">
        <?php   
            $dirname = "images/illustrations/";
            $images = scandir($dirname);
            $ignore = Array(".", "..","Thumbs.db",".localized",".DS_Store",);
            foreach($images as $node){
            $mac_hidden = strpos($node, '._');
            if(!in_array($node, $ignore) && $mac_hidden !== 0) {
                if (strpos($node, '.jpg') OR strpos($node, '.png')) {
                    echo "<img src='images/illustrations/" . $node . "'";
                    if (strpos($node, '_2X')) {
                        echo " class='img2x'";
                    };
                    echo" />";
                } elseif (strpos($node, '.txt')){
                    $media_path = "images/illustrations/" .$node;
                    $ex_media = file_get_contents($media_path);
                    echo '<div class="video-container">' .$ex_media .'</div>';
                };
            };
            }     
        ?>
    <div class="clear"></div>
</section>
    
<?php include ($path . "/included/footer.php"); ?>