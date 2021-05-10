<?php
if (is_active_sidebar('cta')):
    ?>
    <div class="mighty_cta_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php dynamic_sidebar('cta'); ?>
                </div>
            </div>
        </div>
    </div>
<?php else:
    return;
endif;
?>