<?php
add_action('widgets_init', 'mighty_widgets_init');
function mighty_widgets_init() {

	register_sidebar(array(
		'name' => __('Blog Right Sidebar', 'mighty'),
		'id' => 'blogright',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Blog Left Sidebar', 'mighty'),
		'id' => 'blogleft',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Pages Right Sidebar', 'mighty'),
		'id' => 'pageright',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Pages Left Sidebar', 'mighty'),
		'id' => 'pageleft',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Full Width Banner', 'mighty'),
		'id' => 'banner',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));

    register_sidebar(array(
        'name' => __('Inner Banner', 'mighty'),
        'id' => 'inner-banner',
        'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('2/3 Banner', 'mighty'),
        'id' => 'twothirdbanner',
        'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('2/3 Banner Right Content', 'mighty'),
        'id' => 'twothirdbannerright',
        'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));


    register_sidebar(array(
		'name' => __('Call To Action', 'mighty'),
		'id' => 'cta',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Top 1', 'mighty'),
		'id' => 'top1',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Top 2', 'mighty'),
		'id' => 'top2',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Top 3', 'mighty'),
		'id' => 'top3',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Top 4', 'mighty'),
		'id' => 'top4',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Inset Top', 'mighty'),
		'id' => 'inset-top',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));

    register_sidebar(array(
        'name' => __('Inset Content 1', 'mighty'),
        'id' => 'inset-content1',
        'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('Inset Content 2', 'mighty'),
        'id' => 'inset-content2',
        'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('Inset Content 3', 'mighty'),
        'id' => 'inset-content3',
        'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('Inset Content 4', 'mighty'),
        'id' => 'inset-content4',
        'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));

    register_sidebar(array(
        'name' => __('Inset Full Width', 'mighty'),
        'id' => 'inset-full',
        'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
        'after_widget' => '</div>',
        'before_title' => '<h6 class="widget-title">',
        'after_title' => '</h6>',
    ));

	register_sidebar(array(
		'name' => __('Inset Bottom', 'mighty'),
		'id' => 'inset-bottom',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Footer 1', 'mighty'),
		'id' => 'bottom1',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Footer 2', 'mighty'),
		'id' => 'bottom2',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Footer 3', 'mighty'),
		'id' => 'bottom3',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


	register_sidebar(array(
		'name' => __('Footer 4', 'mighty'),
		'id' => 'bottom4',
		'before_widget' => '<div id="%1$s" class="widget %2$s clf">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="widget-title">',
		'after_title' => '</h6>',
	));


}


// lets setup the inset top group 
function mighty_contentgroup() {
	$count = 0;
	if ( is_active_sidebar( 'inset-content1' ) )
		$count++;
	if ( is_active_sidebar( 'inset-content2' ) )
		$count++;
	if ( is_active_sidebar( 'inset-content3' ) )
		$count++;		
	if ( is_active_sidebar( 'inset-content4' ) )
		$count++;
	$class = '';
	
	switch ( $count ) {
		case '1':
			$class = 'col-md-12 col-lg-12 col-sm-12 col-xs-12';
			break;
		case '2':
			$class = 'col-md-6 col-lg-6 col-sm-6 col-xs-12';
			break;
		case '3':
			$class = 'col-md-4 col-lg-4 col-sm-6 col-xs-12';
			break;
		case '4':
			$class = 'col-md-3 col-lg-3 col-sm-6 col-xs-12';
			break;
	}
	if ( $class )
		echo $class;
}

// lets setup the inset top group
function mighty_topgroup() {
    $count = 0;
    if ( is_active_sidebar( 'top1' ) )
        $count++;
    if ( is_active_sidebar( 'top2' ) )
        $count++;
    if ( is_active_sidebar( 'top3' ) )
        $count++;
    if ( is_active_sidebar( 'top4' ) )
        $count++;
    $class = '';

    switch ( $count ) {
        case '1':
            $class = 'col-md-12 col-lg-12 col-sm-12 col-xs-12';
            break;
        case '2':
            $class = 'col-md-6 col-lg-6 col-sm-6 col-xs-12';
            break;
        case '3':
            $class = 'col-md-4 col-lg-4 col-sm-6 col-xs-12';
            break;
        case '4':
            $class = 'col-md-3 col-lg-3 col-sm-6 col-xs-12';
            break;
    }
    if ( $class )
        echo $class;
}


function mighty_bottomgroup() {
	$count = 0;
	if ( is_active_sidebar( 'bottom1' ) )
		$count++;
	if ( is_active_sidebar( 'bottom2' ) )
		$count++;
	if ( is_active_sidebar( 'bottom3' ) )
		$count++;		
	if ( is_active_sidebar( 'bottom4' ) )
		$count++;
	$class = '';

	var_dump($count);
	switch ( $count ) {
		case '1':
			$class = 'col-md-12 col-lg-12 col-sm-12 col-xs-12';
			break;
		case '2':
			$class = 'col-md-6 col-lg-6 col-sm-6 col-xs-12';
			break;
		case '3':
			$class = 'col-md-4 col-lg-4 col-sm-6 col-xs-12';
			break;
		case '4':
			$class = 'col-md-3 col-lg-3 col-sm-6 col-xs-12';
			break;
	}
	if ( $class )
		echo 'class="' . $class . '"';
}

?>