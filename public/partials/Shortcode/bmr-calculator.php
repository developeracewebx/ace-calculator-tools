<?php wp_enqueue_script( $this->plugin_name."-bmr-calculator", acePluginBaseURL_calculator() . 'public/js/bmr-calculator.js', array( 'jquery' ), time(), true );  ?>
<?php  $bmr_calculator = get_option('bmr-calculator');?>

<div class="col-md-8 col-sm-8 form-generator">
   <div class="page_title">
      <div>
         <h1><?php echo $bmr_calculator['bmr-calculator-title'];   ?></h1>
      </div>
   </div>
   <?php
      // $breadcrumb = array('controller' => 'calculator', 'title' => 'BMR Calculator');
      // $this->load->view('breadcrumb', $breadcrumb);
      ?>
   <div class="col-12 mt-3">
      <p><?php echo $bmr_calculator['bmr-calculator-description'];   ?></p>
      <div id="calculator">
         <h2><?php echo $bmr_calculator['bmr-calculator-title'];   ?></h2>
         <ul class="nav nav-tabs" id="unitTabs">
            <li class="nav-item">
               <a class="nav-link  active-tab" id="Metrictab"><?php echo $bmr_calculator['bmr-calculator-unit-type-metrics'];   ?></a>
            </li>
            <li class="nav-item">
               <a class=" nav-link tab" id="UStab"><?php echo $bmr_calculator['bmr-calculator-unit-type-us'];   ?></a>
            </li>
         </ul>
         <form id="BMRform">
            <label><?php echo $bmr_calculator['bmr-age-titles'];   ?></label>
            <input type="number" class="ageinput" name="ageinput" id="ageinput" required value="22"min="1" max="120">
            <br><br>
            <label for="gender"><?php echo $bmr_calculator['bmr-gender-titles'];   ?></label>
            <select id="gender" required>
               <option value="">Select Gender</option>
               <option value="male"selected>Male</option>
               <option value="female">Female</option>
            </select>
            <br><br>
            <div id="UStabform" class="hidden">
               <div class="row">
                  <div class="col-md-6">
                     <label for="heightFeet"><?php echo $bmr_calculator['bmr-height-title-feets'];   ?> </label>
                     <input type="number" id="feet" placeholder="feet" required min="0" value="5">
                     <br><br>
                  </div>
                  <div class="col-md-6">
                     <label for="heightInches"><?php echo $bmr_calculator['bmr-height-title-inches'];   ?></label>
                     <input type="number" id="inches" placeholder="inches" required min="0" value="5">
                     <br><br>
                  </div>
               </div>
               <label for="weight"><?php echo $bmr_calculator['bmr-weight-pounds-titles'];   ?></label>
               <input type="number" id="weightpounds" placeholder="pounds" required  min="0"  value="500">
               <br>
            </div>
            <div id="MetricUnitsform">
               <label for="height"><?php echo $bmr_calculator['bmr-height-title-cm'];   ?></label>
               <input type="number" id="height"value="164"required min="0">
               <br><br>
               <label for="weight"><?php echo $bmr_calculator['bmr-weight-kg-titles'];   ?></label>
               <input type="number" id="weight"value="60"required min="0">
            </div>
            <label for=""id="Resultslabel"><?php echo $bmr_calculator['bmr-results-unit-titles'];   ?></label>
            
            <div class="resultchangeoption">
               <label for="Calories"class="resultoutput">
               <input type="radio"name="resultoutput"value="Calories"class="radioinput"checked>Calories</label>
               <label for=""class="resultoutput">
               <input type="radio"name="resultoutput" value="Kilojoules"class="radioinput">Kilojoules</label>
            </div>
            <input type="submit" value="Calculate" class="btn btn-primary">
            <button id="Clear"><i class=""></i> clear</button>
         </form>
         <div id="result" class="mt-3">
            <h3 class="thead"><?php echo $bmr_calculator['bmr-results-titles'];   ?></h3>
            <table id="outputTable">
               <tr>
                  <th>Gender</th>
                  <td id="genderOutput">male</td>
               </tr>
               <tr>
                  <th>Age</th>
                  <td id="ageOutput">20</td>
               </tr>
               <tr>
                  <th id="heightlabel"><?php echo $bmr_calculator['bmr-height-title-results'];   ?></th>
                  <td id="heightOutput">164 cm</td>
               </tr>
               <tr>
                  <th>Weight</th>
                  <td id="weightOutput">60 kg</td>
               </tr>
               <tr>
                  <th><?php echo $bmr_calculator['bmr-title-total-results'];   ?></th>
                  <td id="bmrOutput"> 1,520 Calories/day</td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>


