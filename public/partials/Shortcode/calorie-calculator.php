<?php wp_enqueue_script( $this->plugin_name."-calculator", acePluginBaseURL_calculator() . 'public/js/calories-calculator.js', array( 'jquery' ), $this->version, true );  ?>
<?php $calories_calculator = get_option('calorie-calculator');?>

<div class="col-md-8 col-sm-8 form-generator">
   <div class="page_title">
   
      <div>
         <h1><?php echo $calories_calculator['calories-calculator-title'];?></h1>
      </div>
   </div>
   <?php
     
      ?>
   <div class="col-12 mt-3">
      <p><?php echo $calories_calculator['calories-calculator-description'];?> </p>
      <div id="calculator">
                    <h2><?php echo $calories_calculator['calories-calculator-title'];?></h2>
                    <ul class="nav nav-tabs" id="unitTabs">
                        <li class="nav-item">
                            <a class="tab active-tab" id="usUnitTab"><?php echo $calories_calculator['calories-calculator-unit-type-us'];?></a>
                        </li>
                        <li class="nav-item">
                           <a class="tab" id="metricUnitTab" ><?php echo $calories_calculator['calories-calculator-unit-type-metrics'];?></a>
                        </li>
                    </ul>
                    <form id="BMRform">
                        <br>
                        <label><?php echo $calories_calculator['calories-age-titles'];?></label><br>
                        <input type="number" class="ageinput" min="15" max="80" name="ageinput" id="ageinput" required value="25">
                        <div id="ageValidation" class="text-danger"></div>
                        <br>
                        <label for="gender"><?php echo $calories_calculator['calories-gender-titles'];?></label><br>
                        <select id="gender" required>
                        <option value="">Select Gender</option>
                            <option value="male" selected  >Male</option>
                            <option value="female">Female</option>
                        </select>
                        <br><br>
                        <div id="usUnits">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="height"><?php echo $calories_calculator['calories-height-title-feets'];?></label><br>
                                    <input type="number" id="feet"  min="0" placeholder="feet" required value="5">
                                    <br><br>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="inches"><?php echo $calories_calculator['calories-height-title-inches'];?></label><br>
                                    <input type="number" id="inches" min="0" max="12" placeholder="inches" required value="5">
                                    <br><br>
                                </div>
                            </div>
                            <label for="weight"><?php echo $calories_calculator['calories-weight-pounds-titles'];?></label><br>
                            <input type="number" id="weightpounds" min="0" placeholder="pounds" required value="165">
                            <br>
                        </div>   
                       
                        <div id="metricUnits" class="hidden">
                            <label for="height"><?php echo $calories_calculator['calories-height-title-cm'];?></label><br>
                            <input type="number" id="height"  min ="0" value="180" required>
                            <br><br>
                            <label for="weight"><?php echo $calories_calculator['calories-weight-kg-titles'];?></label><br>
                            <input type="number" id="weight" value="65" min ="0"required>
                            
                        </div>
                        <br>
               
                        <div class="activity">
                            <label><?php echo $calories_calculator['calories-activity-titles'];?></label>
                            <br>

                            <select id="cactivity" name="cactivity">
                                <option value="1" selected><?php echo $calories_calculator['calories-activity-titles'];?></option>
                                <option value="2"><?php echo $calories_calculator['calories-Light:-exercise-1-3-times/week'];?></option>
                                <option value="3"><?php echo $calories_calculator['calories-Sedentary:-little-or-no-exercise'];?></option>
                                <option value="4"><?php echo $calories_calculator['calories-Moderate:-exercise-4-5-times/week'];?></option>
                                <option value="5"><?php echo $calories_calculator['calories-Active:-daily-exercise-or-intense-exercise-3-4-times/week'];?></option>
                                <option value="6"> <?php echo $calories_calculator['calories-Very-Active:-intense-exercise-6-7-times/week'];?></option>
                                <option value="7"><?php echo $calories_calculator['calories-Extra-Active:-very-intense-exercise-daily-or-physical-job'];?></option>
                            </select>
                        </div>
                        <br>
                        <label for=""id="Resultslabel"><?php echo $calories_calculator['calories-results-unit-titles'];?></label>
               
                        <div class="resultchangeoption">
                        <label for="Calories"class="resultoutput">
                        <input type="radio"name="resultoutput" id="Calories" value="Calories"class="radioinput"checked><?php echo $calories_calculator['calories-calories-unit-titles'];?></label>
                        <label for="Kilojoules"class="resultoutput">
                        <input type="radio"name="resultoutput"  id="Kilojoules" value="Kilojoules"class="radioinput"><?php echo $calories_calculator['calories-kilojoules-unit-titles'];?></label>
                        </div>
                        <input type="submit" value="Calculate" class="btn btn-primary">
                       
                        <button id="clear"><i class=""></i> clear</button>
                    </form>
                   
                    <div id="result" class="mt-3">
                        <h3 class="thead"><?php echo $calories_calculator['calories-results-titles'];?></h3>
                        <table id="outputTable">
                            <tr>
                                <th><?php echo $calories_calculator['calories-gender-title-results'];?></th>
                                <td id="genderOutput">male</td>
                            </tr>
                            <tr>
                                <th><?php echo $calories_calculator['calories-age-title-results'];?></th>
                                <td id="ageOutput">25</td>
                            </tr>
                            <tr>
                                <th id="heightlabel"><?php echo $calories_calculator['calories-height-title-results'];?></th>
                                <td id="heightOutput">5 feet 5 inches </td>
                            </tr>
                            <tr>
                                <th><?php echo $calories_calculator['calories-weight-title-results'];?></th>
                                <td id="weightOutput">165 pounds </td>
                            </tr>
                            <tr id="bmrRow">

                                <th id="bmr"><?php echo $calories_calculator['calories-title-total-results'];?></th>
                                <td id="bmrOutput">1,660 Calories/day</td>
                            </tr>
                            <tr id ="maintaionweight">
                                <th><?php echo $calories_calculator['calories-title-total-results'];?></th>
                                <td id="MaintainwOutput">0 Calories/day</td>
                            </tr>                            
                        </table>
                    </div>
                </div>
            </div>
</div>
