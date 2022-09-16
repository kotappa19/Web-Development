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
                <a class="navbar-brand" href="employee.html"><h4 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">Dashboard</h4> </a>
              <center style="color: white;"><h4 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" >KattyGems Creations</h4></center>
              <a class="navbar-brand" href="HomePage.html"><h4 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;" s>Home</h4> </a>
            </div>
      </nav><br>
      <center><h2 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif" >Students Details</h2></center>

      <table class="table table-dark table-striped" id="table-properties">
        <tr>
            <th>Employee No</th>
            <th>Employee Name</th>
            <th>Salary</th>
            <th>DA</th>            
            <th>HRA</th>
            <th>MA</th>
            <th>Insurance</th>
            <th>Net Salary</th>
        </tr>
<?php
      $severname = "localhost";
      $username = "root";
      $password = "";
      $database = "employee";
      $conn = mysqli_connect($severname,$username,$password,$database);
      if($conn === false){
          die("Connection failed: " . mysqli_connect_error());
      }

    $sql = "SELECT * FROM emp";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){ 
            $salary = $row['esalary'];
            $da=(80*$salary)/100;
            $hra=(15*$salary)/100;
            $ma = (12*$salary)/100;
            $insurance=(10*$salary)/100;
            $netsalary = ($salary+$hra+$ma-$insurance);
?>
   <tr>
        <td id="table-properties"><?php echo $row['empno'];?></td>
        <td id="table-properties"><?php echo $row['ename'];?></td>
        <td id="table-properties"><?php echo $row['esalary'];?></td>
        <td id="table-properties"><?php echo $da;?></td>
        <td id="table-properties"><?php echo $hra;?></td>
        <td id="table-properties"><?php echo $ma;?></td>
        <td id="table-properties"><?php echo $insurance;?></td>
        <td id="table-properties"><?php echo $netsalary;?></td>
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