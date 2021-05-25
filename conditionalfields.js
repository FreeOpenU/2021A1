$(document).ready(function(){
    $('#choice_field, #sentence_relationship').show();
    $('#word_insight').hide();
    
    $('#choice').change(function () {
        var selected = $('#choice option:selected').text();
        $('#sentence_relationship').toggle(selected == "Sentence");
        $('#word_insight').toggle(selected == "Word");
    });
    
    });