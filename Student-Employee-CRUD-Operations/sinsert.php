<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            background: #8e9eab;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #eef2f3, #8e9eab);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #eef2f3, #8e9eab); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            height: 1050px;

        }
        .displayflex{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .displayflex1{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }
        footer{
            background-color: rgb(14, 13, 13);
            width: 100%;
            height: 25px;
            bottom: 0;
            left: 0;
            right: 0;
            position: fixed;
            font-style: normal;
            font-size: large;
            text-align: center;
            color: white;
            
        }
        .container-fluid a:hover{
            border: 1px solid white;
        }
        #border-radius{
            border-radius: 15px;
        }
        ::-webkit-scrollbar{
            display: none;
        }
        #form-parameters{
            width: 35%;
            justify-content: center;
            border-radius: 15px;
            margin-left: 30%;
        }
        #color{
            color: white;
        }
        .form-check-input{
          width: 300px;
          height: 30px;
          border-radius: 10px;
        }
        .form-label{
          color: white;
        }
    </style>
    
</head>
<body>
     
    <nav class="navbar navbar-dark bg-dark" >
        <!-- Navbar content -->
            <div class="container-fluid">
                <a class="navbar-brand" href="student.html"><h4 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Dashboard</h4> </a>
              <center style="color: white;"><h4 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" >KattyGems Creations</h4></center>
              <a class="navbar-brand" href="HomePage.html"><h4 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" s>Home</h4> </a>
            </div>
      </nav><br>
      <div class="navbar navbar-dark bg-dark" id="form-parameters">
<form method="POST" class="was-validated" action="" >
        <center style="color: white;"><h4 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" >Enter the Details</h4></center>
  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Roll Number</label><br>
    <input type="number" class="form-check-input" id="validationFormCheck1" placeholder="Roll Number" name="roll" required>
    <div class="invalid-feedback">
     <center>Please enter a Roll Number.</center> 
    </div><br>
    <label for="validationTextarea" class="form-label">Name</label><br>
    <input type="text"  class="form-check-input" id="validationFormCheck1"  placeholder="Name" name="nam" required>
    <div class="invalid-feedback">
     <center>Please enter a Name.</center> 
    </div><br>
    <label for="validationTextarea" class="form-label">Subject 1</label><br>
    <input type="number" class="form-check-input" id="validationFormCheck1" min="1" max="100" placeholder="Marks" name="s1" required>
    <div class="invalid-feedback">
     <center>Please enter a Marks.</center> 
    </div><br>
    <label for="validationTextarea" class="form-label">Subject 2</label><br>
    <input type="number" class="form-check-input" id="validationFormCheck1" min="1" max="100" placeholder="Marks" name="s2" required>
    <div class="invalid-feedback">
     <center>Please enter a Marks.</center> 
    </div><br>
    <label for="validationTextarea" class="form-label">Subject 3</label><br>
    <input type="number" class="form-check-input" id="validationFormCheck1" min="1" max="100"  placeholder="Marks" name="s3" required>
    <div class="invalid-feedback">
     <center>Please enter a Marks.</center> 
    </div><br>
    <label for="validationTextarea" class="form-label">Subject 4</label><br>
    <input type="number" class="form-check-input" id="validationFormCheck1" min="1" max="100" placeholder="Marks" name="s4" required>
    <div class="invalid-feedback">
     <center>Please enter a Marks.</center> 
    </div><br>
    <label for="validationTextarea" class="form-label">Subject 5</label><br>
    <input type="number" class="form-check-input" id="validationFormCheck1" min="1" max="100" placeholder="Marks" name="s5" required>
    <div class="invalid-feedback">
     <center>Please enter a Marks.</center> 
    </div><br><br>
    <input class="btn btn-primary btn-sm" type="submit" name="submit" value="submit">
    <input class="btn btn-secondary btn-sm" type="reset" name="reset" value="reset" style="margin-left: 180px">

  </div>

  
</form>
      </div>


      <footer>
        <span>&#169</span> Copyright 2022 Kotappa Y G
    </footer>
    </body>
    </html>


    <?php
    $severname = "localhost";
    $username = "root";
    $password = "";
    $database = "student";
    $conn = mysqli_connect($severname,$username,$password,$database);
    if($conn === false){
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['submit']))
    {
        $sroll=$_POST['roll'];
        $snam=$_POST['nam'];
        $sb1=$_POST['s1'];
        $sb2=$_POST['s2'];
        $sb3=$_POST['s3'];
        $sb4=$_POST['s4'];
        $sb5=$_POST['s5'];
        $sql = "INSERT INTO `mark` (`rollno`, `sname`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`) VALUES ('$sroll', '$snam', '$sb1', '$sb2', '$sb3', '$sb4', '$sb5')";
        if (mysqli_query($conn, $sql)) {
            echo '<script>alert("Student details added Successfully")</script>';
    } else {
      echo '<script>alert("Student already Found")</script>';
    }
    }


mysqli_close($conn);

?>
