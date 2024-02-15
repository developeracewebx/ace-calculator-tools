<?php wp_enqueue_script( $this->plugin_name."-calculator", acePluginBaseURL_calculator() . 'public/js/ideal-weight-calculator.js', array( 'jquery' ), $this->version, true );  ?>
<?php $ideals_weighted_calculator = get_option("ideal-weight-calculator"); ?>

<div class="col-md-8 col-sm-8 form-generator">
   <div class="page_title">
      <div>
         <h1><?php echo $ideals_weighted_calculator['ideal-weight-title'];?></h1>
      </div>
   </div>
  
   <div class="col-12 mt-3">
      <p><?php echo $ideals_weighted_calculator['ideal-weight-description'];?></p>
      <div id="calculator">
         <h2><?php echo $ideals_weighted_calculator['ideal-weight-title'];?></h2>
         <ul class="nav nav-tabs" id="unitTabs">
            <li class="nav-item">
               <a class="nav-link active" id="metricUnitTab" href="#"><?php echo $ideals_weighted_calculator['ideal-weight-calculator-unit-type-metrics'];?></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="usUnitTab" href="#"><?php echo $ideals_weighted_calculator['ideal-weight-calculator-unit-type-us'];?></a>
            </li>
         </ul>
         <form id="IdealWeightForm">
            <label for="gender"><?php echo $ideals_weighted_calculator['ideal-weight-gender-titles'];?></label>
            <select id="gender" required>
               <option value>Select Gender</option>
               <option value="male" selected>Male</option>
               <option value="female">Female</option>
            </select>
            <br><br>
            <label for="Age"><?php echo $ideals_weighted_calculator['ideal-weight-age-titles'];?></label>
            <input type="number" id="age" value="22" min="1" max="120" required> 
            <div id="ageValidation" class="text-danger"></div>
            <br>
            <div id="metricUnits" class="unit-tab-content">
               <label for="height"><?php echo $ideals_weighted_calculator['ideal-weight-height-title-cm'];?></label>
               <input type="number" id="height" value="164" min="0"  required> 
               <br><br>
            </div>
            <div id="usUnits" class="unit-tab-content" style="display:none;">
               <label for="heightFeet"><?php echo $ideals_weighted_calculator['ideal-weight-height-title-feets'];?></label>
               <input type="number" id="heightFeet" value="6" min="0" required>
               <br><br>
               <label for="heightInches"><?php echo $ideals_weighted_calculator['ideal-weight-height-title-inches'];?></label>
               <input type="number" id="heightInches" value="0" min="0" max="12" required>               
               <br><br>
            </div>
            <input type="submit" value="Calculate" class="btn btn-primary">
            <button id="clear"><i class=""></i> clear</button>
         </form>
         
         <div id="result" class="mt-3">
            <h3 class="thead"><?php echo $ideals_weighted_calculator['ideal-weight-result'];?></h3>
            <table id="outputTable">
               <tr>
                  <th><?php echo $ideals_weighted_calculator['ideal-weight-robinson'];?></th>
                  <td id="RobinsonOutput">60.7 kg</td>
               </tr>
               <tr>
                  <th><?php echo $ideals_weighted_calculator['ideal-weight-calculator-miller'];?></th>
                  <td id="MillerOutput">62.6 kg</td>
               </tr>
               <tr>
                  <th id="Devinelabel"><?php echo $ideals_weighted_calculator['ideal-weight-calculator-devine'];?></th>
                  <td id="DevineOutput">60.5 kg</td>
               </tr>
               <tr>
                  <th><?php echo $ideals_weighted_calculator['ideal-weight-calculator-hamwi'];?></th>
                  <td id="HamwiOutput">60.3 kg</td>
               </tr>
               <tr>
                  <th><?php echo $ideals_weighted_calculator['ideal-weight-calculator-healthy-BMI-range'];?></th>
                  <td id="BMIRangeOutput">47.4 - 63.7 kg</td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>

