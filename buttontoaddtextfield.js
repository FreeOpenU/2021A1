$(document).ready(function(){
$("#add1").on("click", function(){
  var new_chq_no = parseInt($('#total_chq').val()) + 1;
  var new_input = "<input  id='statement_" + new_chq_no + "field' name='statement_" + new_chq_no +"field' type='text' class='form-control' value='default value'>";
  $("#new_chq").append(new_input);
});

$("#add2").on("click", function(){
  var new_word_no = parseInt($('#total_wrd').val()) + 1;
  var word_input = "<input  id='word_" + new_word_no + "field' name='word_" + new_word_no +"field' type='text' class='form-control' value='default value'>";
  $("#new_wrd").append(word_input);
});

$("#add3").on("click", function(){
    var new_tone_no = parseInt($('#total_tone').val()) + 1;
    var tone_input = "<input  id='tone_" + new_tone_no + "field' name='tone_" + new_tone_no +"field' type='text' class='form-control' value='default value'>";
    $("#new_tone").append(tone_input);
  });

  $("#add4").on("click", function(){
    var new_diction_no = parseInt($('#total_diction').val()) + 1;
    var diction_input = "<input  id='tone_" + new_diction_no + "field' name='tone_" + new_diction_no +"field' type='text' class='form-control' value='default value'>";
    $("#new_diction").append(diction_input);
  });

});

