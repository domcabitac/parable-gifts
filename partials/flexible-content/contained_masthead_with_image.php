<section class="contained_masthead" id="<?php the_sub_field( 'id' ); ?>">
	<div class="outerContainer">
	<div class="container">
		<div class="row align-items-center align-items-lg-stretch masthead">
			<div class="col-12 col-lg-6 col-xl-6 text sub-title-text-btn d-flex justify-content-center">
                <div class="sub"><?php the_sub_field( 'subtitle' ); ?></div>
				<div class="mastheadText">
					<h2><?php the_sub_field( 'title' ); ?></h2>
					<p><?php the_sub_field( 'text' ); ?></p>
					<div class="mastheadButtons">
							<button>
								<?php $button_link = get_sub_field( 'button_link' ); ?>
								<?php if ( $button_link ) : ?>
									<a href="<?php echo esc_url( $button_link) ; ?>"><?php the_sub_field( 'button_text' ); ?></a>
								<?php endif; ?>
							</button>
							<span>
							<?php $side_button_link = get_sub_field( 'side_button_link' ); ?>
							<?php if ( $side_button_link ) : ?>
								<a href="<?php echo esc_url( $side_button_link) ; ?>"><?php the_sub_field( 'side_button_text' ); ?> <svg width="20" height="11" viewBox="0 0 20 11" fill="#150D5C;" xmlns="http://www.w3.org/2000/svg">
<path d="M14.254 0.702764C14.1209 0.831196 14.0462 1.00493 14.0462 1.18602C14.0462 1.36712 14.1209 1.54085 14.254 1.66928L17.5406 4.81561L0.714484 4.81561C0.524991 4.81561 0.343258 4.88783 0.209267 5.01638C0.0752759 5.14493 4.52912e-07 5.31929 4.37019e-07 5.50108C4.21126e-07 5.68288 0.0752758 5.85724 0.209267 5.98579C0.343258 6.11434 0.52499 6.18656 0.714484 6.18656L17.5192 6.18656L14.254 9.31918C14.1185 9.44826 14.042 9.62368 14.0413 9.80687C14.0406 9.99005 14.1159 10.166 14.2504 10.296C14.3849 10.426 14.5678 10.4994 14.7587 10.5C14.9497 10.5006 15.133 10.4285 15.2685 10.2994L19.8127 5.93293C19.9326 5.81732 20 5.66081 20 5.49766C20 5.33451 19.9326 5.178 19.8127 5.06238L15.2685 0.702764C15.2021 0.638516 15.1231 0.58752 15.036 0.55272C14.949 0.517919 14.8556 0.500001 14.7612 0.500001C14.6669 0.500001 14.5735 0.517919 14.4865 0.55272C14.3994 0.58752 14.3204 0.638516 14.254 0.702764Z" fill="#150D5C;"/>
</svg>
</a>
							<?php endif; ?>
							</span>
					</div>
				</div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6 d-flex justify-content-center image" data-aos="zoom-in-down">
                <?php $image = get_sub_field( 'image' ); ?>
				<?php if ( $image ) : ?>
					<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
	<svg id='sOutOrange' width="108" height="248" viewBox="0 0 108 248" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="163" cy="85" r="139" stroke="#FFD166" stroke-width="48"/>
</svg>
<svg id='mobileSVG' width="286" height="625" viewBox="0 0 286 625" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="-1209" y="-236.062" width="1044.2" height="1090.94" rx="218" transform="rotate(-37.9347 -1209 -236.062)" fill="#F9F9F9"/>
</svg>

	</div>	
</section>