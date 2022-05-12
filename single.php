<?php wp_head(); ?>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <div class="subpagecontainer">
            <?php
            get_header('single'); ?>

            <div class="subpagephoto">
                <?php
                if (has_post_thumbnail()) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('full');
                }
                ?>
            </div>

            <div class="subpageheading">
                <h2><?php the_title(); ?></h2>
            </div>
            <div class="subpagecontent">
                <?php
                the_content(); ?>
            </div>
            <div class="subpagefooter">
            <?php
            get_footer();
            ?>
            </div>
    </div>
</body>
