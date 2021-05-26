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

/*var mysql = require('mysql')
var connection = mysql.createConnection({
  host: 'localhost',
  user: 'dbuser',
  password: 's3kreee7',
  database: 'my_db'
})

connection.connect()

connection.query('SELECT 1 + 1 AS solution', function (err, rows, fields) {
  if (err) throw err

  console.log('The solution is: ', rows[0].solution)
})

connection.end()*/