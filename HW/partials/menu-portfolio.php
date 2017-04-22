<ul class="menu controls">
    <?php
        $pages = glob('*.php');
        foreach($pages as $file) {
            $page = basename($file, '.php');
            
            if ($page == 'index') $page = 'všetko';
        
            if ($page_name == $page) echo '<li class="selected"><a href="#">'. ucfirst($page) .'</a></li>';
            else echo '<li><a href="'. $file .'">'. ucfirst($page) .'</a></li>';
        }
    ?>
</ul>