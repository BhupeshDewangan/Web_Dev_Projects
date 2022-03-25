<?php
// AUTO LOGIN

$insert = false;
if(isset($_POST['name'])){
    // SET CONNECTION VARIABLE
    $server = "localhost";
    $username = "root";
    $password = "";

    // CREATE A DB CONNECTION
    $con = mysqli_connect($server, $username, $password);

    if (!$con){

        die ("connection to this database failed due to" . mysqli_connect_error());
    }

    // echo "succesfully connected to DB";

    // COLLECT POST VARIABLE

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = " INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

    // echo $sql;

    // EXECUTE THE QUERY

    if ($con->query($sql) == true){
        // echo "Successfully inserted";

        // FLAG FOR SUCCESSFULLY INSERTED
        $insert = true;

    }

    else {
        echo "ERROR: $sql <br> $con->error";
        //$not_insert = true;
    }

    // CLOSE THE DB CONNECTION
    $con -> close();

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <img class="bg" src="img104.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>


        <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?>


        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button type="submit" class="btn" onclick = myFuction()>Submit</button> 
            <script>
                function myFunction() {
              alert("I am an alert box!");
            }
            </script>
        </form>
        
    </div>    
</body>
</html>