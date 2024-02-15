
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
  
            
          var age             = document.getElementById('ageinput');
          var gender          = document.getElementById('gender');
          var bmrOutput       = document.getElementById('bmrOutput');
          var MaintainwOutput = document.getElementById('MaintainwOutput');
          var usUnitTab       = document.getElementById('usUnitTab');
          var metricUnitTab   = document.getElementById('metricUnitTab');
          var usUnits         = document.getElementById('usUnits');
          var metricUnits     = document.getElementById('metricUnits');
          var Clear           = document.getElementById('Clear');
          var feet            = document.getElementById('feet');
          var inches          = document.getElementById('inches');
          var weightpounds    = document.getElementById('weightpounds');
          var ageOutput       = document.getElementById('ageOutput');
          var genderOutput    = document.getElementById('genderOutput');
          var height          = document.getElementById('height');
          var weight          = document.getElementById('weight');
          //tab activaction 
          var maintaionweight = document.getElementById('maintaionweight');
              maintaionweight.style.visibility = 'collapse';
          function activateTab(tabElement) {
              const tabs = document.querySelectorAll('.tab');
              tabs.forEach(tab => {
                  tab.classList.remove('active-tab');
              });
              tabElement.classList.add('active-tab');
          }
          usUnitTab.addEventListener('click', function(event) {
              activateTab(usUnitTab);
              usUnits.classList.remove('hidden');
              metricUnits.classList.add('hidden');
          });
          metricUnitTab.addEventListener('click', function(event) {
              activateTab(metricUnitTab);
              metricUnits.classList.remove('hidden');
              usUnits.classList.add('hidden');
          });
          //clear button 
          document.getElementById('clear').addEventListener('click', function(event) {
              event.preventDefault();
              const activeTab = document.querySelector('.active-tab');
              // Clear form fields
              document.getElementById('gender').selectedIndex = 0;
              document.getElementById('ageinput').value = '0';
              document.getElementById('usUnits').value = '';
              document.getElementById('metricUnits').value = '';
              if (activeTab && activeTab.id === 'usUnitTab') 
              {
                  document.getElementById('feet').value = 0;
                  document.getElementById('inches').value = 0;
                  document.getElementById('weightpounds').value = 0;
                  document.getElementById('cactivity').value = 0;
              }
              else 
              {
                  document.getElementById('height').value = 0;
                  document.getElementById('weight').value = 0;
                  document.getElementById('cactivity').value = 0;
              }
          });
          //display result
          document.getElementById('BMRform').addEventListener('submit', function(e) {
              e.preventDefault();
             
              logUserAction("Calorie Calculator Tool");
              const activeTab = document.querySelector('.active-tab');
              let heightCM;
              let weightKg;
              if (activeTab && activeTab.id === 'usUnitTab') {
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
              }
              if (activeTab && activeTab.id === 'metricUnitTab') {
                  heightCM = parseFloat(document.getElementById('height').value);
                  weightKg = parseFloat(document.getElementById('weight').value);
                  document.getElementById('heightOutput').textContent = heightCM + ' cm';
                  document.getElementById('weightOutput').textContent = weightKg + ' kg';
              }
              ageOutput.innerText = age.value;
              genderOutput.innerText = gender.value;
              var ele = document.getElementsByName('resultoutput');
  
              for (var i = 0; i < ele.length; i++) 
              {
                  if (ele[i].checked) 
                  {
                     // Assuming 'ele' is properly defined
  
                         const activityLevel = document.getElementById('cactivity').value;
  
                       if (ele[i].value === 'Kilojoules' && activityLevel === "1") {
                          var kilojoules = Kilojoulesbmrresult(age.value, heightCM, weightKg, gender.value);
                          var formattedBMR = new Intl.NumberFormat().format(Math.round(kilojoules));
                          bmrOutput.textContent = formattedBMR + ' kJ/day';
  
                          var bmrRow = document.getElementById('bmrRow');
                          bmrRow.style.visibility = 'visible';
  
                          var maintaionweight = document.getElementById('maintaionweight');
                          maintaionweight.style.visibility = 'collapse';
                          
                       } else {
                       
                          var bmrRow = document.getElementById('bmrRow');
                          bmrRow.style.visibility = 'collapse';
  
                          var maintaionweight = document.getElementById('maintaionweight');
                          maintaionweight.style.visibility = 'visible';
                       }
  
                      if (ele[i].value === 'Kilojoules' && activityLevel == "2" ) {
                          var lightcalories = Kilojouleslightresult(age.value, heightCM, weightKg, gender.value);
                          var formattedLightCalories = new Intl.NumberFormat().format(Math.round(lightcalories));
                          MaintainwOutput.textContent = formattedLightCalories + ' kJ/day';
                      }
                      if (ele[i].value === 'Kilojoules' && activityLevel == "3" ) {
                          var lightcalories = KilojoulesSedentaryresult(age.value, heightCM, weightKg, gender.value);
                          var formattedLightCalories = new Intl.NumberFormat().format(Math.round(lightcalories));
                          MaintainwOutput.textContent = formattedLightCalories + ' kJ/day';
                      }
                      if (ele[i].value === 'Kilojoules' && activityLevel == "4" ) {
                          var lightcalories = KilojoulesModerateResult(age.value, heightCM, weightKg, gender.value);
                          var formattedLightCalories = new Intl.NumberFormat().format(Math.round(lightcalories));
                          MaintainwOutput.textContent = formattedLightCalories + ' kJ/day';
                      }
                      if (ele[i].value === 'Kilojoules' && activityLevel == "5" ) {
                          var lightcalories = KilojoulesActiveResult(age.value, heightCM, weightKg, gender.value);
                          var formattedLightCalories = new Intl.NumberFormat().format(Math.round(lightcalories));
                          MaintainwOutput.textContent = formattedLightCalories + ' kJ/day  (Active)';
                      }
                      if (ele[i].value === 'Kilojoules' && activityLevel == "6" ) {
                          var lightcalories = KilojoulesveryActiveResult(age.value, heightCM, weightKg, gender.value);
                          var formattedLightCalories = new Intl.NumberFormat().format(Math.round(lightcalories));
                          MaintainwOutput.textContent = formattedLightCalories + ' kJ/day';
                      }
                      if (ele[i].value === 'Kilojoules' && activityLevel == "7" ) {
                          var lightcalories = KilojouleextraActiveResult(age.value, heightCM, weightKg, gender.value);
                          var formattedLightCalories = new Intl.NumberFormat().format(Math.round(lightcalories));
                          MaintainwOutput.textContent = formattedLightCalories + ' kJ/day';
                      }
                      if (ele[i].value === 'Calories') 
                      {
                          const  activityLevel = document.getElementById('cactivity').value;
                          if (activityLevel == "2") {
                              var lightcalories = LightExercisebmrresult(age.value, heightCM, weightKg, gender.value);
                              var formattedLightCalories = new Intl.NumberFormat().format(Math.round(lightcalories));
                              MaintainwOutput.textContent = formattedLightCalories + ' Calories/day';
                          }
                          if (activityLevel == "1") {
                          var calories = Caloriesbmrresult(age.value, heightCM, weightKg, gender.value);
                          var formattedCalories = new Intl.NumberFormat().format(Math.round(calories));
                          bmrOutput.textContent = formattedCalories + ' Calories/day';
                         //bmr hide show on click 
  
                         var maintaionweight = document.getElementById('maintaionweight');
                              maintaionweight.style.visibility = 'collapse';
                             var bmrRow = document.getElementById('bmrRow');
                             bmrRow.style.visibility = 'visible';
                          }
                       else {
                          var bmrRow = document.getElementById('bmrRow');
                          bmrRow.style.visibility = 'collapse';
  
                          var maintaionweight = document.getElementById('maintaionweight');
                          maintaionweight.style.visibility = 'visible';
                          }
          
                          if (activityLevel == "3") {
                              var lightExerciseCalories = Sedentaryresult(age.value, heightCM, weightKg, gender.value);
                              var formattedLightExerciseCalories = new Intl.NumberFormat().format(Math.round(lightExerciseCalories));
                              MaintainwOutput.textContent = formattedLightExerciseCalories + ' Calories/day';
                          }
                          if (activityLevel =="4") {
                              var lightExerciseCalories = Moderateresult(age.value, heightCM, weightKg, gender.value);
                              var formattedLightExerciseCalories = new Intl.NumberFormat().format(Math.round(lightExerciseCalories));
                              MaintainwOutput.textContent = formattedLightExerciseCalories + ' Calories/day';
                          }
                          if (activityLevel == "5") {
                              var lightExerciseCalories = Activeresult(age.value, heightCM, weightKg, gender.value);
                              var formattedLightExerciseCalories = new Intl.NumberFormat().format(Math.round(lightExerciseCalories));
                              MaintainwOutput.textContent = formattedLightExerciseCalories + ' Calories/day';
                          }
                          if (activityLevel == "6") {
                              var lightExerciseCalories = veryActiveresult(age.value, heightCM, weightKg, gender.value);
                              var formattedLightExerciseCalories = new Intl.NumberFormat().format(Math.round(lightExerciseCalories));
                              MaintainwOutput.textContent = formattedLightExerciseCalories + ' Calories/day';
                          }
                          if (activityLevel == "7") {
                              var lightExerciseCalories = extraActiveResult(age.value, heightCM, weightKg, gender.value);
                              var formattedLightExerciseCalories = new Intl.NumberFormat().format(Math.round(lightExerciseCalories));
                              MaintainwOutput.textContent = formattedLightExerciseCalories + ' Calories/day';
                          }
                      }
                  }
              }
          });
          const activityLevel = document.getElementById('cactivity').value;
  
          function extraActiveResult(age, heightCM, weightKg, gender) 
          {
              var ageInput = parseFloat(age);
              let bmr = 0;
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') 
              {
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageInput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageInput) + 5;
                  }
              }else
              {
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);                
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';                
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageInput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageInput) + 5;
                  }
              }
              const dailyCalories = (bmr * 1.9).toFixed(2);
              return parseFloat(dailyCalories);
          }
  
          function KilojouleextraActiveResult(age, heightCM, weightKg, gender) 
          {
              var ageinput = parseFloat(age);
              let kilojoules = 0;
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') 
              {
                  if (gender === 'female') 
                  {
                      kilojoules = (((10 * weightKg) + (13.70 * heightCM) - (5 * ageinput) - 161) * 4.185); // Convert from Calories to Kilojoules
                  } 
                  else 
                  {
                      kilojoules = (((10 * weightKg) + (14.54 * heightCM) - (5 * ageinput) + 5) * 4.184); // Convert from Calories to Kilojoules
                  }
                  const kilojoulesResult = kilojoules.toFixed(2);  // Round to two decimal places
                  return parseFloat(kilojoulesResult);
              }
              else
              {
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  let bmr = 0;
                  if (gender === 'female') 
                  {
                      kilojoules = (((10 * weightKg) + (14.40 * heightCM) - (5 * ageinput) - 161) * 4.185); // Convert from Calories to Kilojoules
                  } else 
                  {
                      kilojoules = (((10 * weightKg) + (15.06* heightCM) - (5 * ageinput) + 5) * 4.185); // Convert from Calories to Kilojoules
                  }
                  const kilojoulesResult = kilojoules.toFixed(2);  // Round to two decimal places
                  return parseFloat(kilojoulesResult);
              }
          }
  
          // Very Active: intense exercise 6-7 times/week
          function veryActiveresult(age, heightCM, weightKg, gender) {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id ==='metricUnitTab') 
              {
                  let bmr = 0;
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.25* heightCM) - (5 * ageinput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) + 5.11;
                  }
                  const dailyCalories = (bmr * 1.725).toFixed(2);  // Round to two decimal places
                  return parseFloat(dailyCalories);
              }
              else
              {
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  let bmr = 0;
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.25* heightCM) - (5 * ageinput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) + 5.11;
                  }
                  const dailyCalories = (bmr * 1.725).toFixed(2);  // Round to two decimal places
                  return parseFloat(dailyCalories);
              }
          }
  
          function KilojoulesveryActiveResult(age, heightCM, weightKg, gender) {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') {
                  let kilojoules = 0;
                  if (gender === 'female') {
                      kilojoules = (((10 * weightKg) + (12.26 * heightCM) - (5 * ageinput) - 161) * 4.184); // Convert from Calories to Kilojoules
                  } else {
                      kilojoules = (((10 * weightKg) + (12.93 * heightCM) - (5 * ageinput) + 5) * 4.183); // Convert from Calories to Kilojoules
                  }
                  const kilojoulesResult = kilojoules.toFixed(2);  // Round to two decimal places
                  return parseFloat(kilojoulesResult);
              }
              else{
                      let feetVal = parseFloat(document.getElementById('feet').value);
                      let inchesVal = parseFloat(document.getElementById('inches').value);
                      let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);
                      document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                      document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';
                      heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                      weightKg = 0.45359237 * weightPoundsVal;
                      let kilojoules = 0;
                  if (gender === 'female') 
                  {
                      kilojoules = (((10 * weightKg) + (12.83 * heightCM) - (5 * ageinput) - 161) * 4.183); // Convert from Calories to Kilojoules
                  } else {
                      kilojoules = (((10 * weightKg) + (13.56 * heightCM) - (5 * ageinput) + 5) * 4.183); // Convert from Calories to Kilojoules
                  }
                  const kilojoulesResult = kilojoules.toFixed(2);  // Round to two decimal places
                  return parseFloat(kilojoulesResult);
              }
          }
  
          // Active: daily exercise or intense exercise 3-4 times/week
          function Activeresult(age, heightCM, weightKg, gender) {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') 
              {
                  let bmr = 0;
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.24 * heightCM) - (5 * ageinput) + 4.98;
                  }
                  const dailyCalories = (bmr * 1.55).toFixed(2);  // Round to two decimal places
                  return parseFloat(dailyCalories);
              }
              else
              {
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);                
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';                
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  let bmr = 0;
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) + 4.99;
                  }
                  const dailyCalories = (bmr * 1.55).toFixed(2);  // Round to two decimal places
                  return parseFloat(dailyCalories);
              }
          }
  
          // Active: daily exercise or intense exercise 3-4 times/week Kilojoules
          function KilojoulesActiveResult(age, heightCM, weightKg, gender) 
          {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') {
                  let kilojoules = 0;
                  if (gender === 'female') {
                      kilojoules = ((10 * weightKg) + (6.49 * heightCM) - (5 * ageinput) - 161) * 6.52;
                  } else {
                      kilojoules = ((10 * weightKg) + (6.39 * heightCM) - (5 * ageinput) + 5) * 6.39;
                  }
                  const kilojoulesResult = kilojoules.toFixed(2);  // Round to two decimal places
                  return parseFloat(kilojoulesResult);
              }
              else
              {
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  let kilojoules = 0;
                  if (gender === 'female') {
                      kilojoules = ((10 * weightKg) + (6.22 * heightCM) - (5 * ageinput) - 161) * 6.51;
                  } else {
                      kilojoules = ((10 * weightKg) + (6.39 * heightCM) - (5 * ageinput) + 5) * 6.40;
                  }
                  const kilojoulesResult = kilojoules.toFixed(2);  // Round to two decimal places
                  return parseFloat(kilojoulesResult);
              }
          }
  
          // Moderate: exercise 4-5 times/week
          function Moderateresult(age, heightCM, weightKg, gender) 
          {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') {
                  let bmr = 0;
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.80 * heightCM) - (5 * ageinput) - 162;
                  } else {
                      bmr = (10 * weightKg) + (6.85 * heightCM) - (5 * ageinput) + 5;
                  }
                  return bmr * 1.375;  // Multiply by activity factor for sedentary lifestyle
              }
              else
              {
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);                    
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';                    
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  let bmr = 0;
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.84 * heightCM) - (5 * ageinput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.91 * heightCM) - (5 * ageinput) + 5;
                  }
                  return bmr * 1.375;
              }
          }
          // Moderate: exercise 4-5 times/week Kilojoules
          function KilojoulesModerateResult(age, heightCM, weightKg, gender) {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') 
              {
                  let kilojoules = 0;
                  if (gender === 'female') {
                      kilojoules = ((10 * weightKg) + (6.13 * heightCM) - (5 * ageinput) - 161) * 5.10; // Formula for females
                  } else {
                      kilojoules = ((10 * weightKg) + (6.47 * heightCM) - (5 * ageinput) + 5) * 5.99; // Formula for males
                  }
                  return kilojoules;
              }
              else
              {
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);                
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';                
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  let kilojoules = 0;
                  if (gender === 'female') {
                      kilojoules = ((10 * weightKg) + (8.06 * heightCM) - (5 * ageinput) - 161) * 5.11; // Formula for females
                  } else {
                      kilojoules = ((10 * weightKg) + (6.49 * heightCM) - (5 * ageinput) + 5) * 5.99; // Formula for males
                  }
                  return kilojoules;
              }
          }
  
          // Sedentary: little or no exercise
          function Sedentaryresult(age, heightCM, weightKg, gender) 
          {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') 
              {
                  let bmr = 0;
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) + 5;
                  }
                  return bmr * 1.2;
              }
              else
              {
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);            
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';            
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  let bmr = 0;
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) + 5;
                  }
                  return bmr * 1.2;
              }
          }
  
          // Sedentary: little or no exercise  Kilojoules
          function KilojoulesSedentaryresult(age, heightCM, weightKg, gender) {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') {
                  let kilojoules = 0;
                  if (gender === 'female') {
                      kilojoules = ((10 * weightKg) + (6.13 * heightCM) - (5 * ageinput) - 161) * 5.10; // Formula for females
                  } else {
                      kilojoules = ((10 * weightKg) + (6.26 * heightCM) - (5 * ageinput) + 5) * 5.02; // Formula for males
                  }
                  return kilojoules;
              }else{
                  let feetVal = parseFloat(document.getElementById('feet').value);
                      let inchesVal = parseFloat(document.getElementById('inches').value);
                      let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);
                      document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                      document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';            
                      heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                      weightKg = 0.45359237 * weightPoundsVal;
  
                      let kilojoules = 0;
                  if (gender === 'female') {
                      kilojoules = ((10 * weightKg) + (6.10 * heightCM) - (5 * ageinput) - 161) * 5.11; // Formula for females
                  } else {
                      kilojoules = ((10 * weightKg) + (6.30 * heightCM) - (5 * ageinput) + 5) * 5.0; // Formula for males
                  }
                  return kilojoules;
              }
          }
          // Light: exercise 1-3 times/week
          function LightExercisebmrresult(age, heightCM, weightKg, gender) 
          {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') {
                  let bmr = 0;
                  if (gender === 'female') {
                      bmr = (10 * weightKg) + (6.24 * heightCM) - (5 * ageinput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) + 5;
                  }
                  return bmr * 1.375; // Multiply by activity factor for light exercise
              }
              else
              {
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);                
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  let bmr = 0;
                  if (gender === 'female') 
                  {
                      bmr = (10 * weightKg) + (6.24 * heightCM) - (5 * ageinput) - 161;
                  } else {
                      bmr = (10 * weightKg) + (6.25 * heightCM) - (5 * ageinput) + 5;
                  }
                  return bmr * 1.375; // Multiply by activity factor for light exercise
              }
          }
          
          // Light: exercise 1-3 times/week  Kilojoules
          function Kilojouleslightresult(age, heightCM, weightKg, gender) {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') 
              {
                  let kilojoules = 0;
  
                  if (gender === 'female') {
                      kilojoules = (10 * weightKg + 6.25 * heightCM - 5 * ageinput - 161) * 5.750; // Formula for females
                  } else {
                      kilojoules = (10 * weightKg + 6.28 * heightCM - 5 * ageinput + 5) * 5.74; // Formula for males
                  }
                  return kilojoules;
              }
              else{
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);                
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';                
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  let kilojoules = 0;
                  if (gender === 'female') {
                      kilojoules = (10 * weightKg + 6.26 * heightCM - 5 * ageinput - 161) * 5.750; // Formula for females
                  } else {
                      kilojoules = (10 * weightKg + 6.28* heightCM - 5 * ageinput + 5) * 5.740; // Formula for males
                  }
                  return kilojoules;
              }    
          }
  
          //Basal Metabolic Rate (BMR)
          function Caloriesbmrresult(age, heightCM, weightKg, gender) {
              var ageinput = parseFloat(age);
              const activeTab = document.querySelector('.active-tab');
              if (activeTab && activeTab.id === 'metricUnitTab') {
                  let calories = 0;
                  if (gender === 'female') {
                      calories = 10 * weightKg + 6.25 * heightCM - 5 * ageinput - 161;
                  } else {
                      calories = 10 * weightKg + 6.39 * heightCM - 5 * ageinput + 5;
                  }
                  return calories;
              }
              else{
                  let feetVal = parseFloat(document.getElementById('feet').value);
                  let inchesVal = parseFloat(document.getElementById('inches').value);
                  let weightPoundsVal = parseFloat(document.getElementById('weightpounds').value);                
                  document.getElementById('heightOutput').textContent = feetVal + ' feet ' + inchesVal + ' inches ';
                  document.getElementById('weightOutput').textContent = weightPoundsVal + ' pounds ';        
                  heightCM = (2.54 * inchesVal) + (30.48 * feetVal);
                  weightKg = 0.45359237 * weightPoundsVal;
                  let calories = 0;
                  if (gender === 'female') {
                      calories = 10 * weightKg + 6.24 * heightCM - 5 * ageinput - 161;
                  } else {
                      calories = 10 * weightKg + 6.23 * heightCM - 5 * ageinput + 8;
                  }
                  return calories;
              }
          }
  
          //Basal Metabolic Rate (BMR)Kilojoules
          function Kilojoulesbmrresult(age, heightCM, weightKg, gender) {
              var ageinput = parseFloat(age);
              let kilojoules = 0;
              if (gender === 'female') {
                  kilojoules = (10.0 * weightKg + 6.25 * heightCM - 5 * ageinput - 161) * 4.186; // Formula for females
              } else {
                  kilojoules = (10.0 * weightKg + 6.25 * heightCM - 5 * ageinput + 5) * 4.186; // Formula for males
              }
              return kilojoules;
          }
  
          document.addEventListener('DOMContentLoaded', function() {
              var initialBMR = 1660; // Set the initial BMR value in Calories
              var formattedBMR = new Intl.NumberFormat().format(initialBMR); // Format the BMR value with commas
              var bmrOutput = document.getElementById('bmrOutput');
              bmrOutput.textContent = formattedBMR + ' Calories/day';
          }); 
          
          // Age Validation 
          document.getElementById('ageinput').addEventListener('input', function() {
              var age = this.value;
              var ageValidationElement = document.getElementById('ageValidation');
              if (age < 15 || age > 80) {
                  ageValidationElement.textContent = 'Age must be between 15 and 80 years.';
              } else {
                  ageValidationElement.textContent = '';
              }
          });
                    // Event listener for the US Unit tab
            document.getElementById('usUnitTab').addEventListener('click', function (e) {
                e.preventDefault();
                document.getElementById('usUnitTab').classList.add('active');
                document.getElementById('metricUnitTab').classList.remove('active');
                document.getElementById('usUnits').style.display = 'block';
                document.getElementById('metricUnits').style.display = 'none';
            });

            // Event listener for the Metric Unit tab
            document.getElementById('metricUnitTab').addEventListener('click', function (e) {
                e.preventDefault();
                document.getElementById('metricUnitTab').classList.add('active');
                document.getElementById('usUnitTab').classList.remove('active');
                document.getElementById('usUnits').style.display = 'none';
                document.getElementById('metricUnits').style.display = 'block';
            });