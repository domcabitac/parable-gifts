<section class="image-tabs <?php the_sub_field( 'image_position' ); ?>" id="<?php the_sub_field( 'id' ); ?>">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12 col-lg-6 col-xl-6 image <?php if(get_sub_field( 'image_position' ) == 'right'):?><?php endif;?>"><?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-6 col-xl-6 <?php if(get_sub_field( 'image_position' ) == 'left'):?><?php endif;?> sub-title-text-btn">
                <h4><?php the_sub_field( 'subtitle' ); ?></h4>
                <h2><?php the_sub_field( 'title' ); ?></h2>
				<div class="tabs">

				<?php $x=0; ?>
                <?php if ( have_rows( 'tabs' ) ) : ?>
					<?php while ( have_rows( 'tabs' ) ) : the_row(); ?>

  <input type="radio" name="tabs" id="tab<?php echo $x?>" <?php if($x===0): echo 'checked'?><?php endif;?>>
  <label for="tab<?php echo $x?>"><?php the_sub_field( 'tab_title' ); ?></label>
  <div class="tab">
  <p>
									<?php the_sub_field( 'tab_text_area' ); ?>
								</p>
  </div>

					<?php $x++?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
				</div>

			</div>

			
		</div>
	</div>
</section>


