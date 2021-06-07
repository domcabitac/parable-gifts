<section class="top-text-multiple-images" id="<?php the_sub_field( 'id' ); ?>">
<div class="outerContainer">
<div class="container-fluid">
    <div class="row justify-content-center d-flex heading">
            <div class="col-12">
                <h4>
                    <?php the_sub_field( 'subtitle' ); ?>
                </h4>
                <h2>
                    <?php the_sub_field( 'title' ); ?>
                </h2>
            </div>

        </div>
        <div class="row justify-content-center paragraphs">
            <div class="col-12 col-xl-4 col-lg-4 textArea">
                <h5>
                    <?php the_sub_field( 'left_title' ); ?>
                </h5>
                <p>
                    <?php the_sub_field( 'left_text' ); ?>
                </p>
            </div>
            <div class='col-12 col-xl-4 col-lg-4 textArea'>
                <h5>
                    <?php the_sub_field( 'middle_title' ); ?>
                </h5>
                <p>            
                    <?php the_sub_field( 'middle_text' ); ?>
                </p>
            </div>
            <div class='col-12 col-xl-4 col-lg-4 textArea'>
                <h5>
                    <?php the_sub_field( 'right_title' ); ?>
                </h5>
                <p>            
                    <?php the_sub_field( 'right_text' ); ?>
                </p>
            </div>
        </div>
        <div class="d-none d-lg-flex justify-content-center images-desktop">
            <div class='social' id='one'>
                <?php $left_image = get_sub_field( 'left_image' ); ?>
                <?php if ( $left_image ) : ?>
                    <img class='img-fluid' src="<?php echo esc_url( $left_image['url'] ); ?>" alt="<?php echo esc_attr( $left_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class='social' id='two'>
                <?php $middle_image = get_sub_field( 'middle_image' ); ?>
                <?php if ( $middle_image ) : ?>
                    <img class='img-fluid' src="<?php echo esc_url( $middle_image['url'] ); ?>" alt="<?php echo esc_attr( $middle_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class='social' id='three'>
                <?php $right_image = get_sub_field( 'right_image' ); ?>
                <?php if ( $right_image ) : ?>
                    <img class='img-fluid' src="<?php echo esc_url( $right_image['url'] ); ?>" alt="<?php echo esc_attr( $right_image['alt'] ); ?>" />
                <?php endif; ?>
            </div> 
            </div>
            <div class="row justify-content-center images-mobile">
            <div class='col-6 col-xl-4 col-lg-4 social' id='one'>
                <?php $left_image = get_sub_field( 'left_image' ); ?>
                <?php if ( $left_image ) : ?>
                    <img class='img-fluid' src="<?php echo esc_url( $left_image['url'] ); ?>" alt="<?php echo esc_attr( $left_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class='col-6 col-xl-4 col-lg-4 social' id='two'>
                <?php $middle_image = get_sub_field( 'middle_image' ); ?>
                <?php if ( $middle_image ) : ?>
                    <img class='img-fluid' src="<?php echo esc_url( $middle_image['url'] ); ?>" alt="<?php echo esc_attr( $middle_image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class='col-12 col-xl-4 col-lg-4 social' id='three'>
                <?php $right_image = get_sub_field( 'right_image' ); ?>
                <?php if ( $right_image ) : ?>
                    <img class='img-fluid' src="<?php echo esc_url( $right_image['url'] ); ?>" alt="<?php echo esc_attr( $right_image['alt'] ); ?>" />
                <?php endif; ?>
            </div> 
            </div>
        </div>
        </div>

    </div>

</div>
</div>


</section>