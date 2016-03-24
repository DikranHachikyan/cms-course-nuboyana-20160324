<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Template</title>
</head>
<body>
    <ul>
    <?php
        if( have_posts()):
            while(have_posts()): the_post();
    ?>
        <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
    <?php       
            endwhile;
        endif;
    ?>
    </ul>
    <pre><?php print_r($posts);?></pre>
</body>
</html>