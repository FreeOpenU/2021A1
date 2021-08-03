var clicked = false
var btnSubmit = document.getElementById("submit");
btnSubmit.disabled = true;
let btn_nlp = document.querySelector('#nlp');
btn_nlp.addEventListener("click", function () {
    clicked = true;

    var statement = document.getElementById("statement").value;
    fetch("http://66.76.242.198:9888/", {
            body: statement,
            headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
            method: "POST"
        }).then(response => response.json()).then(myRes=> {
            console.log(JSON.stringify(myRes.sentences));
            var obj = JSON.stringify(myRes.sentences, undefined, 4)

            document.querySelector('#result').value = obj;
        }
    );
    btnSubmit.disabled = false;
})