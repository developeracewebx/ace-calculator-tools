<?php wp_enqueue_script( $this->plugin_name."-calculator", acePluginBaseURL_calculator() . 'public/js/energy-calculator.js', array( 'jquery' ), $this->version, true );  ?>
<?php $energy_calculator = get_option("energy-calculator"); ?>
<div class="col-md-8 col-sm-8 form-generator">
    <div class="page_title">
        <div>
            <h1><?php echo $energy_calculator['calculator-title'];?></h1>
        </div>
    </div>
    <?php
      
    ?>
    <div class="col-12 mt-3">
      <p><?php echo $energy_calculator['calculator-description'];?></p>
        <div id="calculator">
            <h2><?php echo $energy_calculator['calculator-title'];?></h2>
            <br>
            <form id="energyForm">
                <div class="row">
                    <div class="col-md-6">
                        <label for="value"><?php echo $energy_calculator['calculator-value'];?></label><br>
                        <input type="number" id="value" value="1" min="1" required>
                        <br><br>
                    </div>
                   
                    <div class="col-md-6">
                        <label for="type"><?php echo $energy_calculator['calculator-type'];?></label><br>
                        <select id="type" required>
                            <option value="KCAL"><?php echo $energy_calculator['calculator-calories-nutrition'];?></option>
                            <option value="CAL"><?php echo $energy_calculator['calculator-calorie-[cal]'];?></option>
                            <option value="KJ"><?php echo $energy_calculator['calculator-Kilojoules-[kJ]'];?></option>
                            <option value="J"><?php echo $energy_calculator['calculator-Joules-[J]'];?></option>
                        </select>
                        <br><br>
                    </div>
                    <div class="col-md-6 valueouput">
                        <label for="resultlabel"><?php echo $energy_calculator['calculator-result'];?></label><br>
                        <div class="output" id="result">4.1840</div>
                    </div>
                    <div class="col-md-6">
                        <label for="resulttypelabel"><?php echo $energy_calculator['calculator-type'];?></label><br>
                        <select id="resulttype">
                            <option value="KCAL"><?php echo $energy_calculator['calculator-calories-nutrition'];?></option>
                            <option value="CAL"><?php echo $energy_calculator['calculator-calorie-[cal]'];?></option>
                            <option value="KJ"><?php echo $energy_calculator['calculator-Kilojoules-[kJ]'];?></option>
                            <option value="J"><?php echo $energy_calculator['calculator-Joules-[J]'];?></option>
                        </select>
                    </div>
                </div>
                <br>
                <input type="submit" value="<?php echo $energy_calculator['calculator-button-titles'];?>" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>

