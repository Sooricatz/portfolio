<?php 
    $page =  basename($_SERVER['REQUEST_URI']);;
?> 
<header role="banner" style="background: url('images/bg.jpg'); background-size: cover; background-position: center center;" <?php if($splash) {echo 'class="splash"';} ?>>
    <div class="container"><h1>GUILLAUME MUTSCHLER</h1><h2>User Experience Manager</h2></div>
    <nav role="navigation">
		<ul>
            <li>
                <?php
                    if (!$page)
                        {echo '<span class="active">Home</span>';}
                    else
                        {echo '<a href="/">Home</a>';}
                ?>
            </li>
            <li>
                <?php
                    if(strstr($page,'about'))
                        {echo '<span class="active">About me</span>';}
                    else
                        {echo '<a href="/about/">About me</a></li>';}
                ?>
            </li>
            <li><a href="http://ihardlyknowher.com/thechiliconcept/sets/72157626597383874">Photos</a></li>
            <li><a href="http://gmutschler.tumblr.com">Blog</a></li>
		</ul>
	</nav>
    
    <?php if($hero) { echo '<div class="hero-unit container">' . $hero . '</div>';} ?>
    
</header>