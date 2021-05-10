<?php
function mighty_woocommerce_buttons()
{
    $btn_class = "btn btn-default";
    $btn_class_without_size = "btn btn-default";


    $forumbtn_class = "btn btn-default";
    $forumbtn_class_without_size = "btn btn-default";

    ?>
    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                var $class = "<?php echo $btn_class; ?>";
                var $class_without_size = "<?php echo $btn_class_without_size; ?>";
                var $forumbtnclass = "<?php echo $forumbtn_class; ?>";

                //apply now button in cart page
                $('.woocommerce').find('.coupon').find("input[name='apply_coupon']").addClass($class_without_size).removeClass('button');


                //updatecartbuttonincartpage
                $('.woocommerce').find('.woocommerce-cart-form').find("button[name='update_cart']").addClass($class_without_size).removeClass('button');

                //Proceed to checkout

                $('.woocommerce').find('.wc-proceed-to-checkout').find("a").addClass($class_without_size).addClass('btn-block').removeClass('button').removeClass('checkout-button');

                //listing pages button
                $('.woocommerce').find('.add_to_cart_button ').addClass($class).removeClass('button');
                $('.woocommerce').find('.single_add_to_cart_button  ').addClass($class).removeClass('button');

                //Add btn class support for group product and external product
                $('.woocommerce').find('.button.product_type_grouped ').addClass($class).removeClass('button');
                $('.woocommerce').find('.button.product_type_external ').addClass($class).removeClass('button');

                //apply coupon button
                $('.woocommerce').find("button[name='apply_coupon']").addClass($class_without_size).removeClass('button');

                //place order button
                $('.woocommerce').find("button[name='woocommerce_checkout_place_order']").addClass($class).removeClass('button');

                //Save Address Button
                $('.woocommerce').find("button[name='save_address']").addClass($class).removeClass('button');
                $('.woocommerce').find("button[name='save_account_details']").addClass($class).removeClass('button');

                $('.bbpress').find("button[name='bbp_reply_submit']").addClass($forumbtnclass).removeClass('button');
                $('.bbpress').find("button[name='bbp_topic_submit']").addClass($forumbtnclass).removeClass('button');
                $('a.subscription-toggle').addClass($forumbtnclass).removeClass('button');

            });
        })(jQuery);

    </script>
    <?php
}

add_action('wp_head', 'mighty_woocommerce_buttons');