<footer class="m-footer d-select-none d-bg-gray-light"><div class="container-fluid --d-border-top"><div class="container p-0"><div class="row py-5 mt-4"><div class="col-12 d-flex align-items-center justify-content-center"><a title="<?php echo get_theme_mod( 'text_socialmedia_1' ); ?>" href="<?php echo get_theme_mod( 'link_socialmedia_1' ); ?>" target="_blank"> <?php
                            $socialmedia = get_theme_mod( 'icon_socialmedia_1' );
                            if ( $socialmedia ) {
                                echo wp_get_attachment_image( $socialmedia, array('30', '30'), '', array( "class" => "e-social-icon mx-2"));
                            }
                        ?> </a><a title="<?php echo get_theme_mod( 'text_socialmedia_2' ); ?>" href="<?php echo get_theme_mod( 'link_socialmedia_2' ); ?>" target="_blank"> <?php
                            $socialmedia = get_theme_mod( 'icon_socialmedia_2' );
                            if ( $socialmedia ) {
                                echo wp_get_attachment_image( $socialmedia, array('30', '30'), '', array( "class" => "e-social-icon mx-2"));
                            }
                        ?> </a><a title="<?php echo get_theme_mod( 'text_socialmedia_3' ); ?>" href="<?php echo get_theme_mod( 'link_socialmedia_3' ); ?>" target="_blank"> <?php
                            $socialmedia = get_theme_mod( 'icon_socialmedia_3' );
                            if ( $socialmedia ) {
                                echo wp_get_attachment_image( $socialmedia, array('30', '30'), '', array( "class" => "e-social-icon mx-2"));
                            }
                        ?> </a></div></div><div class="row pb-5 mb-4"><div class="col-12"><div class="c-navbar --footer"> <?php wp_nav_menu( array( 
                            'theme_location' => 'footer_menu', 
                            ) );
                        ?> </div></div></div></div></div><div class="container-fluid --d-border-top"><div class="container"><div class="row py-3"><div class="col-12 d-flex flex-column flex-md-row align-items-center justify-content-md-between"><p class="d-flex align-items-center mb-4 m-md-0"><span class="d-text-xs me-3"><?php echo get_theme_mod( 'text_company' ); ?></span> <?php
                            $logo_company = get_theme_mod( 'logo_company' );
                            if ( $logo_company ) {
                                echo wp_get_attachment_image( $logo_company, array('44', '44'), '', array( "class" => ""));
                            }
                        ?> </p><p class="d-flex align-items-center m-0"><span class="d-text-xs me-3"><?php echo get_theme_mod( 'text_associated' ); ?></span> <?php
                            $logo_company = get_theme_mod( 'logo_associated_1' );
                            if ( $logo_company ) {
                                echo wp_get_attachment_image( $logo_company, array('120', '44'), '', array( "class" => "me-3"));
                            }
                        ?> <?php
                            $logo_company = get_theme_mod( 'logo_associated_2' );
                            if ( $logo_company ) {
                                echo wp_get_attachment_image( $logo_company, array('44', '44'), '', array( "class" => ""));
                            }
                        ?> </p></div></div></div></div></footer> <?php wp_footer(); ?>