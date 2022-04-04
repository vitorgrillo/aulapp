<div class="m-tutoriais d-flex align-items-center justify-content-between d-select-none py-5 d-bg-gray-light container-fluid">
    <div class="container px-0 py-4">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-6 d-flex flex-column align-items-center align-items-lg-start mb-5 pe-lg-5">
                <h2 class="d-text-green-dark text-center text-lg-start d-font-bold d-text-xxxxl mb-3">
                    <?php the_field('plataforma-titulo',617); ?>
                </h2>
                <p class="d-text-color-dark text-center text-lg-start d-font-medium d-text-md mb-4">
                    <?php the_field('plataforma-texto',617); ?>
                </p>
                <a class="e-btn" target="_blank" href="<?php the_field('plataforma-botao-link',617); ?>"><?php the_field('plataforma-botao-texto',617); ?></a>
            </div>
            <div class="col-12 col-lg-6 ">
                <img class="img-fluid" src="<?php the_field('plataforma-img', 617); ?>" alt="Imagem plataforma">
            </div>
        </div>
    </div>
</div>