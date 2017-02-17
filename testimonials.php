<?php if ( have_rows( 'testimonials' ) ) : ?>
  <?php while ( have_rows( 'testimonials' ) ) : the_row(); ?>
      <li class="cell-12_md-4">
        <div class="reviewer">
          <div class="minion mbi-chris float_n_md-float-l" style="<?php if ( get_sub_field( 'testimonial_image') ) { ?>background-image: url(<?php the_sub_field( 'testimonial_image' ); ?>);<?php } ?>"></div>
          <div class="reviewer-header">
            <h6><?php the_sub_field( 'testimonial_name' ); ?></h6>
            <p class="reviewer-location"><?php the_sub_field( 'testimonial_description' ); ?></p>
          </div>
        </div>
        <p><?php the_sub_field( 'testimonial_quote' ); ?></p>
      </li>
  <?php endwhile; ?>
<?php else : ?>
  <?php // no rows found ?>
<?php endif; ?>
