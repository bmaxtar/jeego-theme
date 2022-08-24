<?php get_header(); ?>
<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
<div class="content-area">
  <main>
    <section class="slide">
      <div class="container">
        <div class="row">Slide</div>
      </div>
    </section>
    <section class="services">
      <div class="container">
        <h1>Nos Services</h1>
        <div class="row">
          <div class="col-sm-4">
            <div class="services-item">
              <?php
              if (is_active_sidebar('services-001')) {
                dynamic_sidebar('services-001');
              }
              ?>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="services-item">
              <?php
              if (is_active_sidebar('services-002')) {
                dynamic_sidebar('services-002');
              }
              ?>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="services-item">
              <?php
              if (is_active_sidebar('services-003')) {
                dynamic_sidebar('services-003');
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="middle-area">
      <div class="container">
        <div class="row">
          <div class="news col-md-9">
            <?php
            // If there are any posts
            if (have_posts()) :
              // while have posts, show to us
              while (have_posts()) : the_post();
            ?>
              <?php
                // Require the file wich is at template-parts/content.php
                get_template_part('template-parts/content', get_post_format());
              endwhile;
            else :
              ?>
              <p>Il n'a aucun element disponible !</p>
            <?php endif; ?>
          </div>
          <aside class="sidebar col-md-3 h-100"><?php get_sidebar('blog'); ?></aside>
        </div>
      </div>
    </section>
    <section class="map">
      <div class="container">
        <div class="row">
          Map
        </div>
      </div>
    </section>
  </main>
</div>
<?php get_footer(); ?>