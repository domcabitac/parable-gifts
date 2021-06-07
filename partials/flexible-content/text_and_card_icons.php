<section class="text-card-icons" id="<?php the_sub_field( 'id' ); ?>">
<div class="outerContainer">
<div class="container">
        <div class="row d-flex justify-content-end rowing">
            <div class="col-12 col-xl-4 col-lg-6 d-flex justify-content-center text">
            <h4>
                <?php the_sub_field( 'subtitle' ); ?>
            </h4>
            <h2>
                <?php the_sub_field( 'title' ); ?>
            </h2>
            <p>
                <?php the_sub_field( 'text' ); ?>
            </p>
            </div>
            <div class="col-12 col-xl-6 offset-xl-1 col-lg-6">
                <div class="row justify-content-end cardSection">
                        <?php if ( have_rows( 'card_icons' ) ) : ?>
                            <?php while ( have_rows( 'card_icons' ) ) : the_row(); ?>
                            <div class="col-6 justify-content-center align-items-center iconCards">
                                <?php $icon = get_sub_field( 'icon' ); ?>
                                <?php if ( $icon ) : ?>
                                    <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                                <?php endif; ?>
                                <h6>
                                    <?php the_sub_field( 'card_title' ); ?>
                                </h6>
                            </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
                </div>
 
            </div>
        </div>
    </div>

</div>



</section>