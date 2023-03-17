
const dateDiv = document.getElementById("time");

function myDateFunction() {
  const now = new Date();
  const nowStr = now.toLocaleString('lv-EU');
  dateDiv.innerHTML = nowStr;
}
setInterval(myDateFunction, 1000);


const express = require('express');
const app = express();
const {Pool} = require('pg');
  
// Get request
app.get('/', function (req, res) {
  
    // Config your database credential
    const pool = new pg.Pool({
        user: 'ALEX',
        password: 'Lolesha161204',
        host: 'localhost',
        port: 5432,
        database: 'teachers'
    })
  
    // Connect to your database
    pool.connect(config, function (err) {
  
        // Create Request object to preform
        // query operation
        var request = new pool.Request();
  
        // Query to the database and get the records
        request.query('select * from products',
            function (err, records) {
  
                if (err) console.log(err)
  
                // Send records as a response
                // to browser
                res.send(records);
  
            });
    });
});
  
var server = app.listen(5000, function () {
    console.log('Server is listening at port 5000...');
});