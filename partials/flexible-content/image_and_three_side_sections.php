<section class="image-and-three-side-sections" id="<?php the_sub_field( 'id' ); ?>">
<div class="outerContainer">
<div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-xl-6 col-lg-6">
        <?php $image = get_sub_field( 'image' ); ?>
        <?php if ( $image ) : ?>
          <img class='leftImage' src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" data-aos="fade-right"/>
        <?php endif; ?>
      </div>
      <div class="col-12 col-xl-6 col-lg-6">
        <h4>
          <?php the_sub_field( 'subtitle' ); ?>
        </h4>
        <h2>
          <?php the_sub_field( 'title' ); ?>
        </h2>
        <div class="row">
          <?php if ( have_rows( 'sections' ) ) : ?>
          <?php while ( have_rows( 'sections' ) ) : the_row(); ?>
          <div class="col-12 justify-content-center align-items-center rightTextSection">
            <h5>
              <?php $image = get_sub_field( 'image' ); ?>
              <?php if ( $image ) : ?>
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
              <?php endif; ?>
              <?php the_sub_field( 'section_title' ); ?>
            </h5>
            <p>
              <?php the_sub_field( 'text' ); ?>
            </p>
          </div>
          <?php endwhile; ?>
          <?php else : ?>
            <?php // no rows found ?>
          <?php endif; ?>
          <?php the_sub_field( 'disclosure' ); ?>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
