<?php get_header(); ?>

<?php if ( have_posts() ) : $counter = 1; ?>
  <div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="sl-slide bg-<?php echo $counter; ?>" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
          <div class="sl-slide-inner">
            <div class="deco" data-icon="<?php echo get_post_meta($post->ID, 'icon-letter', true); ?>"></div>
            <h2><?php the_title(); ?></h2>
            <div class="post-content">
              <?php the_content(); ?>
              <cite>From <em>Zoology: An elementary textbook</em>, by Sir Arthur Everett Shipley and Ernest William MacBride, University Press, 1915</cite>
            </div>
          </div>
        </div>
      <?php $counter++; endwhile; ?>
    </div>
  </div>

  <nav id="nav-arrows" class="nav-arrows">
    <span class="nav-arrow-prev">Previous</span>
    <span class="nav-arrow-next">Next</span>
  </nav>

  <nav id="nav-dots" class="nav-dots">
    <span class="nav-dot-current"></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </nav>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>