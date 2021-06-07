<section class="image-stats" id="<?php the_sub_field( 'id' ); ?>">
<div class="outerContainer">
<div class="container">
    <svg id='halfCircleLeft' width="176" height="539" viewBox="0 0 176 539" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M-94 539V462C12.4571 462 98.8571 375.76 98.8571 269.5C98.8571 163.24 12.4571 77 -94 77V0C54.8857 0 176 120.89 176 269.5C176 418.11 54.8857 539 -94 539Z" fill="#DDE7EC" fill-opacity="0.2"/>
</svg>

        <div class="row">
            <div class="col-7 col-xl-7 col-lg-6 d-flex justify-content-center align-items-center">
                <?php $image = get_sub_field( 'image' ); ?>
                <?php if ( $image ) : ?>
                    <img id='foodLady' src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-12 col-xl-5 col-lg-6 factsArea">
                <h4>
                    <?php the_sub_field( 'subtitle' ); ?>
                </h4>
                <h2>
                    <?php the_sub_field( 'title' ); ?>
                </h2>
                <div class="row statArea">
                    <?php if ( have_rows( 'stats_area' ) ) : ?>
                        <?php while ( have_rows( 'stats_area' ) ) : the_row(); ?>
                            <div class="col-12 col-xl-6 col-lg-6 col-md-6 stats">
                                <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="23.5" cy="23.5" r="23.5" fill="#EF476F" fill-opacity="0.5"/>
                                </svg>
                                <div class="topStat">
                                    <div class="number">
                                        <?php the_sub_field( 'number' ); ?>
                                    </div>
                                    <div class="type">
                                        <?php the_sub_field( 'stat_type' ); ?>
                                    </div>
                                </div>
                                <div class="bottomStat">
                                    <?php the_sub_field( 'stat_subtitle' ); ?>
                                </div>
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