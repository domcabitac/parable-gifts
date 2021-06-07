<section class="contained_masthead_with_multiple_images" id="<?php the_sub_field( 'id' ); ?>">
    <svg id='leftMastheadSVG' width="393" height="680" viewBox="0 0 393 680" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="-1102" y="-181.061" width="1044.2" height="1090.94" rx="218" transform="rotate(-37.9347 -1102 -181.061)" fill="#F9F9F9"/>
    </svg>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-6 col-lg-6 text">
                <?php the_sub_field( 'subtitle' ); ?>
                <div class="mastheadText">
                    <h2>
                        <?php the_sub_field( 'title' ); ?>
                    </h2>
                    <p>
                        <?php the_sub_field( 'text' ); ?>
                    </p>
                    <div class="mastheadButtons">
                        <button>
                            <?php the_sub_field( 'button_text' ); ?>
                            <?php $button_link = get_sub_field( 'button_link' ); ?>
                            <?php if ( $button_link ) : ?>
                                <a href="<?php echo esc_url( $button_link) ; ?>"><?php echo esc_html( $button_link ); ?></a>
                            <?php endif; ?>
                        </button>
                        <span>
                            <?php the_sub_field( 'side_button_text' ); ?>
                            <svg width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.254 0.202764C14.1209 0.331196 14.0462 0.504931 14.0462 0.686023C14.0462 0.867115 14.1209 1.04085 14.254 1.16928L17.5406 4.31561L0.714484 4.31561C0.524991 4.31561 0.343258 4.38783 0.209267 4.51638C0.0752759 4.64493 4.52912e-07 4.81929 4.37019e-07 5.00108C4.21126e-07 5.18288 0.0752758 5.35724 0.209267 5.48579C0.343258 5.61434 0.52499 5.68656 0.714484 5.68656L17.5192 5.68656L14.254 8.81918C14.1185 8.94826 14.042 9.12368 14.0413 9.30687C14.0406 9.49005 14.1159 9.66599 14.2504 9.79598C14.3849 9.92597 14.5678 9.99935 14.7587 10C14.9497 10.0006 15.133 9.92848 15.2685 9.79941L19.8127 5.43293C19.9326 5.31732 20 5.16081 20 4.99766C20 4.83451 19.9326 4.678 19.8127 4.56238L15.2685 0.202764C15.2021 0.138516 15.1231 0.0875202 15.036 0.0527196C14.949 0.0179191 14.8556 1.45761e-06 14.7612 1.44936e-06C14.6669 1.44112e-06 14.5735 0.0179191 14.4865 0.0527196C14.3994 0.0875201 14.3204 0.138516 14.254 0.202764Z" fill="black"/>
                            </svg>
                        </span>
                    </div>

                </div>

            </div>
            <div class="col-12 col-xl-6 col-lg-6 images"><!-- This will be position:relative -->
                <div class="main-image"><!-- This will stay relative -->
                    <?php if ( get_sub_field( 'main_image' ) ) : ?>
                        <img src="<?php the_sub_field( 'main_image' ); ?>" />
                    <?php endif ?>
                </div>
                <div class="top">
                    <?php if ( get_sub_field( 'top_image' ) ) : ?>
                        <img src="<?php the_sub_field( 'top_image' ); ?>" />
                    <?php endif ?>
                </div>
                <div class="top-right">
                    <?php if ( get_sub_field( 'top_right_image' ) ) : ?>
                        <img src="<?php the_sub_field( 'top_right_image' ); ?>" />
                    <?php endif ?>
                </div>
                <div class="right">
                    <?php if ( get_sub_field( 'right_image' ) ) : ?>
                        <img src="<?php the_sub_field( 'right_image' ); ?>" />
                    <?php endif ?>
                </div>
                <div class="bottom-right">
                    <?php if ( get_sub_field( 'bottom_right_image' ) ) : ?>
                        <img src="<?php the_sub_field( 'bottom_right_image' ); ?>" />
                    <?php endif ?>
                </div>
                <div class="bottom">
                    <?php if ( get_sub_field( 'bottom_image' ) ) : ?>
                        <img src="<?php the_sub_field( 'bottom_image' ); ?>" />
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <svg id='rightMastheadSVG' width="601" height="1260" viewBox="0 0 601 1260" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect y="398.939" width="1044.2" height="1090.94" rx="218" transform="rotate(-37.9347 0 398.939)" fill="#F9F9F9"/>
    </svg>
</section>