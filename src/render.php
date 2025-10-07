<?php

$id = 0;
$is_sauce = get_post_type($id) === 'sauce';

if ($is_sauce) {
    // get current id
    $id = get_the_ID();
} else {
    // get random id
    $id = get_posts([
        'post_type' => 'sauce',
        'posts_per_page' => 1,
        'orderby' => 'rand',
    ])[0]->ID;
}

$packshot_id = get_post_thumbnail_id($id);
$sauce_style_image_id = get_field('sauce_style_image', $id);
$url = get_permalink($id);
$sauce_banner_skyline = esc_html(get_field('sauce_banner_skyline', $id));
$sauce_banner_headline = esc_html(get_field('sauce_banner_headline', $id));
$sauce_style_color_1 = esc_attr(get_field('sauce_style_color_1', $id)) ?? '#F18318';
$sauce_style_color_2 = esc_attr(get_field('sauce_style_color_2', $id)) ?? '#4D3C15';
$sauce_style_image_id = get_field('sauce_style_image', $id);
?>

<div <?php echo get_block_wrapper_attributes(); ?>>
    <span class="sauce-banner__bg-1" style="background-color: <?php echo $sauce_style_color_1; ?>"></span>
    <span class="sauce-banner__bg-2" style="background-color: <?php echo $sauce_style_color_2; ?>"></span>

    <div class="container">
        <?php echo
        wp_get_attachment_image($packshot_id) ? "<a href='$url'>" . wp_get_attachment_image(
            $packshot_id,
            'medium',
            false,
            ['class' => 'sauce-banner__packshot']
        ) . '</a>' : '',
        '<div class="sauce-banner__info">',
        wp_get_attachment_image(
            $sauce_style_image_id,
            '1536x1536',
            false,
            ['class' => 'sauce-banner__style-image']
        ), ($sauce_banner_skyline || $sauce_banner_headline) && !$is_sauce ? "<a href='$url'>" : '',
        $sauce_banner_skyline ? "<p class='sauce-banner__skyline' style='background-color: $sauce_style_color_2'>$sauce_banner_skyline</p>" : '',
        $sauce_banner_headline ? "<h4 class='sauce-banner__headline'>$sauce_banner_headline</h4>" : '', ($sauce_banner_skyline || $sauce_banner_headline) && !$is_sauce ? '</a>' : '',
        !$is_sauce ? "<a class='button' href='$url'>" . __('Go to sauce', 'fg-sauce-banner') . "</a>" : '',
        '</div>';
        ?>
    </div>
</div>