<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="container-fluid d-bg-gray-light py-5">
    <div class="container px-0 py-3">
        <div class="row">
            <div class="col-12">
                <h1 class="d-text-green-dark d-font-bold d-text-xxl mb-3"><?php the_title();?></h1>
                <div class="d-text-color-dark d-font-medium"><?php the_content(); ?></div>
            </div>
        </div>
    </div>
</div>

</div>
<?php endwhile; ?>

<?php get_footer(); ?>