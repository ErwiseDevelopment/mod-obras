<section class="l-new-home-about my-5">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-5 pl-lg-0"> 
                        <!-- <img
                        class="img-fluid h-100"
                        src="<php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/new-home-about-image-1.png"
                        alt=""> -->

                        <img
                        class="img-fluid h-100"
                        src="<?php echo get_field( 'imagem_quem_somos' ) ?>"
                        alt="Quem Somos">
                    </div>

                    <div class="col-lg-5 mt-3 mt-md-0">

                        <h3 class="u-title--highlight u-font-weight-bold text-uppercase all:u-color-folk-theme mb-4">
                            quem <span class="u-font-weight-black">somos</span>
                        </h3>

                        <!-- <p class="l-new-home-about__text u-font-weight-medium text-justify">
                            O Parque Dom Bosco é uma obra social da Rede
                            Salesiana Brasil, que atua na cidade de Itajaí na
                            educação e evangelização de crianças, adolescentes e jovens <br>

                            <br>

                            Temos 60 anos de serviços prestados a comunidade
                            Itajaiense atuando na educação e evangelização de
                            crianças, adolescentes e jovens. Sinta-se em casa, você
                            será sempre bem-vindo!
                        </p> -->

                        <span class="l-new-home-about__text d-block u-font-weight-medium text-justify">
                            <?php echo get_field( 'descricao_quem_somos' ) ?>
                        </span>

                        <div class="row justify-content-end">

                            <div class="col-md-12">

                                <a class="l-news__small__card-read-more u-line-height-100 hover:u-opacity-8 d-block u-font-weight-bold text-center text-decoration-none u-color-folk-white u-bg-folk-primary py-2 px-5" 
                                href="<?php echo get_field('botao_parceiro', 'option')?>">
                                    Seja um parceiro
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>