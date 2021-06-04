var clicked = false
var btnSubmit = document.getElementById("submit");
btnSubmit.disabled = true;
let btn_nlp = document.querySelector('#nlp');
btn_nlp.addEventListener("click", function () {
    clicked = true;
    document.querySelector('#result').value = "NLP result";
    btnSubmit.disabled = false;
})