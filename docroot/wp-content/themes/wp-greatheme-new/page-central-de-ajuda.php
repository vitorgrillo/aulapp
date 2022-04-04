<?php /* Template Name: Central de Ajuda */ ?>

<?php get_header(); ?>

<div class="container-fluid d-bg-gray-light">
    <div class="container px-0 py-5">

        <div class="row">
            <div class="col-12 d-flex flex-column mb-4 pe-lg-5">
                <h2 class="d-text-green-dark text-center text-lg-start d-font-bold d-text-xxxxl mb-3">
                    <?php the_field('titulo-central-de-ajuda',331); ?>
                </h2>
                <div class="d-text-color-dark text-center text-lg-start d-font-medium d-text-md mb-4">
                    <?php the_field('subtitulo-central-de-ajuda',331); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <ul class="e-card-area d-flex mb-5 mb-lg-0">
                    <?php 
                        $args = array(
                            'orderby' => 'ID', 
                            'order' => 'ASC',
                            'parent' => 27,
                            'hide_empty' => false
                        );

                        $categories = get_categories($args); 
                        foreach ($categories as $cat) {
                    ?>

            
                        <a class="e-card-area__link" href="<?php echo get_site_url(); ?>/<?php echo $cat->slug; ?>">
                            <li class="e-card-area__item">
                                <!-- <span class="e-card-area__icon material-icons">done</span> -->
                                <span class="e-card-area__text"><?php echo $cat->cat_name; ?></span>
                            </li>
                        </a>


                    <?php } ?>
                </ul>
            </div>

            <div class="col-lg-5 d-flex flex-column align-items-center align-items-lg-start pe-5 d-bg-brand-color-two d-color-white p-5">
                <h3 class="d-font-bold text-center text-lg-start mb-3">Ainda tem dúvidas?</h3>
                <p class="d-font-regular text-center text-lg-start mb-4">Entre em contato com um dos nossos especialistas:<br>
                Segunda a Sexta das 08h às 17h (exceto feriados nacionais)</p>               
                <ul class="e-list-text-icon">
                    <li class="e-list-text-icon__item">
                        <a class="e-list-text-icon__link" href="https://ies2.xgen.com.br/ies2/form_chat_cliente.html">
                            <i class="e-list-text-icon__icon fas fa-comment"></i>
                            <span class="e-list-text-icon__text">Chat</span>
                        </a>
                    </li>
                    <li class="e-list-text-icon__item">
                        <a class="e-list-text-icon__link" href="mailto:meajuda@aulapp.com.br">
                            <i class="e-list-text-icon__icon fas fa-envelope-square"></i>
                            <span class="e-list-text-icon__text">E-mail</span>
                        </a>
                    </li>
                    <!-- <li class="e-list-text-icon__item">
                        <a class="e-list-text-icon__link" href="#">
                            <i class="e-list-text-icon__icon fab fa-whatsapp-square"></i>
                            <span class="e-list-text-icon__text">Whatsapp</span>
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>