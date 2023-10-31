<?php
// post method
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $_SESSION['username'] = "Yahya Mahmud";
    echo "Set User Name with session";

}
// json encode and json decode should practice

// get method
if($_SERVER['REQUEST_METHOD'] == "GET"){
    echo "This is GET method";
}