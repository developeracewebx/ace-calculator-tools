// Log User Activity
function logUserAction(action) {
   jQuery.ajax({
      type: "POST",
      url: "<?php echo base_url('calculator/logUserAction'); ?>",
      data: {
         action: action
      }
   });
}
document.getElementById('salaryform').addEventListener('submit', function(event) {
   event.preventDefault();
   logUserAction("Salary Calculator Tool");
   
   var selectedOption = document.getElementById('Per').value;

   if (selectedOption === 'Hourly') {
       calculateSalary();
       calculateHolidaysSalary();
   } else if (selectedOption === 'Daily') {
       dailyFunction();
       dayfuncation();
   } else if (selectedOption === 'Weekly') {
       weeklyFunction();
       weeklyholidayFunction();
   } else if (selectedOption === 'Bi-Weekly') {
       biWeeklyFunction();
       biweeklyholidayFunction();
   } else if (selectedOption === 'Semi-Monthly') {
       semiMonthlyFunction();
       semiMonthlyholidayFunction();
   } else if (selectedOption === 'Monthly') {
       monthlyFunction();
       MonthlyholidayFunction();
   } else if (selectedOption === 'Quarterly') {
       quarterlyFunction();
       quarterlyholidayFunction();
   } else if (selectedOption === 'Annual') {
       annualFunction();
       annualholidaysFunction();
   }
});

function calculateSalary() {

  const salaryamount = parseInt(document.getElementById('salaryinput').value);
  const hours = parseInt(document.getElementById('Hours').value);
  const days = parseInt(document.getElementById('days').value);
  const Holidays = parseInt(document.getElementById('Holidays').value);
  const Vacation = parseInt(document.getElementById('Vacation').value);
  const amount = salaryamount;
  const weekly = salaryamount  * hours ;
  const biWeekly = weekly * 2;
  const semiMonthly = weekly * 2.1;
  const monthly = semiMonthly * 2;
  const quarterly = monthly * 3;
  const daily = weekly / days ; 
  const annual = monthly * 12 ;
  // Update the result table
  document.getElementById('HourlyOutput').textContent = `$${amount.toFixed(2)}`;
  document.getElementById('DailyOutput').textContent = `$${daily.toFixed(2)}`;
  document.getElementById('WeeklyOutput').textContent = `$${weekly.toFixed(2)}`;
  document.getElementById('BiweeklyOutput').textContent = `$${biWeekly.toFixed(2)}`;
  document.getElementById('SemimonthlyOutput').textContent = `$${semiMonthly.toFixed(2)}`;
  document.getElementById('MonthlyOutput').textContent = `$${monthly.toFixed(2)}`;
  document.getElementById('QuarterlyOutput').textContent = `$${quarterly.toFixed(2)}`;
  document.getElementById('AnnualOutput').textContent = `$${annual.toFixed(2)}`;  
}

//Holidays adjusted
function calculateHolidaysSalary() {

  const salaryamount = parseInt(document.getElementById('salaryinput').value);
  const hours = parseInt(document.getElementById('Hours').value);
  const days = parseInt(document.getElementById('days').value);
  const Holidays = parseFloat(document.getElementById('Holidays').value); // Assuming 'Holidays' is an input element with a numerical value
  const Vacation = parseInt(document.getElementById('Vacation').value);
  const holidayvaction = Holidays + Vacation
  const amount = salaryamount - holidayvaction  /5.2;
  const weekly = salaryamount  * hours - holidayvaction /2;
  const biWeekly = weekly * 2;
  const semiMonthly = weekly * 2;
  const monthly = semiMonthly * 2
  const quarterly = monthly * 3;
  const annual = monthly * 12 ;
  const daily = weekly / days  - holidayvaction/2; 
// Update the result table
document.getElementById('HourlyholidayOutput').textContent = `$${amount.toFixed(2)}`;
document.getElementById('DailyholidayOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyholidayOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyholidayOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyholidayOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('monthlyholidayOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyholidayOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutputolidayOutput').textContent = `$${annual.toFixed(2)}`;

}



function dailyFunction() {
  
const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const daily = salaryamount; 
const amount = daily / hours * days;
const weekly = salaryamount * days;
const semiMonthly = (daily * days) * 2; // Assuming semi-monthly means twice a month
const monthly = semiMonthly * 2
const annual = monthly * 12; // Assuming 12 months in a year
const quarterly = annual / 4;
const biWeekly = daily * days * 2;
  // Update the result table
  document.getElementById('HourlyOutput').textContent = `$${amount.toFixed(2)}`;
  document.getElementById('DailyOutput').textContent = `$${daily.toFixed(2)}`;
  document.getElementById('WeeklyOutput').textContent = `$${weekly.toFixed(2)}`;
  document.getElementById('BiweeklyOutput').textContent = `$${biWeekly.toFixed(2)}`;
  document.getElementById('SemimonthlyOutput').textContent = `$${semiMonthly.toFixed(2)}`;
  document.getElementById('MonthlyOutput').textContent = `$${monthly.toFixed(2)}`;
  document.getElementById('QuarterlyOutput').textContent = `$${quarterly.toFixed(2)}`;
  document.getElementById('AnnualOutput').textContent = `$${annual.toFixed(2)}`;
}


//Holidays adjusted
function dayfuncation() {
const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const holidayvaction = Holidays + Vacation
const daily = salaryamount - holidayvaction /5 ; 
const amount = daily / hours * days- holidayvaction /42 ;
const weekly = salaryamount * days - holidayvaction ;
const semiMonthly = (daily * days) * 2; // Assuming semi-monthly means twice a month
const monthly = semiMonthly * 2
const annual = monthly * 12; 
const quarterly = annual / 4;
const biWeekly = daily * days * 2  - holidayvaction;
// Update the result table
document.getElementById('HourlyholidayOutput').textContent = `$${amount.toFixed(2)}`;
document.getElementById('DailyholidayOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyholidayOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyholidayOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyholidayOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('monthlyholidayOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyholidayOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutputolidayOutput').textContent = `$${annual.toFixed(2)}`;

}


function weeklyFunction() {

const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const holidayvaction = Holidays + Vacation;
const amount = salaryamount;
const houramount = amount / hours; 
const weekly = amount + holidayvaction /5;
const biWeekly = weekly * 2;
const semiMonthly = weekly * 2.1 ;
const monthly = semiMonthly * 2; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
const daily = amount / days; 
// Update the result table
document.getElementById('HourlyOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('MonthlyOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutput').textContent = `$${annual.toFixed(2)}`;
}

//Holidays adjusted
function weeklyholidayFunction() {

const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const holidayvaction = Holidays + Vacation;
const amount = salaryamount;
const houramount = amount / hours; 
const weekly = amount + holidayvaction /12;
const biWeekly = weekly * 2;
const semiMonthly = weekly * 2.1 ;
const monthly = semiMonthly * 2; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
const daily = amount / days; 
// Update the result table
document.getElementById('HourlyholidayOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyholidayOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyholidayOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyholidayOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyholidayOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('monthlyholidayOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyholidayOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutputolidayOutput').textContent = `$${annual.toFixed(2)}`;
}

function biWeeklyFunction() {
const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const amount = salaryamount;
const houramount = (amount / 1.8) / hours; 
const holivar = Holidays + Vacation;
const weekly = houramount + holivar  ;
const biWeekly = weekly * 2;
const semiMonthly = (weekly * 2.5)+ Holidays - Vacation ;
const monthly = semiMonthly * 2; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
const daily = (amount / 2) / days; 
// Update the result table
document.getElementById('HourlyOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('MonthlyOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutput').textContent = `$${annual.toFixed(2)}`;
}
//Holidays adjusted
function biweeklyholidayFunction() {
const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const holidayvaction = Holidays + Vacation;
const amount = salaryamount - holidayvaction /6;
const houramount = (amount / 1.9) / hours; 
const weekly = houramount + (Holidays + Vacation);
const biWeekly = weekly * 2;
const semiMonthly = (weekly * 2.5)+ Holidays - Vacation ;
const monthly = semiMonthly * 2; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
const daily = (amount / 2) / days;
// Update the result table
document.getElementById('HourlyholidayOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyholidayOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyholidayOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyholidayOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyholidayOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('monthlyholidayOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyholidayOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutputolidayOutput').textContent = `$${annual.toFixed(2)}`;
}

function semiMonthlyFunction() {
  
const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const amount = salaryamount;
const houramount = (amount / 1.9) / hours; 
const daily = (amount / 1.9) / days; 
const weekly = daily + (Vacation + Holidays) ;
const biWeekly = weekly * 2;
const semiMonthly = (weekly * 2)+ Holidays - Vacation ;
const monthly = semiMonthly * 2; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
// Update the result table
document.getElementById('HourlyOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('MonthlyOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutput').textContent = `$${annual.toFixed(2)}`;
}

//Holidays adjusted
function semiMonthlyholidayFunction() {
const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const amount = salaryamount;
const houramount = (amount / 1.9) / hours; 
const daily = (amount / 1.9) / days; 
const weekly = daily + (Vacation + Holidays) ;
const biWeekly = weekly * 2;
const semiMonthly = (weekly * 1.9)+ Holidays - Vacation ;
const monthly = semiMonthly * 2; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
// Update the result table
// Update the result table
document.getElementById('HourlyholidayOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyholidayOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyholidayOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyholidayOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyholidayOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('monthlyholidayOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyholidayOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutputolidayOutput').textContent = `$${annual.toFixed(2)}`;
}


function monthlyFunction() {

const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const holivar = Vacation + Holidays
const amount = salaryamount;
const houramount = (amount /4.5)/ hours ; 
const daily = (amount / 4.5) / days; 
const weekly = daily + holivar / 2;
const biWeekly = weekly * 2;
const semiMonthly = (weekly * 2)+ holivar / 70;
const monthly = semiMonthly * 2; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
// Update the result table
document.getElementById('HourlyOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('MonthlyOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutput').textContent = `$${annual.toFixed(2)}`;

}
//Holidays adjusted
function MonthlyholidayFunction() {
const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const holivar = Vacation + Holidays
const amount = salaryamount;
const houramount = (amount /5)/ hours ; 
const daily = (amount / 5) / days; 
const weekly = daily + holivar / 2;
const biWeekly = weekly * 2;
const semiMonthly = (weekly * 2)+ holivar / 70;
const monthly = semiMonthly * 2; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;

// Update the result table
document.getElementById('HourlyholidayOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyholidayOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyholidayOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyholidayOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyholidayOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('monthlyholidayOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyholidayOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutputolidayOutput').textContent = `$${annual.toFixed(2)}`;

}

function quarterlyFunction() {
const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const holidayvar = Holidays + Vacation;
const amount = salaryamount + holidayvar /10;
const houramount = (amount / 13)/ hours ; 
const daily = (amount / 13) / days; 
const weekly = daily + holidayvar /9;
const biWeekly = (weekly * 2)+ holidayvar /12;
const semiMonthly = (weekly * 2)+ holidayvar /12 ;
const monthly = semiMonthly * 2; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
// Update the result table
document.getElementById('HourlyOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('MonthlyOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutput').textContent = `$${annual.toFixed(2)}`;

}

function quarterlyholidayFunction() {

const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const holidayvar = Holidays + Vacation;
const amount = salaryamount + holidayvar /10;
const houramount = (amount / 13.9)/ hours ; 
const daily = (amount / 13.9) / days; 
const weekly = daily + holidayvar /10;
const biWeekly = (weekly * 2)+ holidayvar /13;
const semiMonthly = (weekly * 2)+ holidayvar /13 ;
const monthly = semiMonthly * 2; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
// Update the result table
document.getElementById('HourlyholidayOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyholidayOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyholidayOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyholidayOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyholidayOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('monthlyholidayOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyholidayOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutputolidayOutput').textContent = `$${annual.toFixed(2)}`;
}



function annualFunction() {

const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const holidayvar = Holidays + Vacation;
const amount = salaryamount + holidayvar /25;
const houramount = (amount / 52) / hours; 
const daily = (amount / 52) / days; 
const weekly = houramount  * hours ;
const biWeekly = weekly * 2;
const semiMonthly = (weekly * 2.5);
const monthly = semiMonthly * 2 ; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
// Update the result table
document.getElementById('HourlyOutput').textContent = `$${houramount.toFixed(2)}`;
document.getElementById('DailyOutput').textContent = `$${daily.toFixed(2)}`;
document.getElementById('WeeklyOutput').textContent = `$${weekly.toFixed(2)}`;
document.getElementById('BiweeklyOutput').textContent = `$${biWeekly.toFixed(2)}`;
document.getElementById('SemimonthlyOutput').textContent = `$${semiMonthly.toFixed(2)}`;
document.getElementById('MonthlyOutput').textContent = `$${monthly.toFixed(2)}`;
document.getElementById('QuarterlyOutput').textContent = `$${quarterly.toFixed(2)}`;
document.getElementById('AnnualOutput').textContent = `$${annual.toFixed(2)}`;

}
//Holidays adjusted
function annualholidaysFunction() {
const salaryamount = parseInt(document.getElementById('salaryinput').value);
const hours = parseInt(document.getElementById('Hours').value);
const days = parseInt(document.getElementById('days').value);
const Holidays = parseInt(document.getElementById('Holidays').value);
const Vacation = parseInt(document.getElementById('Vacation').value);
const holidayvar = Holidays + Vacation;
const amount = salaryamount + holidayvar /25;
const houramount = (amount / 52) / hours; 
const daily = (amount / 52) / days; 
const weekly = houramount  * hours ;
const biWeekly = weekly * 2;
const semiMonthly = (weekly * 2.2);
const monthly = semiMonthly * 2 ; 
const annual = monthly * 12 ;
// Assuming 4 weeks in a month
const quarterly = monthly * 3;
 document.getElementById('HourlyholidayOutput').textContent = `$${houramount.toFixed(2)}`;
 document.getElementById('DailyholidayOutput').textContent = `$${daily.toFixed(2)}`;
 document.getElementById('WeeklyholidayOutput').textContent = `$${weekly.toFixed(2)}`;
 document.getElementById('BiweeklyholidayOutput').textContent = `$${biWeekly.toFixed(2)}`;
 document.getElementById('SemimonthlyholidayOutput').textContent = `$${semiMonthly.toFixed(2)}`;
 document.getElementById('monthlyholidayOutput').textContent = `$${monthly.toFixed(2)}`;
 document.getElementById('QuarterlyholidayOutput').textContent = `$${quarterly.toFixed(2)}`;
 document.getElementById('AnnualOutputolidayOutput').textContent = `$${annual.toFixed(2)}`;
 
 }
var Clear = document.getElementById('Clear');
Clear.addEventListener('click', function (event) {
     document.getElementById('salaryinput').value = 0;
     // document.getElementById('Per').value = 0;
     document.getElementById('Hours').value = 0;
     document.getElementById('days').value = 0;
     document.getElementById('Holidays').value = 0;
     document.getElementById('Vacation').value = 0;
  })
  // Log User Activity
  // Log User Activity
function logUserAction(action) {
   jQuery.ajax({
      type: "POST",
      url: "<?php echo base_url('calculator/logUserAction'); ?>",
      data: {
         action: action
      }
   });
}