
document.getElementById("energyForm").addEventListener("submit", function (e) {
   e.preventDefault(); 
   logUserAction('Energy Calculator Tool');
   var inputValue  = parseFloat(document.getElementById("value").value);
   var inputType   = document.getElementById("type").value;
   var resultType  = document.getElementById("resulttype").value;
   var conversionFactors = {
       "KCAL": { "CAL": 1000, "KJ": 4.184, "J": 4184 },
       "CAL": { "KCAL": 0.001, "KJ": 0.004184, "J": 4.184 },
       "KJ": { "KCAL": 0.239, "CAL": 239, "J": 1000 },
       "J": { "KCAL": 0.000239, "CAL": 0.239, "KJ": 0.001 }
   };
   if (inputType === resultType) {
       document.getElementById("result").textContent = inputValue.toFixed(4);
   } else {
       var result = inputValue * conversionFactors[inputType][resultType];
       document.getElementById("result").textContent = result.toFixed(4);
   }
});
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