<?php 

/**
 * Table wrapper for settings metabox content.
 */
function adminimize_meta_box_write_page_options_page() {

	$settings = array(
		'help' => array(
			'title' => __( 'Help', 'adminimize' ),
			'description' => '#contextual-help-link-wrap'
		),
		'screen_options' => array(
			'title' => __( 'Screen Options', 'adminimize' ),
			'description' => '#screen-options-link-wrap'
		),
		'title' => array(
			'title' => __( 'Title', 'adminimize' ),
			'description' => '#title, #titlediv, th.column-title, td.title'
		),
		'permalink' => array(
			'title' => __( 'Permalink', 'adminimize' ),
			'description' => '#pageslugdiv'
		),
		'custom_fields' => array(
			'title' => __( 'Custom Fields', 'adminimize' ),
			'description' => '#pagepostcustom, #pagecustomdiv, #postcustom'
		),
		'comments_pings' => array(
			'title' => __( 'Comments &amp; Pings', 'adminimize' ),
			'description' => '#pagecommentstatusdiv, #commentsdiv, #comments, th.column-comments, td.comments'
		),
		'date' => array(
			'title' => __( 'Date', 'adminimize' ),
			'description' => '#date, #datediv, th.column-date, td.date, div.curtime'
		),
		'password_protect' => array(
			'title' => __( 'Password Protect This Page', 'adminimize' ),
			'description' => '#pagepassworddiv'
		),
		'attributes' => array(
			'title' => __( 'Attributes', 'adminimize' ),
			'description' => '#pageparentdiv'
		),
		'page_template' => array(
			'title' => __( 'Page Template', 'adminimize' ),
			'description' => '#pagetemplatediv'
		),
		'page_order' => array(
			'title' => __( 'Page Order', 'adminimize' ),
			'description' => '#pageorderdiv'
		),
		'page_author' => array(
			'title' => __( 'Page Author', 'adminimize' ),
			'description' => '#pageauthordiv, #author, #authordiv, th.column-author, td.author'
		),
		'page_revisions' => array(
			'title' => __( 'Page Revisions', 'adminimize' ),
			'description' => '#revisionsdiv'
		),
		'related' => array(
			'title' => __( 'Related', 'adminimize' ),
			'description' => '.side-info'
		),
		'messages' => array(
			'title' => __( 'Messages', 'adminimize' ),
			'description' => '#notice'
		),
		'advanced_options' => array(
			'title' => __( 'h2: Advanced Options', 'adminimize' ),
			'description' => '#post-body h2'
		),
		'media_buttons' => array(
			'title' => __( 'Media Buttons', 'adminimize' ),
			'description' => 'all) (#media-buttons, #wp-content-media-buttons'
		),
		'word_count' => array(
			'title' => __( 'Word count', 'adminimize' ),
			'description' => '#wp-word-count'
		),
		'page_slug' => array(
			'title' => __( 'Page Slug', 'adminimize' ),
			'description' => '#slugdiv,#edit-slug-box'
		),
		'publish_actions' => array(
			'title' => __( 'Publish Actions', 'adminimize' ),
			'description' => '#misc-publishing-actions'
		),
		'discussion' => array(
			'title' => __( 'Discussion', 'adminimize' ),
			'description' => '#commentstatusdiv'
		),
		'html_editor_button' => array(
			'title' => __( 'HTML Editor Button', 'adminimize' ),
			'description' => '#editor-toolbar #edButtonHTML, #quicktags, #content-html'
		),
		'page_image' => array(
			'title' => __( 'Page Image', 'adminimize' ),
			'description' => '#postimagediv'
		),
		'qe_links' => array(
			'title' => __( 'Quick Edit Link', 'adminimize' ),
			'description' => 'div.row-actions, div.row-actions .inline'
		),
		'qe_inline_edit_left' => array(
			'title' => __( 'QE Inline Edit Left', 'adminimize' ),
			'description' => 'fieldset.inline-edit-col-left'
		),
		'qe_all_labels' => array(
			'title' => __( ' QE ⇒ All Labels', 'adminimize' ),
			'description' => 'fieldset.inline-edit-col-left label'
		),
		'qe_date' => array(
			'title' => __( ' QE ⇒ Date', 'adminimize' ),
			'description' => 'fieldset.inline-edit-col-left div.inline-edit-date'
		),
		'qe_author' => array(
			'title' => __( ' QE ⇒ Author', 'adminimize' ),
			'description' => 'fieldset.inline-edit-col-left label.inline-edit-author'
		),
		'qe_password_and_private' => array(
			'title' => __( ' QE ⇒ Password and Private', 'adminimize' ),
			'description' => 'fieldset.inline-edit-col-left .inline-edit-group'
		),
		'qe_inline_edit_right' => array(
			'title' => __( 'QE Inline Edit Right', 'adminimize' ),
			'description' => 'fieldset.inline-edit-col-right'
		),
		'qe_parent_order_template' => array(
			'title' => __( ' QE ⇒ Parent, Order, Template', 'adminimize' ),
			'description' => 'fieldset.inline-edit-col-right .inline-edit-col'
		),
		'qe_status' => array(
			'title' => __( ' QE ⇒ Status', 'adminimize' ),
			'description' => 'fieldset.inline-edit-col-right .inline-edit-group'
		),
		'qe_cancel_save_button' => array(
			'title' => __( 'QE Cancel/Save Button', 'adminimize' ),
			'description' => 'tr.inline-edit-page p.inline-edit-save'
		),
	);

	$args = array(
		'option_namespace' => 'adminimize_write_page',
		'settings'         => $settings
	);
	adminimize_generate_checkbox_table( $args );
}

function adminimize_add_meta_box_write_page_options() {

	add_meta_box(
		/* $id,           */ 'adminimize_add_meta_box_write_page_options',
		/* $title,        */ __( 'Deactivate Write Page Options for Roles', 'adminimize' ),
		/* $callback,     */ 'adminimize_meta_box_write_page_options_page',
		/* $post_type,    */ Adminimize_Options_Page::$pagehook,
		/* $context,      */ 'normal'
		/* $priority,     */
		/* $callback_args */
	);
	
}

add_action( 'admin_menu', 'adminimize_add_meta_box_write_page_options', 20 );
add_action( 'network_admin_menu', 'adminimize_add_meta_box_write_page_options', 20 );

add_action( 'adminimize_register_settings', function () {
	register_setting( Adminimize_Options_Page::$pagehook, 'adminimize_write_page' );
	register_setting( Adminimize_Options_Page::$pagehook, 'adminimize_write_page_custom' );
} );