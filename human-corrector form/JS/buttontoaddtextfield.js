$(document).ready(function(){
    
  var x = 1; //Initial field counter is 1
  
  //Once add button is clicked
  $('#add1').click(function(){
    var fieldHTML = '<div><input id="statement_field" name="statement_field[]" type="text" class="form-control" value="default value"/>'; //New input field html 
          x++; //Increment field counter
          $('#new_statement').append(fieldHTML); //Add field html
      
  });

   var x = 1; //Initial field counter is 1
  
  //Once add button is clicked
  $('#add2').click(function(){
    var fieldHTML = '<div><input id="wordsyn_field" name="wordsyn_field[]" type="text" class="form-control" value="default value"/>'; //New input field html 
          x++; //Increment field counter
          $('#new_wordsyn').append(fieldHTML); //Add field html
      
   });

   var x = 1; //Initial field counter is 1
  
   //Once add button is clicked
   $('#add3').click(function(){
    var fieldHTML = '<div><input id="diction_field" name="diction_field[]" type="text" class="form-control" value="default value"/>'; //New input field html 
          x++; //Increment field counter
          $('#new_diction').append(fieldHTML); //Add field html
      
   });

   
  var x = 1; //Initial field counter is 1
  
  //Once add button is clicked
  $('#add4').click(function(){
    var fieldHTML = '<div><input id="tone_field" name="tone_field[]" type="text" class="form-control" value="default value"/>'; //New input field html
          x++; //Increment field counter
          $('#new_tone').append(fieldHTML); //Add field html
      
  });
});

