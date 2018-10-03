<?php

/**
 * WordPress settings API demo class
 *
 * @author Tareq Hasan
 */

if ( !class_exists('Theme_Settings' ) ):
	class Theme_Settings {

		private $settings_api;

		function __construct() {
			$this->settings_api = new WeDevs_Settings_API;

			add_action( 'admin_init', array($this, 'admin_init') );
			add_action( 'admin_menu', array($this, 'admin_menu') );
		}

		function admin_init() {

			//set the settings
			$this->settings_api->set_sections( $this->get_settings_sections() );
			$this->settings_api->set_fields( $this->get_settings_fields() );

			//initialize settings
			$this->settings_api->admin_init();
		}

		function admin_menu() {
			add_options_page( 'Sage Settings', 'Sage Settings', 'delete_posts', 'sage_settings', array($this, 'plugin_page') );
		}

		function get_settings_sections() {
			$sections = array(
				array(
					'id'    => 'json-ld-settings',
					'title' => __( 'JSON-LD Settings', 'sage' )
				),
				array(
					'id'    => 'youtube_settings',
					'title' => __( 'Youtube Settings', 'sage' )
				)
			);
			return $sections;
		}

		/**
		 * Returns all the settings fields
		 *
		 * @return array settings fields
		 */
		function get_settings_fields() {
			$settings_fields = array(
				'json-ld-settings' => array(
					array(
						'name'              => 'organization_name',
						'label'             => __( 'Organization Name', 'sage' ),
						'desc'              => __( 'Ex. My Company', 'sage' ),
						'placeholder'       => __( 'Name', 'sage' ),
						'type'              => 'text',
						'default'           => '',
						'sanitize_callback' => 'sanitize_text_field'
					),
					array(
						'name'              => 'organization_legal_name',
						'label'             => __( 'Organization Legal Name', 'sage' ),
						'desc'              => __( 'Ex. Matchbanker ApS', 'sage' ),
						'placeholder'       => __( 'Legal name', 'sage' ),
						'type'              => 'text',
						'default'           => '',
						'sanitize_callback' => 'sanitize_text_field'
					),
					array(
						'name'              => 'organization_logo_url',
						'label'             => __( 'Oraganization Logo URL', 'sage' ),
						'desc'              => __( 'Ex. http://my-website.com/wp-content/uploads..', 'sage' ),
						'placeholder'       => __( 'Logo URL', 'sage' ),
						'type'              => 'file',
						'default'           => '',
						'options' => array(
							'button_label' => 'Choose Image'
						)
					),
					array(
						'name'              => 'organization_facebook',
						'label'             => __( 'Facebook site', 'sage' ),
						'desc'              => __( 'Ex. http://www.facebook.com/website', 'sage' ),
						'placeholder'       => __( 'Facebook site', 'sage' ),
						'type'              => 'text',
						'default'           => '',
						'sanitize_callback' => 'sanitize_text_field'
					),
				),
				'youtube_settings' => array(
					array(
						'name'              => 'youtube_id_dk',
						'label'             => __( 'Youtube id of danish promo', 'sage' ),
						'desc'              => __( 'Ex. yS3Gm8_s6Ok', 'sage' ),
						'placeholder'       => __( 'id', 'sage' ),
						'type'              => 'text',
						'default'           => '',
						'sanitize_callback' => 'sanitize_text_field'
					),
					array(
						'name'              => 'youtube_id_se',
						'label'             => __( 'Youtube id of swedish promo', 'sage' ),
						'desc'              => __( 'Ex. _RSY0xT61Nk', 'sage' ),
						'placeholder'       => __( 'id', 'sage' ),
						'type'              => 'text',
						'default'           => '',
						'sanitize_callback' => 'sanitize_text_field'
					),
					array(
						'name'              => 'youtube_id_no',
						'label'             => __( 'Youtube id of norwegian promo', 'sage' ),
						'desc'              => __( 'Ex. XiDr30JeX9k', 'sage' ),
						'placeholder'       => __( 'id', 'sage' ),
						'type'              => 'text',
						'default'           => '',
						'sanitize_callback' => 'sanitize_text_field'
					),
				)
			);

			return $settings_fields;
		}

		function plugin_page() {
			echo '<div class="wrap">';

			$this->settings_api->show_navigation();
			$this->settings_api->show_forms();

			echo '</div>';
		}

		/**
		 * Get all the pages
		 *
		 * @return array page names with key value pairs
		 */
		function get_pages() {
			$pages = get_pages();
			$pages_options = array();
			if ( $pages ) {
				foreach ($pages as $page) {
					$pages_options[$page->ID] = $page->post_title;
				}
			}

			return $pages_options;
		}

	}
	new Theme_Settings;
endif;
