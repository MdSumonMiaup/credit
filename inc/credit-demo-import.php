<?php 

function credit_import_files() {
	return array(
		array(
			'import_file_name'             => 'Credit Demo Import 1',
			'categories'                   => array( 'Updated' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo-data/demo-1.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'demo-data/demo-1-widgets.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo-data/demo-1-customizer.dat',
			'import_preview_image_url'     => 'https://i.ibb.co/SNtBRjV/demo-preview.jpg',
			'import_notice'                => __( 'After you import this demo, you will have to setup the slider separately.', 'credit' ),
			'preview_url'                  => 'http://www.your_domain.com/my-demo-1',
		),
		array(
			'import_file_name'             => 'Demo Import 2',
			'categories'                   => array( 'Upcomming' ),
			'local_import_file'            => trailingslashit( get_template_directory() ) . 'ocdi/demo-content2.xml',
			'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets2.json',
			'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer2.dat',
			'local_import_redux'           => array(
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux.json',
					'option_name' => 'redux_option_name',
				),
				array(
					'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux2.json',
					'option_name' => 'redux_option_name_2',
				),
			),
			'import_preview_image_url'     => 'https://i.ibb.co/BgvvnNm/aspekt-creative-launching-page.jpg',
			'import_notice'                => __( 'A special note for this import.', 'credit' ),
			'preview_url'                  => '',
		),
	);
}
add_filter( 'pt-ocdi/import_files', 'credit_import_files' );

function credit_after_import_setup() {
	// Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
    $main_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
            'primary_menu' => $main_menu->term_id,
            'footer_menu' => $footer_menu->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Home' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
	update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'credit_after_import_setup' );