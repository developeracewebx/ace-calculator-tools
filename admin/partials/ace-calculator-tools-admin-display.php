<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://https://acewebx.com/
 * @since      1.0.0
 *
 * @package    Ace_Calculator_Tools
 * @subpackage Ace_Calculator_Tools/admin/partials
 */


//  This file should primarily consist of HTML with a little bit of PHP. -->
$bmi_calculator_text = get_option("bmi-calculator");
$bmr_calculator_text = get_option("bmr-calculator");
$body_fat_calculator_text = get_option("body-fat-calculator");
$calculator_text = get_option("calculator");
$calorie_calculator_text = get_option("calorie-calculator");
$energy_calculator_text = get_option("energy-calculator");
$ideal_weight_calculator =get_option("ideal-weight-calculator");
$salary_account = get_option("salary-calculator");
$screen_aspect = get_option("screen-aspect-calculator");
?>

<div class="ace-tools">
    <div id="logo">
        <span><?php echo get_admin_page_title(); ?></span>
    </div>
    <div class="outer-box">
        <div id="left-menu">
            <ul>
                <li class="active" id="BMIMenuItem"><a href="#">
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/bmi.png' ?>" class="tool-icon">
                    <span>BMI Colculator</span>
                </a></li>
                <li id="BMRMenuItem"><a href="#">
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/metabolism.png' ?>" class="tool-icon">
                    <span>BMR Calculator</span>
                </a></li>
                <li id="BodyFatMenuItem"><a href="#">
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/body-fat.png' ?>" class="tool-icon">
                    <span>Body Fat Calculator</span>
                </a></li>
                <li id="CalculatorMenuItem"><a href="#">
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/calculator.png' ?>" class="tool-icon">
                    <span>Calculator</span>
                </a></li>
                <li id="caloriesMenuItem"><a href="#">
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/calories.png' ?>" class="tool-icon">
                    <span>Calories Calculator</span>
                </a></li>
               
                <li id="energyMenuItem"><a href="#">
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/energy-calculator.png' ?>" class="tool-icon">
                    <span>Energy Calculator</span>
                </a></li>
                <li id="IdealWeightMenuItem"><a href="#">
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/weight-scale.png' ?>" class="tool-icon">
                    <span>Ideal Weight  Calculator</span>
                </a></li>
                <li id="salaryMenuItem"><a href="#">
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/salary-calculator.png' ?>" class="tool-icon">
                    <span>Salary Calculator</span>
                </a></li>
                <li id="screenaspectratioMenuItem"><a href="#">
                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/aspect-ratio.png' ?>" class="tool-icon">
                    <span>Screen Aspect Ratio Calculator</span>
                </a></li>
            </ul>
        </div>
        <div id="main-content">
            <div id="page-container">
                <div class="card" id="BMIConverter" style="display:block;">
                    <div class="title">BMI Calculator</div>
                    <div class="content-ace">
                        <ul>
                            <li>
                                <div class="label-heading">
                                    <p>
                                        <label>Shortcode</label><br>
                                        <span><i>Use this shortcode anywhere on website</i></span>
                                    </p>
                                </div>
                                <div class="content-box">
                                    <code>[ace-calculator-tool tool=bmi-calculator]</code>
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copy.png' ?>" class="tool-icon" id="copy">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copying.png' ?>" class="tool-icon copied" style="display:none;">
                                </div>
                            </li> 
                            <form action="#BMIMenuItem" method="POST" class="color-convert"> 
                            
                            <?php
                                foreach ($bmi_calculator_text as $key => $label): ?>
                                        <li>
                                            <div class="label-heading">
                                                <p>
                                                    <label for="<?php echo $key; ?>"><?php echo str_replace('-', ' ', ucfirst($key)); ?> </label><br>
                                                </p>
                                            </div>
                                            <div class="content-box">
                                                <input type="text" id="<?php echo $key; ?>-title" name="<?php echo $key; ?>" value="<?php echo $bmi_calculator_text[$key]; ?>">
                                            </div>
                                        </li>
                                <?php endforeach; ?>

                                <li>
                                <input type="submit" name="bmi-calculator-submit" class="ace-calculator" value="Save">
                                </li>
                                </form>
                                        <li>
                                            <div class="label-heading">
                                                <p>
                                                    <label>Preview</label><br>
                                                    <span><i>Check How Tool looks</i></span>
                                                </p>
                                            </div>
                                            <div class="content-box">
                                                <div class="prview-image"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/preview/bmi-calculator.png' ?>" class="preview-img"></div>
                                            </div>
                                        </li>
                        </ul>                      
                    </div>
                </div>
                <div class="card" id="BMRConverter" style="display:none;">
                    <div class="title">BMR Calculator</div>
                    <div class="content-ace">
                        <ul>
                            <li>
                                <div class="label-heading">
                                    <p>
                                        <label>Shortcode</label><br>
                                        <span><i>Use this shortcode anywhere on website</i></span>
                                    </p>
                                </div>
                                <div class="content-box">
                                    <code>[ace-calculator-tool tool=bmr-calculator]</code>
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copy.png' ?>" class="tool-icon" id="copy">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copying.png' ?>" class="tool-icon copied" style="display:none;">
                                </div>
                            </li> 
                            <form action="#BMRMenuItem" method="POST" class="BMR-calculate"> 
                            
                            <?php
                                foreach ($bmr_calculator_text as $key => $label): ?>
                                        <li>
                                            <div class="label-heading">
                                                <p>
                                                    <label for="<?php echo $key; ?>"><?php echo str_replace('-', ' ', ucfirst($key)); ?> </label><br>
                                                </p>
                                            </div>
                                            <div class="content-box">
                                                <input type="text" id="<?php echo $key; ?>-title" name="<?php echo $key; ?>" value="<?php echo $bmr_calculator_text[$key]; ?>">
                                            </div>
                                        </li>
                                <?php endforeach; ?>

                                <li>
                                <input type="submit" name="bmr-calculator-submit" class="ace-calculator" value="Save">
                                </li> 
                                </form>
                                    <li>
                                        <div class="label-heading">
                                            <p>
                                                <label>Preview</label><br>
                                                <span><i>Check How Tool looks</i></span>
                                            </p>
                                        </div>
                                        <div class="content-box">
                                            <div class="prview-image"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/preview/bmr-calculator.png' ?>" class="preview-img"></div>
                                        </div>
                                    </li>
                        </ul>
                    </div>
                </div>
                <div class="card" id="BodyFatConverter" style="display:none;">
                    <div class="title">Body Fat Calculator</div>
                    <div class="content-ace">
                        <ul>
                           
                                    <li>
                                        <div class="label-heading">
                                            <p>
                                                <label>Shortcode</label><br>
                                                <span><i>Use this shortcode anywhere on website</i></span>
                                            </p>
                                        </div>
                                        <div class="content-box">
                                            <code>[ace-calculator-tool tool=body-fat-calculator]</code>
                                            <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copy.png' ?>" class="tool-icon" id="copy">
                                            <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copying.png' ?>" class="tool-icon copied" style="display:none;">
                                        </div>
                                    </li>  
                                    <form action="#BodyFatMenuItem" method="POST" class="color-convert"> 
                            
                            <?php
                                foreach ($body_fat_calculator_text as $key => $label): ?>
                                        <li>
                                            <div class="label-heading">
                                                <p>
                                                    <label for="<?php echo $key; ?>"><?php echo str_replace('-', ' ', ucfirst($key)); ?> </label><br>
                                                </p>
                                            </div>
                                            <div class="content-box">
                                                <input type="text" id="<?php echo $key; ?>-title" name="<?php echo $key; ?>" value="<?php echo $body_fat_calculator_text[$key]; ?>">
                                            </div>
                                        </li>
                                <?php endforeach; ?>

                                <li>
                                <input type="submit" name="body-fat-calculator-submit" class="ace-calculator" value="Save">
                                </li> 
                                </form>
                                
                                    <li>
                                        <div class="label-heading">
                                            <p>
                                                <label>Preview</label><br>
                                                <span><i>Check How Tool looks</i></span>
                                            </p>
                                        </div>
                                        <div class="content-box">
                                            <div class="prview-image"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/preview/body-fat-calculator.png' ?>" class="preview-img"></div>
                                        </div>
                                    </li>
                                
                        </ul>  
                    </div>
                </div>
                <div class="card" id="CalculatorConverter" style="display:none;">
                    <div class="title">Calculator</div>
                    <div class="content-ace">
                        <ul>
                            <li>
                                <div class="label-heading">
                                    <p>
                                        <label>Shortcode</label><br>
                                        <span><i>Use this shortcode anywhere on website</i></span>
                                    </p>
                                </div>
                                <div class="content-box">
                                    <code>[ace-calculator-tool tool=calculator]</code>
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copy.png' ?>" class="tool-icon" id="copy">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copying.png' ?>" class="tool-icon copied" style="display:none;">
                                </div>
                            </li> 
                            <form action="#CalculatorMenuItem" method="POST" class="calculator"> 
                            <?php
                                foreach ($calculator_text as $key => $label): ?>
                                        <li>
                                            <div class="label-heading">
                                                <p>
                                                    <label for="<?php echo $key; ?>"><?php echo str_replace('-', ' ', ucfirst($key)); ?> </label><br>
                                                </p>
                                            </div>
                                            <div class="content-box">
                                                <input type="text" id="<?php echo $key; ?>-title" name="<?php echo $key; ?>" value="<?php echo $calculator_text[$key]; ?>">
                                            </div>
                                        </li>
                                <?php endforeach; ?>

                                <li>
                                <input type="submit" name="calculator-submit" class="ace-calculator" value="Save">
                                </li> 
                                </form>
                                    <li>
                                        <div class="label-heading">
                                            <p>
                                                <label>Preview</label><br>
                                                <span><i>Check How Tool looks</i></span>
                                            </p>
                                        </div>
                                        <div class="content-box">
                                            <div class="prview-image"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/preview/ace-calculator-calculator.png' ?>" class="preview-img"></div>
                                        </div>
                                    </li>
                        </ul>   
                    </div>
                </div>
                <div class="card" id="caloriesConverter" style="display:none;">
                    <div class="title">Calories Calculator</div>
                    <div class="content-ace">
                        <ul>
                            <li>
                                <div class="label-heading">
                                    <p>
                                        <label>Shortcode</label><br>
                                        <span><i>Use this shortcode anywhere on website</i></span>
                                    </p>
                                </div>
                               
                                <div class="content-box">
                                    <code>[ace-calculator-tool tool=calorie-calculator]</code>
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copy.png' ?>" class="tool-icon" id="copy">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copying.png' ?>" class="tool-icon copied" style="display:none;">
                                </div>
                            </li> 
                            <form action="#caloriesMenuItem" method="POST" class="calculator"> 
                            <?php
                                foreach ($calorie_calculator_text as $key => $label): ?>
                                        <li>
                                            <div class="label-heading">
                                                <p>
                                                    <label for="<?php echo $key; ?>"><?php echo str_replace('-', ' ', ucfirst($key)); ?> </label><br>
                                                </p>
                                            </div>
                                            <div class="content-box">
                                                <input type="text" id="<?php echo $key; ?>-title" name="<?php echo $key; ?>" value="<?php echo $calorie_calculator_text[$key]; ?>">
                                            </div>
                                        </li>
                                <?php endforeach; ?>

                                <li>
                                <input type="submit" name="calorie-submit" class="ace-calculator" value="Save">
                                </li> 
                                </form>
                                    <li>
                                        <div class="label-heading">
                                            <p>
                                                <label>Preview</label><br>
                                                <span><i>Check How Tool looks</i></span>
                                            </p>
                                        </div>
                                        <div class="content-box">
                                            <div class="prview-image"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/preview/colories-calculator.png' ?>" class="preview-img"></div>
                                        </div>
                                    </li>
                             
                        </ul>  
                    </div>
                </div>

           
                <div class="card" id="energyConverter" style="display:none;">
                    <div class="title">Energy Calculator</div>
                    <div class="content-ace">
                        <ul>
                            <li>
                                <div class="label-heading">
                                    <p>
                                        <label>Shortcode</label><br>
                                        <span><i>Use this shortcode anywhere on website</i></span>
                                    </p>
                                </div>
                                <div class="content-box">
                                    <code>[ace-calculator-tool tool=energy-calculator]</code>
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copy.png' ?>" class="tool-icon" id="copy">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copying.png' ?>" class="tool-icon copied" style="display:none;">
                                </div>
                            </li>  
                            <form action="#energyMenuItem" method="POST" class="calculator"> 
                            <?php
                                foreach ($energy_calculator_text as $key => $label): ?>
                                        <li>
                                            <div class="label-heading">
                                                <p>
                                                    <label for="<?php echo $key; ?>"><?php echo str_replace('-', ' ', ucfirst($key)); ?> </label><br>
                                                </p>
                                            </div>
                                            <div class="content-box">
                                                <input type="text" id="<?php echo $key; ?>-title" name="<?php echo $key; ?>" value="<?php echo $energy_calculator_text[$key]; ?>">
                                            </div>
                                        </li>
                                <?php endforeach; ?>

                                <li>
                                <input type="submit" name="energy-submit" class="ace-calculator" value="Save">
                                </li> 
                                </form>
                                <li>
                                    <div class="label-heading">
                                        <p>
                                            <label>Preview</label><br>
                                            <span><i>Check How Tool looks</i></span>
                                        </p>
                                    </div>
                                    <div class="content-box">
                                        <div class="prview-image"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/preview/energy-calculator.png' ?>" class="preview-img"></div>
                                    </div>
                                </li>
                           
                        </ul>  
                    </div>
                </div>
                <div class="card" id="IdealWeightConverter" style="display:none;">
                    <div class="title">Ideal Weight Calculator</div>
                    <div class="content-ace">
                        <ul>
                            <li>
                                <div class="label-heading">
                                    <p>
                                        <label>Shortcode</label><br>
                                        <span><i>Use this shortcode anywhere on website</i></span>
                                    </p>
                                </div>
                                <div class="content-box">
                                    <code>[ace-calculator-tool tool=ideal-weight-calculator]</code>
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copy.png' ?>" class="tool-icon" id="copy">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copying.png' ?>" class="tool-icon copied" style="display:none;">
                                </div>
                            </li>  
                            
                            <form action="#IdealWeightMenuItem" method="POST" class="calculator"> 
                            <?php
                                foreach ($ideal_weight_calculator as $key => $label): ?>
                                        <li>
                                            <div class="label-heading">
                                                <p>
                                                    <label for="<?php echo $key; ?>"><?php echo str_replace('-', ' ', ucfirst($key)); ?> </label><br>
                                                </p>
                                            </div>
                                            <div class="content-box">
                                                <input type="text" id="<?php echo $key; ?>-title" name="<?php echo $key; ?>" value="<?php echo $ideal_weight_calculator[$key]; ?>">
                                            </div>
                                        </li>
                                <?php endforeach; ?>

                                <li>
                                <input type="submit" name="ideal-weight-submit" class="ace-calculator" value="Save">
                                </li> 
                                </form>
                                <li>
                                    <div class="label-heading">
                                        <p>
                                            <label>Preview</label><br>
                                            <span><i>Check How Tool looks</i></span>
                                        </p>
                                    </div>
                                    <div class="content-box">
                                        <div class="prview-image"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/preview/idea-weight-calculator.png' ?>" class="preview-img"></div>
                                    </div>
                                </li>
                             
                            
                        </ul>  
                    </div>
                </div>
                <div class="card" id="salaryConverter" style="display:none;">
                    <div class="title">Salary Calculator</div>
                    <div class="content-ace">
                        <ul>
                            <li>
                                <div class="label-heading">
                                    <p>
                                        <label>Shortcode</label><br>
                                        <span><i>Use this shortcode anywhere on website</i></span>
                                    </p>
                                </div>
                                <div class="content-box">
                                    <code>[ace-calculator-tool tool=salary-calculator]</code>
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copy.png' ?>" class="tool-icon" id="copy">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copying.png' ?>" class="tool-icon copied" style="display:none;">
                                </div>
                            </li>  
                         
                            <form action="#salaryMenuItem" method="POST" class="calculator"> 
                            <?php
                                foreach ( $salary_account as $key => $label): ?>
                                        <li>
                                            <div class="label-heading">
                                                <p>
                                                    <label for="<?php echo $key; ?>"><?php echo str_replace('-', ' ', ucfirst($key)); ?> </label><br>
                                                </p>
                                            </div>
                                            <div class="content-box">
                                                <input type="text" id="<?php echo $key; ?>-title" name="<?php echo $key; ?>" value="<?php echo  $salary_account[$key]; ?>">
                                            </div>
                                        </li>
                                <?php endforeach; ?>

                                <li>
                                <input type="submit" name="salary-submit" class="ace-calculator" value="Save">
                                </li>  
                                </form>
                                <li>
                                    <div class="label-heading">
                                        <p>
                                            <label>Preview</label><br>
                                            <span><i>Check How Tool looks</i></span>
                                        </p>
                                    </div>
                                    <div class="content-box">
                                        <div class="prview-image"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/preview/salary-calculator.png' ?>" class="preview-img"></div>
                                    </div>
                                </li>
                             
                            
                        </ul>  
                    </div>
                </div>
                <div class="card" id="screenaspectratioConverter" style="display:none;">
                    <div class="title">Screen Aspect Ratio Calculator</div>
                    <div class="content-ace">
                        <ul>
                            <li>
                                <div class="label-heading">
                                    <p>
                                        <label>Shortcode</label><br>
                                        <span><i>Use this shortcode anywhere on website</i></span>
                                    </p>
                                </div>
                                <div class="content-box">
                                    <code>[ace-calculator-tool tool=screen-aspect-ratio-calculator]</code>
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copy.png' ?>" class="tool-icon" id="copy">
                                    <img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/tools/copying.png' ?>" class="tool-icon copied" style="display:none;">
                                </div>
                            </li>  
                            
                            <form action="#screenaspectratioMenuItem" method="POST" class="calculator"> 
                            <?php
                                foreach ( $screen_aspect  as $key => $label): ?>
                                        <li>
                                            <div class="label-heading">
                                                <p>
                                                    <label for="<?php echo $key; ?>"><?php echo str_replace('-', ' ', ucfirst($key)); ?> </label><br>
                                                </p>
                                            </div>
                                            <div class="content-box">
                                                <input type="text" id="<?php echo $key; ?>-title" name="<?php echo $key; ?>" value="<?php echo  $screen_aspect[$key]; ?>">
                                            </div>
                                        </li>
                                <?php endforeach; ?>

                                <li>
                                <input type="submit" name="screen-submit" class="ace-calculator" value="Save">
                                </li>  
                                </form>
                                <li>
                                    <div class="label-heading">
                                        <p>
                                            <label>Preview</label><br>
                                            <span><i>Check How Tool looks</i></span>
                                        </p>
                                    </div>
                                    <div class="content-box">
                                        <div class="prview-image"><img src="<?php echo plugin_dir_url( __FILE__ ) . 'images/preview/screen-ratio-aspect.png' ?>" class="preview-img"></div>
                                    </div>
                                </li>
                             
                            
                        </ul>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
