<div class="m-diferenciais d-select-none pt-5 pb-4 py-lg-5 d-bg-gray-medium container-fluid"><div class="container p-0 pt-lg-5 pb-lg-4"><div class="row mb-5"><div class="col-12 d-flex flex-column align-items-center text-center"><h2 class="d-text-green-dark d-font-bold d-text-xxxxl mb-3"><?php echo get_the_title( 98 ); ?></h2><p class="d-text-color-dark d-font-medium d-text-md mb-4 px-5"><?php echo get_post_field('post_content', 98); ?></p></div></div><div class="row"> <?php
        $args = [
          'type'              => 'post',
          'posts_per_page'    => -1,
          'cat'               => array(11),
          'post__not_in'      => array(98)
        ];
        $novidades = new WP_Query($args);
        if($novidades->have_posts()):
        while($novidades->have_posts()):
        $novidades->the_post();
      ?> <div class="col-12 col-sm-6 col-md-4 mb-5 d-flex flex-column align-items-center text-center"> <?php if (is_page_template( 'page-educacional.php' )): ?> <i class="e-circle-icon --brand-color material-icons mb-4"><?php the_field('icone_diferenciais'); ?></i> <?php else: ?> <i class="e-circle-icon --brand-color-three material-icons mb-4"><?php the_field('icone_diferenciais'); ?></i> <?php endif ?> <h3 class="d-text-green-dark d-font-bold d-text-xxl mb-3"><?php the_field('titulo_diferenciais'); ?></h3><p class="d-text-color-dark d-font-medium d-text-sm text-center px-5 px-sm-2 px-lg-3"><?php the_field('descricao_diferenciais'); ?></p></div> <?php endwhile; else: ?> <p class="col-12 d-text-color-dark d-font-medium d-text-lg mb-4"><?php esc_html_e( 'Cadastrar os diferenciais.' ); ?></p> <?php endif; ?> </div></div></div>