</main>

<!-- Footer -->
<?php $locations = get_nav_menu_locations();
$logo_alt = get_field('footer_logo_alt', 'option');
$button = get_field('footer_button', 'option'); ?>

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
                        the_custom_logo();
                    endif;
                endif;
                ?>
                <div class="socials">
                    <?php while (have_rows('footer_social', 'option')) : the_row();
                        $icon = get_sub_field('icon');
                        $url = get_sub_field('url'); ?>
                        <a href="<?php echo $url; ?>" target="_blank" class="social">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/<?php echo $icon; ?>.svg" alt="<?php echo $icon; ?>">
                        </a>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="menus">
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
            <?php if ($button) :
                $button_url = $button['url'];
                $button_title = $button['title'];
                $button_target = $button['target'] ? $button['target'] : '_self';
            ?>
                <a href="<?php echo $button_url; ?>" target="<?php echo $button_target; ?>" class="btn btn-primary"><?php echo $button_title; ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <?php wp_nav_menu(array('theme_location' => 'sub-footer-menu', 'menu_class' => 'menu menu-sub-footer', 'container' => false, 'depth' => 1)); ?>
            <!-- OpenDyslexic Toggle -->
            <div class="dyslexic-toggle">
                <input type="checkbox" id="open-dyslexic" name="open-dyslexic" class="screen-reader-only" />
                <label for="open-dyslexic"><?php echo __('Enable OpenDyslexic', 'usefool'); ?></label>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>