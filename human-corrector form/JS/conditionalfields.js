$(document).ready(function(){
    
    $('#choice').change(function () {
 
     var selected = $('#choice option:selected').text();
       if(selected == "All")
             $('#sentence_relationship, #word_insight, #paragraph_analyze').show();
       else{
        $('#sentence_relationship').toggle(selected == "Sentences");
        $('#word_insight').toggle(selected == "Words");
        $('#paragraph_analyze').toggle(selected == "Paragraph");
      }
       
    });
    
    });