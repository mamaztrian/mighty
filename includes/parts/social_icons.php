<?php
$_mighty = get_theme_mods();
echo '<div class="mighty_social_icons"><ul>';
if (!empty($_mighty['mighty_twitter'])) echo '<li><a title="'. esc_attr__('Twitter', 'mighty') .'" class="link-twitter" href="' . esc_url($_mighty['mighty_twitter']) . '" target="_blank"><i class="fab fa-facebook-f"></i></a></li>';

if (!empty($_mighty['mighty_facebook'])) echo '<li><a title="'. esc_attr__('Facebook', 'mighty') .'" class="link-facebook"  href="' . esc_url($_mighty['mighty_facebook']) . '" target="_blank"><i class="fab fa-twitter"></i></a></li>';
if (!empty($_mighty['mighty_google'])) echo '<li><a title="'. esc_attr__('Google+', 'mighty') .'" class="link-google" href="' . esc_url($_mighty['mighty_google']) . '" target="_blank"><i class="fab fa-google-plus"></i></a></li>';

if (!empty($_mighty['mighty_linkedin'])) echo '<li><a title="'. esc_attr__('Linkedin', 'mighty') .'" class="link-linkedin" href="' . esc_url($_mighty['mighty_linkedin']) . '" target="_blank"><i class="fab fa-linkedin"></i></a></li>';

if (!empty($_mighty['mighty_pinterest'])) echo '<li><a title="'. esc_attr__('Pinterest', 'mighty') .'" class="link-pinterest" href="' . esc_url($_mighty['mighty_pinterest']) . '" target="_blank"><i class="fab fa-pinterest"></i></a></li>';

if (!empty($_mighty['mighty_flickr'])) echo '<li><a title="'. esc_attr__('Flickr', 'mighty') .'" class="link-flickr" href="' . esc_url($_mighty['mighty_flickr']) . '" target="_blank"><i class="fab fa-flickr"></i></a></li>';

if (!empty($_mighty['mighty_youtube'])) echo '<li><a title="'. esc_attr__('Youtube', 'mighty') .'" class="link-youtube" href="' . esc_url($_mighty['mighty_youtube']) . '" target="_blank"><i class="fab fa-youtube"></i></a></li>';

if (!empty($_mighty['mighty_vimeo'])) echo '<li><a title="'. esc_attr__('Vimeo', 'mighty') .'" class="link-vimeo" href="' . esc_url($_mighty['mighty_vimeo']) . '" target="_blank"><i class="fab fa-vimeo"></i></a></li>';

if (!empty($_mighty['mighty_instagram'])) echo '<li><a title="'. esc_attr__('Instagram', 'mighty') .'" class="link-instagram" href="' . esc_url($_mighty['mighty_instagram']) . '" target="_blank"><i class="fab fa-instagram"></i></a></li>';

if (!empty($_mighty['mighty_stumbleupon'])) echo '<li><a title="'. esc_attr__('stumbleupon', 'mighty') .'" class="link-stumbleupon" href="' . esc_url($_mighty['mighty_stumbleupon']) . '" target="_blank"><i class="fab fa-stumbleupon"></i></a></li>';

if (!empty($_mighty['mighty_tumblr'])) echo '<li><a title="'. esc_attr__('tumblr', 'mighty') .'" class="link-tumblr"  href="' . esc_url($_mighty['mighty_tumblr']) . '" target="_blank"><i class="fab fa-tumblr"></i></a></li>';

if (!empty($_mighty['mighty_wp'])) echo '<li><a title="'. esc_attr__('WordPress', 'mighty') .'" class="link-wordpress" href="' . esc_url($_mighty['mighty_wp']) . '" target="_blank"><i class="fab fa-wordpress"></i></a></li>';

if (!empty($_mighty['mighty_dribbble'])) echo '<li><a title="'. esc_attr__('Dribble', 'mighty') .'" class="link-dribble"  href="' . esc_url($_mighty['mighty_dribbble']) . '" target="_blank"><i class="fab fa-dribbble"></i></a></li>';

if (!empty($_mighty['mighty_rss'])) echo '<li><a title="'. esc_attr__('rss', 'mighty') .'" class="link-rss"  href="' . esc_url($_mighty['mighty_rss']) . '" target="_blank"><i class="fa fa-rss"></i></a></li>';

echo '</ul></div>';
?>