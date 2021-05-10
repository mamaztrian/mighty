/*
==================================================================================
This is the extra js files used in the theme
==================================================================================
*/
(function ($) {
    jQuery(function ($) {

        $(".btn").addClass("normal");
        $(".btn").mouseover(function(){
            $(this).removeClass("normal");
        });
        $(".btn").mouseleave(function(){
            $(this).addClass("normal");
        });
        $(".btn").click(function(){
            $(this).addClass("active")
        });


        $('iframe').removeAttr('width');
        $('iframe').removeAttr('height');


        $("i.mighty_icon").addClass("normal");
        $("i.mighty_icon").mouseover(function(){
            $(this).removeClass("normal");
        });
        $("i.mighty_icon").mouseleave(function(){
            $(this).addClass("normal");
        });

        $('table').addClass('table table-boardered');
        $('#bbp_search').addClass('form-control');
        $('#bbp-search-form').addClass('input-group');
        $('#bbp_topic_title').addClass('form-control');
        $('#bbp_topic_content').addClass('form-control');
        $('#bbp_topic_tags').addClass('form-control');
        $('#bbpress-forums select').addClass('form-control');
        $('#bbp_anonymous_author').addClass('form-control col-md-6');
        $('#bbp_anonymous_email').addClass('form-control col-md-6');
        $('#bbp_anonymous_website').addClass('form-control col-md-6');
        $('.wpcf7-form-control').addClass('form-control');
        $('.wpcf7-submit').removeClass('form-control').addClass('btn btn-primary mighty_radius normal');
        $('.gfield').find('input[type="text"]').addClass('form-control');
        $('.gfield').find('textarea').addClass('form-control');
        $('.gfield').find('select').addClass('form-control');
        $('.gform_button').removeClass('button').addClass('btn btn-primary');

        $('.bbp-login-form').find('input').addClass('form-control');
        $('.bbp-login-form').find('button').addClass('btn btn-primary');

        //For Cart Empty Page
        $('.wc-backward').removeClass('wc-backward').removeClass('button').addClass('btn btn-primary normal');

        //$('.contactform_layout1 .wpcf7-submit').addClass('btn-block');
        //WooCommerce Add Class Form Control
        $('.input-text').addClass('form-control');

        //comments forms layout
        $('#respond').find('input').addClass('form-control');
        $('#respond').find('textarea').addClass('form-control');
        $('#respond').find('input[type="checkbox"]').removeClass('form-control');
        $('#respond').find('input[type="submit"]').removeClass('form-control').addClass('btn btn-primary');
        $('.country_to_state').addClass('form-control');


        $('.carousel').carousel()

        //deactivate zoom of main single product image in mobile view

        //Rating icons Show on Hover on Product
        $(".woocommerce_product_list_single").mouseover(function () {
            var rating_width = $('.rating').width();
            var image_width = $('.woocommerce_product_list_single').width();
            var margin_right_for_rating1 = image_width / 2 - 70;
            var margin_right_for_rating = margin_right_for_rating1;
            $(this).find(".rating").css({'marginLeft': margin_right_for_rating, 'display': 'block'});
        }).mouseleave(function () {
            $(".rating").hide();
        });


        //Replacing image on the main product when clicking on the thumbnails
        $(".zoom_thumbnails_image").click(function () {
            var href = $(this).attr('link');
            $(".attachment-shop_single").removeAttr('src');
            $(".woocommerce-main-image").removeAttr('href');
            $(".attachment-shop_single").removeAttr('data-zoom-image');
            $(".attachment-shop_single").attr('data-zoom-image', href);
            $(".woocommerce-main-image").attr('href', href);
            $(".attachment-shop_single").attr('src', href);
            $(".zoomWindow").css('background-image', 'url(' + href + ')');
            $(".zoomContainer").css('height', 'auto');
        });

        //thumbnail change on click single product
        var current_thumbnail_image_url = "";
        $(".woocommerce_product_list_single").mouseover(function () {
            current_thumbnail_image_url = $(this).find(".wp-post-image").attr('src');

            var new_thumbnail_image_url = $(this).find(".thumbnail_jquery_effect img").attr('src');
            if (new_thumbnail_image_url == null) {

            }
            else {
                $(this).find(".wp-post-image").removeAttr('src');
                $(this).find(".wp-post-image").attr('src', new_thumbnail_image_url);
            }

        }).mouseleave(function () {
            $(this).find(".wp-post-image").attr('src', current_thumbnail_image_url);

        });


        //category listing animation of title
        $(".woocommerce_category_list_single").mouseover(function () {
            $(this).find(".woocommerce_category_product_title").animate({'marginTop': '-40px', 'opacity': '0.6'}, 500);
        }).mouseleave(function () {
            $(this).find(".woocommerce_category_product_title").animate({'marginTop': '-107px', 'opacity': '1'}, 500);
        });


        //button change on click in woocommerce
        $(".ajax_woocommerce").click(function () {
            $(".ajax_woocommerce").show();
            $(this).hide();

        });


        /*
        =================================================
        LIST DESIGN
        =================================================
        */
        var list_icon = $('')


        //cart icon change in primary menu
        var window_width = $(window).width();
        var content = $('li.cart-icon').find('a');
        var content_first = $('li.cart-icon').find('a').html();
        if (window_width > 960) {
            $(content).html('<i class="fa fa-check"></i>');
        }
        else {
            $(content).html(content_first);
        }


        var icons = {
            header: "fa fa-plus",
            activeHeader: "fa fa-minus"
        };
        $('.menu-seperator').find('a').first().removeAttr('href');

        /*
        --------------------------------------------------------------------------------
        Custom Js for creating plus/minus sign in the WooCommerce Cart page
        --------------------------------------------------------------------------------
        */
        $('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
        $('.quantity').each(function () {
            var spinner = $(this),
                input = spinner.find('input[type="number"]'),
                btnUp = spinner.find('.quantity-up'),
                btnDown = spinner.find('.quantity-down');
            min = input.attr('min'),
            max = input.attr('max');

            btnUp.click(function () {
                var oldValue = parseFloat(input.val());
                /*if (oldValue >= max) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue + 1;
                }*/
                var newVal = oldValue;
                var newVal = oldValue + 1;
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

            btnDown.click(function () {
                var oldValue = parseFloat(input.val());
                if (oldValue <= min) {
                    var newVal = oldValue;
                } else {
                    var newVal = oldValue - 1;
                }
                spinner.find("input").val(newVal);
                spinner.find("input").trigger("change");
            });

        });

        /*
        --------------------------------------------------------------------------------
        Search options for the theme
        Js effects
        --------------------------------------------------------------------------------
        */

        $('.mighty_mobile_navigation_search.searchopen').click(function () {
            $(this).hide();
            $('.mighty_search').slideDown();
            $('.mighty_mobile_navigation_search.searchclose').show();


        });

        $('.mighty_mobile_navigation_search.searchclose').click(function () {
            $(this).hide();
            $('.mighty_search').slideUp();
            $('.mighty_mobile_navigation_search.searchopen').show();

        });


        /*
        --------------------------------------------------------------------------------
        Setting up the mobile menus
        --------------------------------------------------------------------------------
        */
        $('.mighty_mobile_navigation_toggle.menuopen').click(function () {
            $(this).hide();
            $('.mighty_mobile_navigation').slideDown();
            $('.mighty_mobile_navigation_toggle.menuclose').show();


        });

        $('.mighty_mobile_navigation_toggle.menuclose').click(function () {
            $(this).hide();
            $('.mighty_mobile_navigation').slideUp();
            $('.mighty_mobile_navigation_toggle.menuopen').show();

        });

        $('.mighty_mobile_navigation ul li.menu-item-has-children').prepend('<span class="mighty_little_toggle">+</span>');

        $('.mighty_little_toggle').on('click', function () {
            t = this;
            $(this).toggleClass('clicked');
            if ($(this).hasClass('clicked')) {
                $(this).html('-');
                $(this).closest('.mighty_mobile_navigation ul li').find('a').first().addClass('entered');
                $(this).closest('.mighty_mobile_navigation ul li').find('ul').first().slideDown(300);
            } else {
                $(this).closest('.mighty_mobile_navigation ul li').find('a').first().removeClass('entered');
                $(this).html('+');
                $(this).closest('.mighty_mobile_navigation ul li').find('ul').slideUp(300);
            }
        });

        jQuery(window).load(function() {

            jQuery('.mighty_preloader').delay(500).fadeOut("slow");

            setTimeout(mighty_remove_preloader, 2000);
            function mighty_remove_preloader() {
                jQuery('.mighty_preloader').remove();
            }

        });



    })
})(jQuery);