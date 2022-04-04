<?php /* Template Name: Plataforma LMS */ ?> <?php get_header(); ?> <div class="container-fluid d-bg-gray-light d-select-none"><div class="container px-0 py-5"><div class="row"><div class="col-12 d-flex flex-column mb-4 pe-5"><h2 class="d-text-green-dark text-center text-lg-start d-font-bold d-text-xxxxl mb-3"> <?php the_field('titulo-central-de-ajuda',331); ?> </h2><div class="d-text-color-dark text-center text-lg-start d-font-medium d-text-md mb-4"> <?php the_field('subtitulo-central-de-ajuda',331); ?> </div></div></div><div class="row"> <?php 
                $args = array(
                    'orderby' => 'ID', 
                    'order' => 'ASC',
                    'parent' => 20,
                    'hide_empty' => false
                );

                $term = get_queried_object();
                
                $icone = get_field('categoria-icone', $term); 

                $categories = get_categories($args); 
                foreach ($categories as $cat) {
            ?> <div class="col-12 mb-3 col-sm-6 col-md-4 col-lg-3 mb-sm-4"><a href="<?php echo get_site_url(); ?>/<?php echo $cat->slug; ?>" class="c-card-topic"><h3 class="c-card-topic__text"><?php echo $cat->cat_name; ?></h3></a></div> <?php } ?> </div></div></div> <?php get_footer(); ?>