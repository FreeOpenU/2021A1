var clicked = false
let btn_nlp = document.querySelector('#nlp');
btn_nlp.addEventListener("click", function () {
    clicked = true;
    document.querySelector('#result').value = "NLP result";
})


let btnS = document.querySelector('#submit');
btnS.addEventListener("click", function () {
    if (clicked == false){
        alert("Please check the NLP result first.")
    }
})