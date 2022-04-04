<div class="m-apresentacao d-select-none pt-5 d-bg-gray-light container-fluid">
    <div class="container mt-0 mt-lg-5">
        <div class="row align-items-center">
            
            <div class="col-12 col-lg-5 pe-lg-4 mt-2 pb-3 mb-5 d-flex flex-column align-items-center align-items-lg-start">

                <?php if (is_page_template( 'page-educacional.php' )): ?>
                    <h2 class="d-text-green-dark text-center text-lg-start d-font-bold d-text-xxxl mb-3"><?php the_field('apresentacao-titulo-educacional',54); ?></h2>
                    <p class="d-text-green-dark text-center text-lg-start d-font-medium d-text-sm mb-4"><?php the_field('apresentacao-texto-educacional',54); ?></p>
                    <a class="e-btn" title="<?php the_field('texto_do_botao', 54); ?>" href="<?php echo get_site_url(); ?><?php the_field('link-botao-apresentacao-educacional', 54); ?>"><?php the_field('texto_do_botao',54); ?></a>
                <?php else: ?>
                    <h2 class="d-text-green-dark text-center text-lg-start d-font-bold d-text-xxxl mb-3"><?php the_field('apresentacao-titulo-corporativo',54); ?></h2>
                    <p class="d-text-green-dark text-center text-lg-start d-font-medium d-text-sm mb-4"><?php the_field('apresentacao-texto-corporativo',54); ?></p>
                    <a class="e-btn --brand-color-three" title="<?php the_field('texto_do_botao', 54); ?>" href="<?php the_field('link-botao-apresentacao-corporativo', 54); ?>"><?php the_field('texto_do_botao',54); ?></a>
                <?php endif ?>

            </div>

            <div class="col-12 col-lg-7 ps-lg-4 d-none d-lg-flex align-items-lg-end">

                <?php if (is_page_template( 'page-educacional.php' )): ?>
                    <img class="img-fluid" src="<?php the_field('apresentacao-imagem-educacional',54); ?>" alt="Imagem de apresentação Aulapp educacional">
                <?php else: ?>
                    <img class="img-fluid" src="<?php the_field('apresentacao-imagem-corporativo',54); ?>" alt="Imagem de apresentação Aulapp Corporativo">
                <?php endif ?>

            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-12 p-0 d-lg-none">

            <?php if (is_page_template( 'page-educacional.php' )): ?>
                <img class="img-fluid" src="<?php the_field('apresentacao-imagem-educacional',54); ?>" alt="Imagem de apresentação Aulapp educacional">
            <?php else: ?>
                <img class="img-fluid" src="<?php the_field('apresentacao-imagem-corporativo',54); ?>" alt="Imagem de apresentação Aulapp Corporativo">
            <?php endif ?>
            
        </div>       
    </div>
</div>