<section class="three_col_feature" <?php the_sub_field( 'image_position' ); ?> id="<?php the_sub_field( 'id' ); ?>">
<div class="outerContainer">
<div class="container">
		<div class="row topContent">
			<h4>
				<?php the_sub_field( 'subtitle' ); ?>
			</h4>
			<h2>
				<?php the_sub_field( 'title' ); ?>
			</h2>
		</div>
		<div class="row justify-content-center">
		<?php if ( have_rows( 'features' ) ) : ?>
			<?php while ( have_rows( 'features' ) ) : the_row(); ?>
			<div class="col-12 col-xl-6 col-lg-6 bottomContent">

					<div class="cards">
						<div class="topCard">
							<?php $image = get_sub_field( 'image' ); ?>
							<?php if ( $image ) : ?>
								<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
							<?php endif; ?>
							<h5>
								<?php the_sub_field( 'title' ); ?>
							</h5>
						</div>

						<p>
							<?php the_sub_field( 'description' ); ?>
						</p>
						
						<?php $button_link = get_sub_field( 'button_link' ); ?>
						<?php if ( $button_link ) : ?>
							<a href="<?php echo esc_url( $button_link) ; ?>"><?php the_sub_field( 'button_text' ); ?>
								<svg width="20" height="10" viewBox="0 0 20 10" fill="#150D5C" xmlns="http://www.w3.org/2000/svg">
									<path d="M14.254 0.202764C14.1209 0.331196 14.0462 0.504931 14.0462 0.686023C14.0462 0.867115 14.1209 1.04085 14.254 1.16928L17.5406 4.31561L0.714484 4.31561C0.524991 4.31561 0.343258 4.38783 0.209267 4.51638C0.0752759 4.64493 4.52912e-07 4.81929 4.37019e-07 5.00108C4.21126e-07 5.18288 0.0752758 5.35724 0.209267 5.48579C0.343258 5.61434 0.52499 5.68656 0.714484 5.68656L17.5192 5.68656L14.254 8.81918C14.1185 8.94826 14.042 9.12368 14.0413 9.30687C14.0406 9.49005 14.1159 9.66599 14.2504 9.79598C14.3849 9.92597 14.5678 9.99935 14.7587 10C14.9497 10.0006 15.133 9.92848 15.2685 9.79941L19.8127 5.43293C19.9326 5.31732 20 5.16081 20 4.99766C20 4.83451 19.9326 4.678 19.8127 4.56238L15.2685 0.202764C15.2021 0.138516 15.1231 0.0875202 15.036 0.0527196C14.949 0.0179191 14.8556 1.45761e-06 14.7612 1.44936e-06C14.6669 1.44112e-06 14.5735 0.0179191 14.4865 0.0527196C14.3994 0.0875201 14.3204 0.138516 14.254 0.202764Z" fill="#150D5C"/>
								</svg>
							</a>
						<?php endif; ?>
					</div>
			</div>

			<?php endwhile; ?>
                <?php endif; ?>
		</div>
	</div>

</div>

</section>