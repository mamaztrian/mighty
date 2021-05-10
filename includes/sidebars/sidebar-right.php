<?php
if (!is_active_sidebar('blogright')
    && !is_active_sidebar('pageright')
):
    return;
else:
    if (is_page() || is_404()):
        dynamic_sidebar('pageright');
    else:
        dynamic_sidebar('blogright');
    endif;
endif;
?>