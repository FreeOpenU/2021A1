var clicked = false
let btn = document.querySelector('#nlp');
btn.addEventListener("click", function () {
    clicked = true;
    document.querySelector('#result').value = "NLP result";
})


let btnS = document.querySelector('#submit');
btnS.addEventListener("click", function () {
    if (clicked == false){
        alert("Please check the NLP result first.")
    }
})