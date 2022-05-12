<?php wp_head(); ?>
<head>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
  <div class="pagecontainer">
    <div class="headercontainer">

      <?php

      get_header(); ?>
    </div>
    <main>
      <div class="maincontainer">

        <?php
        if (have_posts()) {
          while (have_posts()) { ?>

            <div class="sisuelement">

              <?php the_post(); ?>
              <?php the_post_thumbnail(); ?>
              <h3><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>">Loe rohkem</a></div><br>
          <?php
          }
        } ?>
      </div>
    </main>
    <?php
    get_footer();
    ?>
  </div>
</body>