</main>

<!-- Footer -->
<footer>
    <div id="main-footer">
        <div class="container">

        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <?php wp_nav_menu(array('theme_location' => 'sub-footer-menu', 'menu_class' => 'menu menu-sub-footer', 'container' => false, 'depth' => 1)); ?>
            <!-- OpenDyslexic Toggle -->
            <div class="dyslexic-toggle">
                <input type="checkbox" id="open-dyslexic" name="open-dyslexic" />
                <label for="open-dyslexic"><?php echo __('Enable OpenDyslexic', 'usefool'); ?></label>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>