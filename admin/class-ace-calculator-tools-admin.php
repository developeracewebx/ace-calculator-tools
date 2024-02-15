<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://https://acewebx.com/
 * @since      1.0.0
 *
 * @package    Ace_Calculator_Tools
 * @subpackage Ace_Calculator_Tools/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ace_Calculator_Tools
 * @subpackage Ace_Calculator_Tools/admin
 * @author     AceWebX <developer@acewebx.com>
 */
class Ace_Calculator_Tools_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ace_Calculator_Tools_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ace_Calculator_Tools_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/ace-calculator-tools-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ace_Calculator_Tools_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ace_Calculator_Tools_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/ace-calculator-tools-admin.js', array( 'jquery' ), $this->version, false );

	}

	// Add sub menu for setting and start scraping 
	public function aceAdminMenuHandler(){
		
		add_menu_page( 
			__( 'Ace Calculator Tools', 'ace-calculator-tools' ), // Page Title
			__( 'Ace Calculator Tools', 'ace-calculator-tools' ), // Menu Title
			'manage_options', // Accessibility
			'ace-calculator-tools', // Pags Slug
			[$this,'aceCalculatorToolsSettingsCallback'], // Callback Function
			'dashicons-admin-tools', // Menu Icon
			40 // Menu Order
		);

	}

	public function aceCalculatorToolsSettingsCallback(){
		if( isset( $_POST ) ){
		$bmi_calculator_text = get_option("bmi-calculator");
		$bmr_calculator_text = get_option("bmr-calculator");
		$body_fat_calculator_text = get_option("body-fat-calculator");
		$calculator_text = get_option("calculator");
		$calorie_calculator_text = get_option("calorie-calculator");
		$energy_calculator_text = get_option("energy-calculator");
		$ideal_weight_calculator =get_option("ideal-weight-calculator");
		$salary_account = get_option("salary-calculator");
		$screen_aspect = get_option("screen-aspect-calculator");
		}
        //Bmi
		if (isset($_POST['bmi-calculator-submit'])){
			$arr_dms=array();
			foreach ($bmi_calculator_text as $key => $label) $arr_dms[$key] = $_POST[$key];
			update_option("bmi-calculator", $arr_dms);
		}
		//bmr
		if (isset($_POST['bmr-calculator-submit'])){
			$arr_dms=array();
			foreach ($bmr_calculator_text as $key => $label) $arr_dms[$key] = $_POST[$key];
			update_option("bmr-calculator", $arr_dms);
		}
		//Body Fat
		if (isset($_POST['body-fat-calculator-submit'])){
			$arr_dms=array();
			foreach ($body_fat_calculator_text as $key => $label) $arr_dms[$key] = $_POST[$key];
			update_option("body-fat-calculator", $arr_dms);
		}
		//calculator
		if (isset($_POST['calculator-submit'])){
			$arr_dms=array();
			foreach ($calculator_text as $key => $label) $arr_dms[$key] = $_POST[$key];
			update_option("calculator", $arr_dms);
		}
		//calories
		if (isset($_POST['calorie-submit'])){
			$arr_dms=array();
			foreach ($calorie_calculator_text as $key => $label) $arr_dms[$key] = $_POST[$key];
			update_option("calorie-calculator", $arr_dms);
		}
		//energy
		if (isset($_POST['energy-submit'])){
			$arr_dms=array();
			foreach ($energy_calculator_text as $key => $label) $arr_dms[$key] = $_POST[$key];
			update_option("energy-converter", $arr_dms);
		}
		//ideal weight
		if (isset($_POST['ideal-weight-submit'])){
			$arr_dms=array();
			foreach ($ideal_weight_calculator as $key => $label) $arr_dms[$key] = $_POST[$key];
			update_option("ideal-weight-calculator", $arr_dms);
		}
		//salary
		if (isset($_POST['salary-submit'])){
			$arr_dms=array();
			foreach ($salary_account as $key => $label) $arr_dms[$key] = $_POST[$key];
			update_option("salary-calculator", $arr_dms);
		}
		//screen
		if (isset($_POST['screen-submit'])){
			$arr_dms=array();
			foreach ($screen_aspect as $key => $label) $arr_dms[$key] = $_POST[$key];
			update_option("screen-aspect-calculator", $arr_dms);
		}


		include( plugin_dir_path( __FILE__ ) . 'partials/ace-calculator-tools-admin-display.php');
	}


}
