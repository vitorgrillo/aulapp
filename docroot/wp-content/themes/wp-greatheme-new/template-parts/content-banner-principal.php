<div class="m-banner-principal d-bg-gray-light">
  <div class="container-fluid">
    <?php if (is_page_template('page-educacional.php')) : ?>
      <div class="container banner-slider educacional">
        <div class="row">
          <div class="col-12">
            <?php echo do_shortcode('[metaslider id="1268"]'); ?>
          </div>
        </div>
      </div>
    <?php else : ?>
      <div class="container banner-slider corporativo">
        <div class="row">
          <div class="col-12">
            <?php echo do_shortcode('[metaslider id="1272"]'); ?>
          </div>
        </div>
      </div>
    <?php endif ?>
  </div>
</div>

<?php if (is_page_template('page-educacional.php')) : ?>
  <?php if (get_field('educacional-video-banner', 703)) : ?>

    <div class="container-fluid video d-bg-brand-color-two py-5">
      <div class="container py-4">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-lg-10">

            <div class="video-wrapper">
              <iframe title="iframe" src="<?php the_field('educacional-video-banner', 703); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
              </iframe>
            </div>

          </div>
        </div>
      </div>
    </div>

  <?php else : ?>

    <div class="container-fluid video d-bg-brand-color-two py-5">
      <div class="container">
      </div>
    </div>

  <?php endif; ?>
<?php endif; ?>

<?php if (is_page_template('page-corporativo.php')) : ?>
  <?php if (get_field('corporativo-video-banner', 709)) : ?>

    <div class="container-fluid video d-bg-brand-color-two py-5">
      <div class="container py-4">
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-lg-10">

            <div class="video-wrapper">
              <iframe title="iframe" src="<?php the_field('corporativo-video-banner', 709); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
              </iframe>
            </div>

          </div>
        </div>
      </div>
    </div>

  <?php else : ?>

    <div class="container-fluid video d-bg-brand-color-two py-5">
      <div class="container">
      </div>
    </div>

  <?php endif; ?>
<?php endif; ?>
