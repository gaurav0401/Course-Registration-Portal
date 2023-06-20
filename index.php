<?php

$insert=false;

if (isset($_POST['fname'])){
$servername="localhost";
$username="root";
$password="";

$con=mysqli_connect($servername , $username , $password);

// if($con){
//     echo "Connection established successfully";
// }


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$interest=$_POST['interest'];
$phone=$_POST['number'];
$gender=$_POST['gender'];
$emailid=$_POST['emailid'];

$sql="INSERT INTO `student`.`reg` ( `fname`, `lname`, `age`, `interest`, `contact`, `gender`, `email`) VALUES ( '$fname', '$lname', '$age', '$interest', '$phone', '$gender', '$emailid');";


if ($con->query($sql)==true){
    $insert=true;
}
else {

    echo $con->error;
}




$con->close();

}











?>

















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhatt's classes</title>

    <style>
        * {
            margin: 0px;
            padding: auto;
           
        }

        body{
           
             background-image: url("IMG20220524154010.jpg");
             background-size: cover;
             opacity: 0.9;
        }

        .bar1 {

            padding: 25px;
            background-color: black;
            color: whitesmoke;


        }

        .items {
            padding-right: 15px;
            text-decoration: none;
            color: aliceblue;
            font-size: 20px;


        }

        .text1 {

            font-size: 45px;
            position: relative;
            padding-left: 28vw;
            font-family: cursive;
            background-color: black;
            color: white;


        }

        #fname{

            height: 4vh;
            border: 1px solid black;
            border-radius: 4px;
        }

        #lname{
                 
            height: 4vh;
            border: 1px solid black;
            border-radius: 4px;

        }

        #age{
            height: 4vh;
            border: 1px solid black;
            border-radius: 4px;
            width: 12vw;
        }

        #number {
            height: 4vh;
            border: 1px solid black;
            border-radius: 4px;
            width: 13vw;
        }

        #emailid{
            height: 4vh;
            border: 1px solid black;
            border-radius: 4px;
            width: 25vw;
        }

        #gender{
            height: 4vh;
            border: 1px solid black;
            border-radius: 4px;
        }

        #interest{
            height: 4vh;
            border: 1px solid black;
            border-radius: 4px;
        }

        #btn1{

            height: 4vh;
            border: 1px solid black;
            border-radius: 4px;
            width: 5vw;
            position: relative;

            left: 12vw;
        }
        #field1{
            margin-left: 15px;
            margin-right: 55vw;
            margin-top: 30px;
            padding-bottom: 15px;
            background: linear-gradient(130deg , rgb(0, 77, 90) , rgb(38, 43, 70) , rgb(0, 77, 90));
            color: white;
            border:  1px solid rgb(0, 77, 90);
            border-radius: 8px;
            opacity: 0.88;
        }
        .text2{

            color: black;
            font-size: 28px;
            background-color: aliceblue;
            opacity: 0.8;
            padding-left: 30px;
            
        }
    </style>

</head>

<body>
    <nav class="bar1">
        <h3 class="text1">Welcome to Bhatt's Classes</h3>
        <a href="#" class="items">Home</a>
        <a href="#" class="items">About</a>
        <a href="#" class="items">Courses</a>
        <a href="#" class="items">Blog</a>


    </nav>

    <div class="box1">
    <?php
           
           if($insert==true){
             
            echo "<br><br><p class='text2'><b>Thanks for submitting your information.</b></p>";

           }
        
        
        
        ?>

        <form action="index.php" method="post">


            <fieldset id="field1">
                <legend  style="font-size: 20px; color: whitesmoke;">Registration form</legend>
                <br><br>
                <label for="name">First name</label>
                <input type="text" name="fname" id="fname" placeholder="Enter First name">

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="name">Last name</label>
                <input type="text" name="lname" id="lname" placeholder="Enter Last name">
                <br><br>
                <label for="age">Age</label>
                <input type="number" name="age" id="age" placeholder="Enter  your age">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="interest">Choose Area of Interest</label>
                <select name="interest" id="interest">
                    <option value="default">--None--</option>
                    <option value="Machine Learning">Machine Learning</option>
                    <option value="Artificial Intelligence">Artificial Intelligence</option>
                    <option value="Cyber security">Cyber security</option>
                    <option value="Robotics">Robotics</option>


                </select>
                <br><br>


                <label for="number">Contact</label>
                <input type="number" name="number" id="number" placeholder="Enter Phone number">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="gender">Gender</label>
                <select name="gender" id="gender">

                    <option value="M">Male</option>
                    <option value="F">Female</option>

                </select>

                <br>
                <br>
                <label for="emailid">Email</label>
                <input type="email" name="emailid" id="emailid" placeholder="Enter email id">

                <br><br><br>
                <button type="submit" id="btn1">Sign Up</button>

            </fieldset>

        </form>


    </div>

</body>

</html>