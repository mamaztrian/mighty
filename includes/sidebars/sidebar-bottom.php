<?php
if (!is_active_sidebar('bottom1')
    && !is_active_sidebar('bottom2')
    && !is_active_sidebar('bottom3')
    && !is_active_sidebar('bottom4')
) :
    return;
else:
    ?>
    <div class="mighty_bottom_widget">
        <div class="container">
            <div class="row">
                <?php if (is_active_sidebar('bottom1')): ?>
                    <div id="bottom1" <?php mighty_bottomgroup(); ?> role="complementary">
                        <?php dynamic_sidebar('bottom1'); ?>
                    </div><!-- #top1 -->
                <?php endif; ?>

                <?php if (is_active_sidebar('bottom2')): ?>
                    <div id="bottom2" <?php mighty_bottomgroup(); ?> role="complementary">
                        <?php dynamic_sidebar('bottom2'); ?>
                    </div><!-- #top2 -->
                <?php endif; ?>

                <?php if (is_active_sidebar('bottom3')): ?>
                    <div id="bottom3" <?php mighty_bottomgroup(); ?> role="complementary">
                        <?php dynamic_sidebar('bottom3'); ?>
                    </div><!-- #top3 -->
                <?php endif; ?>

                <?php if (is_active_sidebar('bottom4')): ?>
                    <div id="bottom4" <?php mighty_bottomgroup(); ?> role="complementary">
                        <?php dynamic_sidebar('bottom4'); ?>
                    </div><!-- #top4 -->
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php endif; ?>