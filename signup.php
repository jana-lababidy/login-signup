<!DOCTYPE html>
<html lang="en">
<head>
<link rel='stylesheet' href='main.css' >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
</head>
<body>
<?php

include 'config.php';
session_start();

if(isset($_POST['submit'])){

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from HTML form
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$birthday_year = $_POST['birthday_year'] ;
$birthday_month = $_POST['birthday_month'] ;
$birthday_day=$_POST['birthday_day'];
// Insert data into MySQL
$sql = "INSERT INTO users (username, email, password, gender, birthday_year ,birthday_month , birthday_day ) 
VALUES ('$username', '$email', '$password', '$gender', '$birthday_year','$birthday_month','$birthday_day')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
<center> <h1>Welcome!</h1> </center>
    <div>
    <h1>
        Register
    </h1>
<br>
    <form action="#" method="POST">
    <input type="text" name="username" id="username" placeholder="username"><br>
    <input type="email" name="email" id="email" placeholder="email or phone number"><br>
    <input type="password" name="password" id="password" placeholder="password"><br>
    <br>
<h4>Gender</h4>
<select id="gender" title='gender choose male or female'>
<option>Choose</option>
<option>Male</option>
<option>Female</option>
</select>
<br>
<h4>Birthday</h4>
<select aria-label="Year" name="birthday_year" id="year" title="Year" class="_9407 _5dba _9hk6 _8esg">
    <option value="2023" selected="1">2023</option><option value="2022">2022</option><option value="2021">2021</option>
    <option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option>
    <option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option>
    <option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option>
    <option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option>
    <option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option>
    <option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option>
    <option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option>
    <option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option>
    <option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option>
    <option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option></select>
<select aria-label="Month" name="birthday_month" id="month" title="Month" class="_9407 _5dba _9hk6 _8esg"><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4" selected="1">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select>
<select aria-label="Day" name="birthday_day" id="day" title="Day" class="_9407 _5dba _9hk6 _8esg"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5" selected="1">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
<br><br><input type="submit" name="submit" id="submit" value="sign up"><br>
</form>
<h3>or</h3>
<a href="login.php">login</a>
<br>
</div>
</body>
</html>
