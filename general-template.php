<?php
// Template Name: General Template
?>

<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

<div class="content-area">
  <main>
    <section class="middle-area">
      <div class="container">
        <div class="general-template">
          <?php
          // If there are any posts
          if (have_posts()) :
            // while have posts, show to us
            while (have_posts()) : the_post();
          ?>
              <article>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
              </article>
            <?php
            endwhile;
          else :
            ?>
            <p>Il n'a aucun element disponible !</p>
          <?php endif; ?>

        </div>
      </div>
    </section>
  </main>
</div>
<?php get_footer(); ?>