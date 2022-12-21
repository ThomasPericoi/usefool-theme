<?php

/**
 * Sample Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

$text = get_field('text') ?: 'Lorem Ipsum';

$classes = 'sample';
if (!empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}

$styles = array("");
$style  = implode('; ', $styles);
?>

<div class="<?php echo esc_attr($classes); ?>" style="<?php echo esc_attr($style); ?>">
    <p><?php echo $text; ?></p>
</div>