<?php
    session_start();
    $path = $_SESSION['path'];
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
<div class="project-list">

	<?php foreach ( $dir_arr as $folder ): ?>
		<?php if( substr($folder, 0, 1) != '.' && is_dir($projroot.$folder) ): ?>
            <?php $metadatas = getprojectmeta($projroot.$folder); ?>
            
            <?php if ($metadatas["status"] != 0): ?>
                <a href="/projects/<?=$folder ?>" class="project-list-item">
                    <img src="/projects/<?=$folder ?>/featured.jpg" />
                    <div class="bg-overlay"></div>
                    <div class="border"></div>
                    <div class="project-title"><date class="proj-date"><?=$metadatas['date'] ?></date><h3><?=$metadatas['projectname'] ?></h3></div>
                </a>
            <?php endif; ?>
            
        <?php endif; ?>
	<?php endforeach; ?>
    <div class="clear"></div>
</div>