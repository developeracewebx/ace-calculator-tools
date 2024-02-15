<?php wp_enqueue_script( $this->plugin_name."-bmi-calculator", acePluginBaseURL_calculator() . 'public/js/bmi-calculator.js', array( 'jquery' ), time(), true );  ?>
<?php  $bmi_calculator = get_option('bmi-calculator');?>
<div class="col-md-8 col-sm-8 form-generator">

   <div class="page_title">
      <div>
         <h1><?php echo $bmi_calculator['bmi-calculator-title']; ?></h1>
      </div>
   </div>
   <?php
      //$breadcrumb = array('controller' => 'calculator', 'title' => 'BMI Calculator');
     // $this->load->view('breadcrumb', $breadcrumb);
      ?>
   <div class="col-12 mt-3">
      <p><?php echo $bmi_calculator['bmi-calculator-description']; ?></p>
      <div id="calculator">
         <h2><?php echo $bmi_calculator['bmi-calculator-title']; ?></h2>
         <ul class="nav nav-tabs" id="unitTabs">
            <li class="nav-item">
               <a class="nav-link active" id="metricUnitTab" href="#"><?php echo $bmi_calculator['bmi-calculator-unit-type-metrics']; ?></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="usUnitTab" href="#"><?php echo $bmi_calculator['bmi-calculator-unit-type-us']; ?></a>
            </li>
         </ul>
         <form id="bmiForm">
            <label for="gender"><?php echo $bmi_calculator['bmi-gender']; ?></label>
            <select id="gender" required>
               <option value>Select Gender</option>
               <option value="male" selected>Male</option>
               <option value="female">Female</option>
            </select>
            <br><br>
            <label for="Age"><?php echo $bmi_calculator['bmi-age']; ?></label>
            <input type="number" id="age" value="20"min="0" max="120" required> 
            <div id="ageValidation" class="text-danger"></div>
            <br>
            <div id="metricUnits" class="unit-tab-content">
               <label for="height"><?php echo $bmi_calculator['bmi-height-cm'];?></label>
               <input type="number" id="height" value="180" min="0" max="400" required> 
               <br><br>
               <label for="weight"><?php echo $bmi_calculator['bmi-weight-kg'];?></label>
               <input type="number" id="weight" value="65" min="0" max="600" required> 
               <br><br>
            </div>
            <div id="usUnits" class="unit-tab-content" style="display:none;">
               <div class="row">
                  <div class="col-md-6">
                     <label for="heightFeet"><?php echo $bmi_calculator['bmi-height-feets']; ?> </label>
                     <input type="number" id="heightFeet" value="6" min="0" max='16' required>
                     <br><br>
                  </div>
                  <div class="col-md-6">
                     <label for="heightInches"><?php echo $bmi_calculator['bmi-height-inches']; ?></label>
                     <input type="number" id="heightInches" value="0" min="0" max="12" required>
                     <br><br>   
                  </div>
               </div>
               <label for="weightPounds"><?php echo $bmi_calculator['bmi-weight-pound'];?></label>
               <input type="number" id="weightPounds" value="150" min="0" max="1500" required>
               <br><br>
            </div>
            <input type="submit" value="Calculate BMI" class="btn btn-primary">
            <button id="clear"><i class=""></i> clear</button>
         </form>
         <div id="result" class="mt-3">
            <h3 class="thead"><?php echo $bmi_calculator['bmi-results'];?></h3>
            <table id="outputTable">
               <tr>
                  <th><?php echo $bmi_calculator['bmi-gender']; ?></th>
                  <td id="genderOutput">male</td>
               </tr>
               <tr>
                  <th><?php echo $bmi_calculator['bmi-age-results']; ?></th>
                  <td id="ageOutput">20</td>
               </tr>
               <tr>
                  <th><?php echo $bmi_calculator['bmi-height-results']; ?></th>
                  <td id="heightOutput">180 cm</td>
               </tr>
               <tr>
                  <th>Weight</th>
                  <td id="weightOutput">65 kg</td>
               </tr>
               <tr>
                  <th><?php echo $bmi_calculator['bmi-total-results']; ?></th>
                  <td id="bmiOutput">20.06 kg/㎡ (Normal)</td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
