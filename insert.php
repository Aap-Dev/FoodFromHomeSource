<!DOCTYPE html>
<html>
 
<head>
  
    <title>Post your food</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("db4free.net", "x", "x", "foodshare");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $email =  $_REQUEST['email'];
        $title = $_REQUEST['title'];
        $description =  $_REQUEST['description'];
        $category =  $_REQUEST['category'];
        $date = time();
        $location = $_REQUEST['location'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO food  VALUES ('$email',
            '$title','$description','$category','$date', '$location')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>You posted your food expect an email at this email address:</h3>";
          echo '<a href="index.php">Home</a>';
 
            echo nl2br("\n$email");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 