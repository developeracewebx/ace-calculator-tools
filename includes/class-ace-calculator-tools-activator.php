<?php

/**
 * Fired during plugin activation
 *
 * @link       https://https://acewebx.com/
 * @since      1.0.0
 *
 * @package    Ace_Calculator_Tools
 * @subpackage Ace_Calculator_Tools/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Ace_Calculator_Tools
 * @subpackage Ace_Calculator_Tools/includes
 * @author     AceWebX <developer@acewebx.com>
 */
class Ace_Calculator_Tools_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
     
		$arr_bmi = array(
			'bmi-calculator-title' => "BMI Calculator",
			'bmi-calculator-description' => "BMI Calculator can be used to calculate BMI value and corresponding weight status while taking age into consideration.",
			'bmi-calculator-unit-type-metrics' => "Metric Units",
			'bmi-calculator-unit-type-us' => "US Units",
			'bmi-gender' => "Gender:",
			'bmi-age' => "Age (1 - 120 years):",
			'bmi-height-feets'=>'Height (feet):',
			'bmi-height-inches'=>'Height (inches):',
			'bmi-height-cm'=>'Height (cm):',
			'bmi-weight-kg'=>'Weight (kg):',
			'bmi-weight-pound'=>'Weight (pounds):',
			'bmi-button'=>'Calculate BMI',
			'bmi-results'=>'BMI Condition',
			'bmi-height-results' =>'Height',
            'bmi-age-results' =>'Age',
		    'bmi-total-results' =>'BMI'
		);
		if (get_option("bmi-calculator") === false) {
			 update_option("bmi-calculator", $arr_bmi);
			}

    
		$arr_bmr = array(
			'bmr-calculator-title' => "BMR Calculator",
			'bmr-calculator-description' => "BMR Calculator can be used to calculate BMR value and corresponding weight status while taking age into consideration.",
			'bmr-calculator-unit-type-metrics' => "Metric Units",
			'bmr-calculator-unit-type-us' => "US Units",
			'bmr-gender-titles' => "Gender:",
			'bmr-age-titles' => "Age (1 - 120 years):",
			'bmr-height-title-feets'=>'Height (feet):',
			'bmr-height-title-inches'=>'Height (inches):',
			'bmr-height-title-cm'=>'Height (cm):',
			'bmr-weight-pounds-titles'=>'Weight (pounds):',
			'bmr-weight-kg-titles'=>'Weight (kg):',
			'bmr-results-unit-titles'=>'Results unit:',
			
			'bmr-button-titles'=>'Calculate',
			'bmr-results-titles'=>'BMR Condition',
			'bmr-height-title-results' =>'Height',
		    'bmr-title-total-results' =>'BMR'
		);
		if (get_option("bmr-calculator") === false) { update_option("bmr-calculator", $arr_bmr);}
		
	

	$arr_body_fat = array(
		'body-fat-calculator-title' => "Body Fat Calculator",
		'body-fat-calculator-description' => "The Body Fat Calculator can be used to estimate your total body fat based on specific measurements. Use the 'Metric Units' tab if you are more comfortable with the International System of Units (SI)",
		'body-fat-calculator-unit-type-metrics' => "Metric Units",
		'body-fat-calculator-unit-type-us' => "US Units",
		'body-fat-gender-titles' => "Gender:",
		'body-fat-age-titles' => "Age (1 - 120 years):",
		'body-fat-height-title-feets'=>'Height (feet):',
		'body-fat-height-title-inches'=>'Height (inches):',
		'body-fat-height-title-cm'=>'Height (cm):',
		'body-fat-weight-pounds-titles'=>'Weight (pounds):',
		'body-fat-weight-kg-titles'=>'Weight (kg):',
		
		'body-fat-neck-title-cm'=>'Neck (cm):',
		'body-fat-neck-title-feet'=>'Neck (feet):',
		'body-fat-neck-title-inches'=>'Neck (inches):',
		'body-fat-hip-title-cm'=>'Hip (cm):',
		'body-fat-hip-title-feet'=>'Hip (feet):',
		'body-fat-hip-title-inches'=>'Height (inches):',
		'body-fat-waist-feet-title'=>'Waist (feet):',
		'body-fat-waist-inches-title'=>'Waist (inches):',
		'body-fat-waist-cm-title'=>'Waist (cm):',
		'body-fat-button-titles'=>'Calculate Body Fat',
		'body-fat-results-titles'=>'Body Fat Condition',
		'body-fat-age-title-results' =>'Age',
		'body-fat-height-title-results' =>'Height',
		'body-fat-Gender-title-results' =>'Gender',
		'body-fat-Weight-title-results' =>'Weight',
		'body-fat-Neck-title-results' =>'Neck',
		'body-fat-Waist-title-results' =>'Waist',
		'body-fat-Hip-title-results' =>'Hip',
		
		'body-fat-title-total-results' =>'Body Fat' 
	);
	 if (get_option("body-fat-calculator") === false) { 
		update_option("body-fat-calculator", $arr_body_fat);
	}
	

	$arr_calculator = array(
		'calculator-title' => "Online Calculator",
		'calculator-description' => "An online calculator similar to a small handheld calculator for simple math calculations. Use this simple calculator for math with addition, subtraction, multiplication and division problems.",
		
	);
	if (get_option("calculator") === false) { update_option("calculator", $arr_calculator);}

	$arr_calorie_calculator = array(
		'calories-calculator-title' => "Calorie Calculator",
		'calories-calculator-description' => "The Calorie Calculator can be used to estimate the number of calories a person needs to consume each day.",
		'calories-calculator-unit-type-metrics' => "Metric Units",
		'calories-calculator-unit-type-us' => "US Units",
		'calories-gender-titles' => "Gender:",
		'calories-age-titles' => "Age (15 - 80 years):",
		'calories-height-title-feets'=>'Height (feet):',
		'calories-height-title-inches'=>'Height (inches):',
		'calories-height-title-cm'=>'Height (cm):',
		'calories-weight-pounds-titles'=>'Weight (pounds):',
		'calories-weight-kg-titles'=>'Weight (kg):',
		'calories-results-unit-titles'=>'Results unit:',
		'calories-calories-unit-titles'=>'Calories',
		'calories-kilojoules-unit-titles'=>'Kilojoules',
		'calories-activity-titles'=>'Activity',
		'calories-button-titles'=>'Calculate',
		'calories-results-titles'=>'calories Condition',
		'calories-gender-title-results' =>'Gender',
		'calories-age-title-results' =>'Age',
		'calories-height-title-results' =>'Height',
		'calories-weight-title-results' =>'Weight',
		'calories-title-total-results' =>'BMR',
		'calories-title-total-maintain-results' =>'Maintain weight',
		'calories-basal-metabolic-rate' =>"Basal Metabolic Rate (BMR)",
		'calories-Light:-exercise-1-3-times/week' =>"Light: exercise 1-3 times/week",
		'calories-Sedentary:-little-or-no-exercise' =>"Sedentary: little or no exercise",
		'calories-Moderate:-exercise-4-5-times/week' =>"Moderate: exercise 4-5 times/week",
		'calories-Active:-daily-exercise-or-intense-exercise-3-4-times/week' =>"Active: daily exercise or intense exercise 3-4 times/week",
		'calories-Very-Active:-intense-exercise-6-7-times/week' =>" Very Active: intense exercise 6-7 times/week",
		'calories-Extra-Active:-very-intense-exercise-daily-or-physical-job' =>"Extra Active: very intense exercise daily, or physical job",

	);
	// if (get_option("calorie-calculator") === false) { 
		update_option("calorie-calculator", $arr_calorie_calculator);
	//}


	$arr_energy_calculator = array(
		'calculator-title' => "Energy Calculator",
		'calculator-description' => "Calculator can be used to convert between Calories and other common food energy units.",
		'calculator-value' =>'Value:',
	    
		'calculator-type'  =>'Type:',
		'calculator-calories-nutrition'=>"Calorie [Nutritional, kcal]",
		'calculator-calorie-[cal]'=>"calorie [cal]",
		'calculator-Kilojoules-[kJ]'=>"Kilojoules [kJ]",
		'calculator-Joules-[J]'=>"Joules [J]",
		'calculator-result' =>'Result:',
        'calculator-button-titles'=>'Calculate',
	);
	 update_option("energy-calculator", $arr_energy_calculator);

	$arr_Ideal_Weight_Calculator = array(
		'ideal-weight-title' => "Ideal Weight Calculator",
		'ideal-weight-description' => "The Ideal Weight Calculator computes ideal body weight (IBW) ranges based on height, gender, and age.",
		
		'ideal-weight-calculator-unit-type-metrics' => "Metric Units",
		'ideal-weight-calculator-unit-type-us' => "US Units",
		'ideal-weight-gender-titles' => "Gender:",
		'ideal-weight-age-titles' => "Age (1 - 120 years):",
		'ideal-weight-height-title-feets'=>'Height (feet):',
		'ideal-weight-height-title-inches'=>'Height (inches):',
		'ideal-weight-height-title-cm'=>'Height (cm):',	
		'ideal-weight-result' =>'Result',
        'ideal-weight-button-titles'=>'Calculate',
		'ideal-weight-robinson' =>'Robinson (1983)',
		'ideal-weight-calculator-miller' => 'Miller (1983)',
		'ideal-weight-calculator-devine' =>'Devine (1974)',
		'ideal-weight-calculator-hamwi' =>'Hamwi (1964)',
		'ideal-weight-calculator-healthy-BMI-range' =>'Healthy BMI Range',
	);
	if (get_option("ideal-weight-calculator") === false) { update_option("ideal-weight-calculator", $arr_Ideal_Weight_Calculator);}


	$arr_salary_calculator = array(
		'salary-title' => "Salary Calculator",
		'salary-description' => "The Salary Calculator converts salary amounts to their corresponding values based on payment frequency. Examples of payment frequencies include biweekly, semi-monthly, or monthly payments. Results include unadjusted figures and adjusted figures that account for vacation days and holidays per year.",
		'salary-amount-title' =>'Salary amount($):',
		'salary-per'=>'Per:',
      'salary-hour' => 'Hour',
      'salary-day' => 'Day',
      'salary-week' => 'Week',
      'salary-bi-week' => 'Bi-week',
      'salary-semi-month'=>'Semi-month',
      'salary-month' => 'Month',
      'salary-quarter' => 'Quarter',
      'salary-year'   => 'Year',
      'salary-hours-per-week' => 'Hours per week:',
      'salary-days-per-week' => 'Days per week:',
      'salary-holiday-per-year' =>'Holidays per year:',
      'salary-vacation-days-per-years'  =>'Vacation days per year:',
      'salary-unadjust' =>'Unadjusted',
      'salary-holiday-adjusted'  =>'Holidays  adjusted',
      'salary-hourly' => 'Hourly',
      'salary-daily' =>'Daily',
      'salary-weekly' => 'Weekly',
      'salary-bi-weekly' => 'Bi-weekly',
      'salary-semi-monthly' => 'Semi-monthly',
      'salary-monthly' => 'Monthly',
      'salary-quarterly' => 'Quarterly',
      'salary-annual' => 'Annual',
	  'salary-result-button' => 'Calculate',
	
		
	);
	if (get_option("salary-calculator") === false) { update_option("salary-calculator", $arr_salary_calculator);}

	$arr_screen_aspect_calculator = array(
		'screen-title' => "Screen Aspect Ratio Calculator",
		'screen-description' => "Screen Aspect Ratio & Dimension Calculator",
		'screen-1st-calculator-title' =>"Calculate image dimension (in pixels) from total number of pixels and aspect ratio",
        'screen-1st-calculator-aspect-ratio' => 'Aspect Ratio:',
        'screen-1st-calculator-pixel' => 'pixels:',
        'screen-1st-calculator-choose-aspect-ratio'=>'Choose Aspect Ratio',
        'screen-1st-calculator-valueout-first-part' => 'An image with',
        'screen-1st-calculator-valueout-second-part' => ' pixels and an aspect ratio of',
        'screen-1st-calculator-valueout-third-part' => 'would have dimensions of:',
		'screen-2nd-calculator-title' =>"Calculate the missing value from two of height, width and aspect ratio",
        'screen-2nd-calculator-aspect-ratio' => "Aspect Ratio:",
        'screen-2nd-calculator-width' =>"Width:",
        'screen-2nd-calculator-hight' =>"Height:",
        'screen-2nd-calculator-choose-aspect-ratio' =>"Choose Aspect Ratio",
        'screen-2nd-calculator-valueout-first-part' => "Aspect ratio:",
        'screen-2nd-calculator-valueout-second-part' => "Width:",
        'screen-2nd-calculator-valueout-third-part' => "Height:",
		'screen-3rd-calculator-title' => 'Calculate optimal viewing distance from screen size',
        'screen-3rd-calculator-description-one' => 'For a screen that is',
        'screen-3rd-calculator-description-two' => 'diagonal and',
        'screen-3rd-calculator-description-three' => ',the optimal viewing distance is between',
        'screen-3rd-calculator-description-four' => ', ideally around',
        'screen-3rd-calculator-description-five' => '(based on screen height (4H-8H,6H))',
		'screen-4th-calculator-title' => 'Calculate Screen-Size To Body-Size Ratio',
        'screen-4th-calculator-description' => 'My device is',
        'screen-4th-calculator-wide' => 'wide and',
        'screen-4th-calculator-high' => 'high, with a diagonal screen size of',
        'screen-4th-calculator-screen' => 'and resolution/aspect ratio of',
        'screen-4th-calculator-Rest-x' => 'x',
        'screen-4th-calculator-Rest-Y' => '.',
        'screen-4th-calculator-result-first-titles'=>'The screen (',
        'screen-4th-calculator-result-second-titles'=>') takes up',
        'screen-4th-calculator-result-third-titles'=>'% of the device surface area.',
		'screen-5th-calculator-titles' =>'Calculate image dimension (in pixels) from total number of pixels and aspect ratio',
        'screen-5th-calculator-diagonal-title' =>'Diagonal',
        'screen-5th-calculator-width-title' =>'Width',
        'screen-5th-calculator-high-title' =>'Height',
        'screen-5th-calculator-aspect-ratio-title' =>'Aspect Ratio',
        'screen-5th-calculator-ratio-title' =>'Ratio',
        'screen-5th-calculator-fullscreen-title' =>'fullscreen',
        'screen-5th-calculator-4-:-3-movie-title' =>'4:3 movie',
        'screen-5th-calculator-Area:-3:2-photo-title' =>'Area: 3:2 photo',
        'screen-5th-calculator-16:9-movie-title' =>'16:9 movie',
        'screen-5th-calculator-2.35-movie-title' =>'2.35 movie',
        'screen-5th-calculator-aspect-comparison-button-title' =>'Add to comparison',
        'screen-5th-calculator-actual-area-title' => 'Actual Area',
        'screen-5th-calculator-relative-area-title'  => 'Relative Area',
        'screen-5th-calculator-full-title'  => 'Full',
		
	
		
	);
	if (get_option("screen-aspect-calculator") === false) { update_option("screen-aspect-calculator", $arr_screen_aspect_calculator);}

}


}