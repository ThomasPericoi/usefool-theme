</main>

<!-- Footer -->
<?php $locations = get_nav_menu_locations();
$logo_alt = get_field('footer_logo_alt', 'option');
$button = get_field('footer_button', 'option');
$open_dyslexic = get_field('footer_open_dyslexic', 'option');
$open_dyslexic_label = get_field('footer_open_dyslexic_label', 'option') ?: __('Enable OpenDyslexic', 'usefool'); ?>

<footer id="footer">
    <div id="main-footer">
        <div class="container">
            <div class="informations">
                <?php
                if (!empty($logo_alt)) : ?>
                    <a href="<?php echo get_home_url(); ?>" class="custom-logo-link" rel="home" aria-current="page">
                        <img src="<?php echo esc_url($logo_alt['url']); ?>" alt="<?php echo esc_attr($logo_alt['alt']); ?>" class="custom-logo">
                    </a>
                    <?php else :
                    if (function_exists('the_custom_logo')) :
                        if (has_custom_logo()) :
                            the_custom_logo();
                        else : ?>
                            <a href="<?php echo site_url(); ?>" class="custom-logo-link h5-size">
                                <?php echo get_bloginfo(); ?>
                            </a>
                <?php endif;
                    endif;
                endif;
                ?>
                <?php if (have_rows('footer_social', 'option')) : ?>
                    <div class="socials">
                        <?php while (have_rows('footer_social', 'option')) : the_row();
                            $icon = get_sub_field('icon');
                            $url = get_sub_field('other') ?: get_sub_field('url'); ?>
                            <a href="<?php echo $url; ?>" target="_blank" class="social">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/socials/<?php echo $icon; ?>.svg" alt="<?php echo $icon; ?>">
                            </a>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="menus">
                <?php if (have_rows('footer_widgets', 'option')) : ?>
                    <div class="widgets">
                        <?php while (have_rows('footer_widgets', 'option')) : the_row();
                            $title = get_sub_field('title');
                            $text = get_sub_field('text'); ?>
                            <div>
                                <?php if ($title) : ?>
                                    <h3 class="h5-size"><?php echo $title; ?></h3>
                                <?php endif; ?>
                                <?php if ($text) : ?>
                                    <div class="list">
                                        <?php echo $text; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if (has_nav_menu('main-footer-menu-1')) : ?>
                    <div class="menu menu-main-footer">
                        <h3 class="h5-size"><?php echo wp_get_nav_menu_object($locations['main-footer-menu-1'])->name; ?></h3>
                        <?php wp_nav_menu(array('theme_location' => 'main-footer-menu-1', 'container' => false, 'depth' => 1)); ?>
                    </div>
                <?php endif; ?>
                <?php if (has_nav_menu('main-footer-menu-2')) : ?>
                    <div class="menu menu-main-footer">
                        <h3 class="h5-size"><?php echo wp_get_nav_menu_object($locations['main-footer-menu-2'])->name; ?></h3>
                        <?php wp_nav_menu(array('theme_location' => 'main-footer-menu-2', 'container' => false, 'depth' => 1)); ?>
                    </div>
                <?php endif; ?>
                <?php if (has_nav_menu('main-footer-menu-3')) : ?>
                    <div class="menu menu-main-footer">
                        <h3 class="h6-size"><?php echo wp_get_nav_menu_object($locations['main-footer-menu-3'])->name; ?></h3>
                        <?php wp_nav_menu(array('theme_location' => 'main-footer-menu-3', 'container' => false, 'depth' => 1)); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($button['content']) :
                $button_url = $button['content']['url'];
                $button_title = $button['content']['title'];
                $button_target = $button['content']['target'] ? $button['content']['target'] : '_self';
                $button_icon = $button['icon'];
            ?>
                <a href="<?php echo $button_url; ?>" target="<?php echo $button_target; ?>" class="btn <?php if ($button_icon != "none") : ?>btn-icon-<?php echo $button_icon; ?><?php endif; ?>"><?php echo $button_title; ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <?php wp_nav_menu(array('theme_location' => 'sub-footer-menu', 'menu_class' => 'menu menu-sub-footer', 'container' => false, 'depth' => 1)); ?>
            <?php if ($open_dyslexic) : ?>
                <!-- OpenDyslexic Toggle -->
                <div class="dyslexic-toggle">
                    <input type="checkbox" id="open-dyslexic" name="open-dyslexic" class="screen-reader-only" />
                    <label for="open-dyslexic"><?php echo $open_dyslexic_label; ?></label>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>