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
        .table-parameters{
            border: 1px solid;
            border-color: white;
            padding: 10px;
        }
        .extra-properties{
            justify-content: center;

        }
        #table-properties{
            justify-content: center;
            text-align: center;
        
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
      <center><h2 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" >Students Details</h2></center>

      <table class="table table-dark table-striped" id="table-properties">
        <tr>
            <th>Roll No</th>
            <th>Student Name</th>
            <th>Subject I</th>
            <th>Subject II</th>            
            <th>Subject III</th>
            <th>Subject IV</th>
            <th>Subject V</th>
            <th>Total</th>
            <th>Average</th>
            <th style="border:none;">Result</th>            
        </tr>
<?php
      $severname = "localhost";
      $username = "root";
      $password = "";
      $database = "student";
      $conn = mysqli_connect($severname,$username,$password,$database);
      if($conn === false){
          die("Connection failed: " . mysqli_connect_error());
      }

    $sql = "SELECT * FROM mark";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){ 
            $sb1 = $row['sub1'];
            $sb2 = $row['sub2'];
            $sb3 = $row['sub3'];
            $sb4 = $row['sub4'];
            $sb5 = $row['sub5'];
            $total = $sb1 + $sb2 + $sb3 + $sb4 + $sb5;
            $average =round( $total / 5, 2);
            if($average > 80){
                $class = "Distinction";
            }
            else if($average > 60 and $average < 80){
                $class = "First Class";
            }
            else if($average > 50 and $average < 60){
                $class = "Second Class";
            }
            else{
                $class = "Failed";
            }
?>
   <tr>
        <td id="table-properties"><?php echo $row['rollno'];?></td>
        <td id="table-properties"><?php echo $row['sname'];?></td>
        <td id="table-properties"><?php echo $row['sub1'];?></td>
        <td id="table-properties"><?php echo $row['sub2'];?></td>
        <td id="table-properties"><?php echo $row['sub3'];?></td>
        <td id="table-properties"><?php echo $row['sub4'];?></td>
        <td id="table-properties"><?php echo $row['sub5'];?></td>
        <td id="table-properties"><?php echo $total;?></td>
        <td id="table-properties"><?php echo $average;?></td>
        <td id="table-properties"><?php echo $class;?></td>
    </tr>

<?php
        }
    }
    else{
        echo '<script>
        if(confirm("NO RESULTS FOUND!"))
        {
            self.location="AddStudent.html";
        }
        </script> ';
        exit();
    }
    mysqli_close($conn);
?>
</table>
<footer>
        <span>&#169</span> Copyright 2022 Kotappa Y G
    </footer>
    </body>
    </html>