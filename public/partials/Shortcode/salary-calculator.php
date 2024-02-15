<?php wp_enqueue_script( $this->plugin_name."-calculator", acePluginBaseURL_calculator() . 'public/js/salary-calculator.js', array( 'jquery' ), $this->version, true );  ?>
<?php $salary_calculator = get_option("salary-calculator"); ?>

<div class="col-md-8 col-sm-8 form-generator">
   <div class="page_title">
      <div>
         <h1><?php echo $salary_calculator['salary-title']; ?></h1>
      </div>
   </div>
   <?php
    
      ?>
   <div class="col-12 mt-3">
      <p><?php echo $salary_calculator['salary-description']; ?></p>
      <div id="calculator">
         <h2><?php echo $salary_calculator['salary-title']; ?></h2>
      
         <form id="salaryform">
            <label><?php echo $salary_calculator['salary-amount-title']; ?> </label>
            <!-- <span class="dollar-symbol">$</span> -->
            <input type="number" class="salaryinput" name="salaryinput" id="salaryinput" required min = "0"value="50">
            <br><br>
           
      
    
     
            <label for="Per"><?php echo $salary_calculator['salary-per']; ?></label>
            <select id="Per"required >
            <option value="Hourly"selected><?php echo $salary_calculator['salary-hour']; ?></option>
            <option value="Daily"><?php echo $salary_calculator['salary-day']; ?></option>
            <option value="Weekly"><?php echo $salary_calculator['salary-week']; ?></option>
            <option value="Bi-Weekly"><?php echo $salary_calculator['salary-bi-week']; ?></option>
            <option value="Semi-Monthly"><?php echo $salary_calculator['salary-semi-month']; ?></option>
            <option value="Monthly" ><?php echo $salary_calculator['salary-month']; ?></option>
            <option value="Quarterly"><?php echo $salary_calculator['salary-quarter']; ?></option>
            <option value="Annual"><?php echo $salary_calculator['salary-year']; ?></option>
            </select>
            <br><br>
            <label for="Hours"><?php echo $salary_calculator['salary-hours-per-week']; ?></label>
            <input type="number" id="Hours"value="40"required min="1">
            <br><br>
            <label for="days"><?php echo $salary_calculator['salary-days-per-week']; ?></label>
            <input type="number" id="days"value="5"required min="1" max="7">
            <br><br>
            <label for="Holidays"><?php echo $salary_calculator['salary-holiday-per-year']; ?></label>
            <input type="number" id="Holidays"value="10"required min="1">
            <br><br>
            <label for="Vacation"><?php echo $salary_calculator['salary-vacation-days-per-years']; ?></label>
            <input type="number" id="Vacation"value="15"required min="1">
            <br><br>
            <input type="submit" value="<?php echo $salary_calculator['salary-result-button']; ?>" class="btn btn-primary">
            <button id="Clear"><i class=""></i> clear</button>
         </form>
         <div id="result" class="mt-3">
            <!-- <h3 class="thead">Reslut</h3> -->
            <table id="outputTable">
           <div class="row">
           <tr>
                  <th class="headingh">#</th>
                  <td class="thead"><?php echo $salary_calculator['salary-unadjust']; ?></td>
                  <td class="thead"><?php echo $salary_calculator['salary-holiday-adjusted']; ?> </td>
               </tr>
               <tr>
                  <th><?php echo $salary_calculator['salary-hourly']; ?></th>
                  <td id="HourlyOutput">$50.00</td>
                  <td id = "HourlyholidayOutput">$45.19</td>
               </tr>
               <tr>
                  <th><?php echo $salary_calculator['salary-daily']; ?></th>
                  <td id="DailyOutput">$400.00</td>
                  <td id = "DailyholidayOutput">$385.00</td>
               </tr>
               <tr>
                  <th id="Weeklylabel"><?php echo $salary_calculator['salary-weekly']; ?></th>
                  <td id="WeeklyOutput">$2000.00</td>
                  <td id = "WeeklyholidayOutput">$1987.50</td>
               </tr>
               <tr>
                  <th><?php echo $salary_calculator['salary-bi-weekly']; ?></th>
                  <td id="BiweeklyOutput">$4000.00</td>
                  <td id = "BiweeklyholidayOutput">$3975.00</td>
               </tr>
               <tr>
                  <th><?php echo $salary_calculator['salary-semi-monthly']; ?></th>
                  <td id="SemimonthlyOutput">$4200.00</td>
                  <td id = "SemimonthlyholidayOutput">$3975.00</td>
               </tr>
               <tr>
                  <th><?php echo $salary_calculator['salary-monthly']; ?></th>
                  <td id="MonthlyOutput">$8400.00</td>
                  <td id = "monthlyholidayOutput">$7950.00</td>
               </tr>
               <tr>
                  <th><?php echo $salary_calculator['salary-quarterly']; ?></th>
                  <td id="QuarterlyOutput">$25200.00</td>
                  <td id ="QuarterlyholidayOutput">$23850.00</td>
               </tr>
               <tr>
                  <th><?php echo $salary_calculator['salary-annual']; ?></th>
                  <td id="AnnualOutput">$100800.00</td>
                  <td id = "AnnualOutputolidayOutput">$95400.00</td>
               </tr>
               <div>
            </table>
         </div>
      </div>
   </div>
</div>




