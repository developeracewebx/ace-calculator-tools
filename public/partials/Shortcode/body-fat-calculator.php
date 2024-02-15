<?php wp_enqueue_script( $this->plugin_name."-bmi-calculator", acePluginBaseURL_calculator() . 'public/js/body-fat-calculator.js', array( 'jquery' ), time(), true );  ?>
<?php $body_fat=get_option("body-fat-calculator");  ?>

<div class="col-md-8 col-sm-8 form-generator">

    <div class="page_title">
        <div>
            <h1><?php echo $body_fat['body-fat-calculator-title'];?></h1>
        </div>
    </div>
    <?php
      
      ?>
    <div class="col-12 mt-3">
        <p><?php echo $body_fat['body-fat-calculator-description'];?></p>
        <div id="calculator">
        <h2><?php echo $body_fat['body-fat-calculator-title'];?></h2>
            <ul class="nav nav-tabs" id="unitTabs">
                <li class="nav-item">
                <a class="nav-link active" id="usUnitTab" href="#"><?php echo $body_fat['body-fat-calculator-unit-type-us'];?></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id="metricUnitTab" href="#"><?php echo $body_fat['body-fat-calculator-unit-type-metrics'];?></a>
                </li>
            </ul>
           
            <form id="fatForm">
                <label for="gender"><?php echo $body_fat['body-fat-gender-titles'];?></label>
                <select id="gender" required>
                    <option value="male"  selected >Male</option>
                    <option value="female">Female</option>
                </select>
                <br><br>
                <label for="age"><?php echo $body_fat['body-fat-age-titles'];?></label>
                <input type="number" id="age" min="0" value="25" max="120" required>
                <br><br>
                <div id="hipDiv" class="hidden">
                    <label for="hip"><?php echo $body_fat['body-fat-hip-title-cm'];?></label>
                    <input type="number" id="hip" min="0" value="92" required>
                    <br><br>
                </div>
                <div id="usUnits" class="unit-tab-content">
                    <label for="weightPounds"><?php echo $body_fat['body-fat-weight-pounds-titles'];?></label>
                    <input type="number" id="weightPounds"min="0" value="152" required>
                    <br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="heightFeet"><?php echo $body_fat['body-fat-height-title-feets'];?></label>
                            <input type="number" id="heightFeet" min="0" value="5" required>
                            <br><br>
                        </div>

                        <div class="col-md-6">
                            <label for="heightInches"><?php echo $body_fat['body-fat-height-title-inches'];?></label>
                            <input type="number" id="heightInches" value="10" min="0" max="12" required>
                            <br><br>   
                        </div>

                        <div class="col-md-6">
                            <label for="Neckfeet"><?php echo $body_fat['body-fat-neck-title-feet'];?></label>
                            <input type="number" id="Neckfeet" min="0" value="1" required> 
                            <br><br>
                        </div>

                        <div class="col-md-6">
                            <label for="NeckInches"><?php echo $body_fat['body-fat-neck-title-inches'];?></label>
                            <input type="number" id="NeckInches" value="7" min="0" max="12" required>
                            <br><br>  
                        </div>

                        <div class="col-md-6">
                            <label for="Waistfeet"><?php echo $body_fat['body-fat-waist-feet-title'];?></label>
                            <input type="number" id="Waistfeet"  min="0" value="3" required> 
                            <br><br>
                        </div>
                       
                        <div class="col-md-6">
                            <label for="WaistInches"><?php echo $body_fat['body-fat-waist-inches-title'];?></label>
                            <input type="number" id="WaistInches" value="1" min="0" max="12" required>
                            <br><br> 
                        </div>
                    </div>
                    <div id="feethipDiv" class="hidden" >
                        <div class ="row" id="hip-data">
                            <div class="col-md-6 " id="hip-feet" >
                                <label for="hipfeet"><?php echo $body_fat['body-fat-hip-title-feet'];?></label>
                                <input type="number" id="hipfeet" min="0" value="2" required>
                                <br><br>
                            </div>
                            <div class="col-md-6">
                                <label for="hipinches"><?php echo $body_fat['body-fat-hip-title-inches'];?></label>
                                <input type="number" id="hipinches" value="10" min="0" max="12" required>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="metricUnits" class="unit-tab-content">
                    <label for="metricHeight"><?php echo $body_fat['body-fat-height-title-cm'];?></label>
                    <input type="number" id="metricHeight" value="178" min="0" required> 
                    <br><br>
                    <label for="metricWeight"><?php echo $body_fat['body-fat-weight-kg-titles'];?></label>
                    <input type="number" id="metricWeight" value="70" min="0" required> 
                    <br><br>
                    <label for="metricNeck"><?php echo $body_fat['body-fat-neck-title-cm'];?></label>
                    <input type="number" id="metricNeck" value="50" min="0" required> 
                    <br><br>
                   
                    <label for="metricWaist"><?php echo $body_fat['body-fat-waist-cm-title'];?></label>
                    <input type="number" id="metricWaist" value="96" min="0" required> 
                    <br><br>
                </div>
                <input type="submit" value="<?php echo $body_fat['body-fat-button-titles'];?>" class="btn btn-primary">
                <button id="clear"><i class=""></i> clear</button>
            </form>

            <div id="result" class="mt-3">
                <h3 class="thead"><?php echo $body_fat['body-fat-results-titles'];?></h3>
                <table id="outputTable">
                    <tr>
                        <th><?php echo $body_fat['body-fat-age-title-results'];?></th>
                        <td id="ageOutput">25</td>
                    </tr>
                    <tr>
                        <th><?php echo $body_fat['body-fat-Gender-title-results'];?></th>
                        <td id="genderOutput">male</td>
                    </tr>
                    <tr>
                        <th><?php echo $body_fat['body-fat-height-title-results'];?></th>
                        <td id="heightOutput">5 feet 10 inches</td>
                    </tr>
                    <tr>
                        <th><?php echo $body_fat['body-fat-Weight-title-results'];?></th>
                        <td id="weightOutput">152 pounds</td>
                    </tr>
                    <tr>
                        <th><?php echo $body_fat['body-fat-Neck-title-results'];?></th>
                        <td id="neckOutput">1 feet 7 inches</td>
                    </tr>
                    <tr>
                        <th><?php echo $body_fat['body-fat-Waist-title-results'];?></th>
                        <td id="waistOutput">3 feet 1 inches</td>
                    </tr>
                    <tr id="hipRow" style="display:none;">
                        <th><?php echo $body_fat['body-fat-Hip-title-results'];?></th>
                        <td id="hipOutput">-</td>
                    </tr>
                    <tr>
                        <th><?php echo $body_fat['body-fat-title-total-results'];?></th>
                        <td id="bodyfatOutput">15.47 %</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

