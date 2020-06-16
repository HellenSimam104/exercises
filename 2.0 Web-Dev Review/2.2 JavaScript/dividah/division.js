
var number1_element= document.getElementById("num1");
var number2_element= document.getElementById("num2");

function divideThem(){
  //alert('I Have Been Clicked,..Help!');
  var number1 = number1_element.value;
  var number2 =number2_element.value;


  //alert(number1)
  let results =number1/number2;


  var results_h4 = document.getElementById("results");//modifying 
  results_h4.innerText =results ;

}
