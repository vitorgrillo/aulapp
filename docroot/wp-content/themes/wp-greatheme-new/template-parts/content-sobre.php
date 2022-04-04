<div class="m-sobre d-select-none pt-3 pb-5 d-bg-gray-light container-fluid">
    <div class="container p-0 mt-0 mt-lg-5 pb-3">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-6 col-xxl-5 pe-lg-4 mt-2 mb-5 mb-lg-0 text-center text-lg-start">
                <h2 class="d-text-green-dark d-font-bold d-text-xxxl mb-3">
                    <?php the_field('sobre-introducao-titulo',256); ?>
                </h2>
                <p class="d-text-green-dark d-font-medium d-text-sm mb-4">
                    <?php the_field('sobre-introducao-texto',256); ?>
                </p>
            </div>
            <div class="col-12 col-lg-6 ps-lg-4">
                <img class="img-fluid" src="<?php the_field('sobre-introducao-imagem',256); ?>">
            </div>
        </div>
    </div>
</div>