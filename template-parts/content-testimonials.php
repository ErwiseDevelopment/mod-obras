<section class="l-testimonals"> 

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-10 offset-1">

                        <h3 class="u-title--highlight u-font-weight-black text-uppercase u-color-folk-theme">
                            depoimentos:
                        </h3>
                    </div>
                </div>

                <!-- swiper -->
                <div class="swiper-container js-swiper-testimonials">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                            $count = 0;

                            if( have_rows( 'depoimentos_all', 'option' ) ) :
                                while( have_rows( 'depoimentos_all', 'option' ) ) : the_row();
                                $count++;
                        ?>
                                    <div 
                                    class="swiper-slide flex-column align-items-start"
                                    data-value="<?php echo $count; ?>">

                                        <div class="mx-auto">
                                            <span class="u-title--highlight u-line-height-100 u-font-weight-black u-color-folk-theme">
                                                “
                                            </span>
                                        </div>

                                        <!-- <p class="l-testimonials__text u-font-weight-medium">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tincidunt iaculis quam, vitae rhoncus ligula vestibulum quis. Fusce ac orci nec neque porttitor luctus nec ut urna. Nunc condimentum luctus metus nec suscipit. Vestibulum vitae velit eu velit tincidunt euismod. Praesent commodo velit sit amet rhoncus molestie. Integer accumsan sollicitudin interdum. 
                                        </p> -->

                                        <span class="l-testimonials__text d-block u-font-weight-medium">
                                            <?php 
                                                
                                                echo limit_words(get_sub_field( 'depoimento__descricao' ), 60); 
                                                
                                                add_read_more(get_sub_field( 'depoimento__descricao' ), 60, $count);
                                            ?>
                                        </span>
                                        <p class="l-testimonials__date u-font-weight-bold u-color-folk-theme">
                                        <?php echo get_sub_field ('nome_ou_empresa', 'option'); ?>
                                        </p>

                                        </div>
                        <?php
                                endwhile;
                            endif;
                        ?>
                        <!--  end slide -->

                        
                    </div>
                </div>

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-partners swiper-button-prev-best-sellers d-none d-lg-flex after::u-color-folk-white u-bg-folk-theme js-swiper-button-prev-testimonials"></div>
                <div class="swiper-button-next swiper-button-next-partners swiper-button-next-best-sellers d-none d-lg-flex after::u-color-folk-white u-bg-folk-theme js-swiper-button-next-testimonials"></div>
                <!-- end swiper -->
            </div>

            <div class="col-12 d-lg-none mt-4">

                <div class="row">

                    <div class="col-6">
                        <div class="swiper-button-prev swiper-button-prev-partners swiper-button-prev-best-sellers after::u-color-folk-white u-bg-folk-theme js-swiper-button-prev-testimonials"></div>
                    </div>

                    <div class="col-6">
                        <div class="swiper-button-next swiper-button-next-partners swiper-button-next-best-sellers after::u-color-folk-white u-bg-folk-theme js-swiper-button-next-testimonials"></div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-5 mb-4 pt-4">

                <div class="row justify-content-center">

                    <div class="col-lg-4">
                        <a 
                        class="l-blogs__read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-primary py-2 px-5" 
                        href="<?php echo get_home_url(null, '/') . 'depoimento' ?>">
                            Deixe um depoimento!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- modal testimonials -->
<?php
    $count = 0;

    if( have_rows( 'depoimentos_all', 'option' ) ) :
        while( have_rows( 'depoimentos_all', 'option' ) ) : the_row();
        $count++;
?>
            <div 
            class="l-modal-testimonials js-modal-testimonials"
            data-value="<?php echo $count; ?>">

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-lg-6">
                            
                            <p class="l-modal-testimonials__btn-close hover:u-opacity-8 u-box-shadow-pattern d-inline-block u-font-weight-bold u-color-folk-white u-bg-folk-secondary u-cursor-pointer py-2 px-4 js-modal-testimonials-btn-close">
                                Fechar
                            </p>
                           
                            <div class="l-modal-testimonials__box u-box-shadow-pattern u-bg-folk-white p-3">
                                <p class="l-testimonials__date u-font-weight-bold u-color-folk-theme">
                                <?php echo get_sub_field ('nome_ou_empresa', 'option'); ?>
                                </p>
                                <p class="u-font-size-14">
                                    <?php echo get_sub_field( 'depoimento__descricao' ) ?>
                                </p>

                               
                                
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
        endwhile;
    endif;
?>
<!-- end modal testimonials -->