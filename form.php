<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>database</title>
</head>
<body>

  <style>
    form{
      position: absolute;
      top: 20%;
      left: 20%;
      width: 250px;
      height: 500px;
      gap: 10px;
      background-color: grey;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    form input{
      width: 80%;
      height: 30px;
    }
  </style>
  
  <h1>Hardik's Database</h1>
  <form method="POST">
    Name <input type="text" name="Name">
    Email <input type="text" name="Email">
    Gender <input type="text" name="Gender">
    Number <input type="text" name="Number">
    Hobby <input type="text" name="Hobby">
    <input type="submit" value="Submit" name="submit">
  </form>

  <?php 
    $con = mysqli_connect('localhost','root','','details');

    if(isset($_POST['submit'])){
      $name = $_POST['Name'];
      $email = $_POST['Email'];
      $gender = $_POST['Gender'];
      $number = $_POST['Number'];
      $hobby = $_POST['Hobby'];

      $query = "INSERT INTO data(Name,Email,Gender,Number,Hobby) values('$name','$email','$gender','$number','$hobby')";

      $run = mysqli_query($con,$query);

    }
  ?>

</body>
</html>