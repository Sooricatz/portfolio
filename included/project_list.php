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
<div id="project-list">

	<?php foreach ( $dir_arr as $folder ): ?>
		<?php if( substr($folder, 0, 1) != '.' && is_dir($projroot.$folder) ): ?>
            <?php $metadatas = getprojectmeta($projroot.$folder); ?>
            
            <?php if ($metadatas["status"] != 0): ?>
                <a href="/projects/<?=$folder ?>" class="project-list-item">
                    <img src="/projects/<?=$folder ?>/featured.jpg" />
                    <div class="title-container">
                        <div class="centering-table">
                            <div class="centering-table-inner">
                                <div class="project-list-item-title">
                                    <div class="project-list-item-title-inner">
                                        <div class="proj-date"><?=$metadatas['date'] ?></div><h3><?=$metadatas['projectname'] ?></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
            
        <?php endif; ?>
	<?php endforeach; ?>
    <div class="clear"></div>
</div>