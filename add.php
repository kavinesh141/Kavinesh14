<?PHP
include "connect.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
      $name=$_POST["name"];
      $age=$_POST["age"];
      $email=$_POST["email"];
      $num=$_POST["no2"];

      $query="INSERT INTO STUDENTS(studentname, age, email, contact)  VALUES('$name', $age, '$email', '$num')";
       if($connect->query($query) === TRUE){
            echo "<h1>student added<h1>";
       } else{
            die("connection to server failed");
       };
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add students</title>
      <link rel="stylesheet" href="ui.css">
</head>
<body class="b1">
      <div class="f1">
      <form method="post">
           <div class="d1"> Name:</div>
            <input type="text" name="name" id="i1" required>
            <div class="d1">Age:</div>
            <input type="number" name="age" id="i1" required>
            <div class="d1">Email:</div>
            <input type="email" name="email" id="i1" required>
            <div class="d1">Contact:</div>
            <input type="number" name="no2" id="i1" required>
            <button type="submit" class="submit">Submit</button>
      </form>
      </div>
</body>
</html>