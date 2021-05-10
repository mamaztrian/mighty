<div class="mighty_banner_section">
        <?php
        if (!is_active_sidebar('banner')):
            if (get_header_image()) {
                ?>
                <img src="<?php esc_url(header_image());  ?>"/>
                <?php
            } 
            echo '</div>';
            return;
        elseif (is_active_sidebar('banner')):
            dynamic_sidebar('banner');
        else:
            echo '</div>';
            return;
        endif;
        ?>
</div>



