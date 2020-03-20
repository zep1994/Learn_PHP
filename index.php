<?php
    include './data/db.php';
    
     if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
            
            $query = "INSERT INTO users(username, email, password) ";
            $query .= "VALUES ('$username', '$email', '$password')";
            
            $result = mysqli_query($conn, $query);
            
            if (!$result) {
                die('query failed');
            }        
                    
        if($username && $email && $password) {
            echo $username;
            echo $email;
            echo $password;
        } else {
            echo "All Values are required";
        }
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body> 
        <div class="container">
            <div class="col-xs-6">
                <form action="index.php" method="POST" class="form-group">
                    <label for="username" class="form"/>Username:</label>
                    <input type="text" name="username" class="form-control"/>

                    <label for="email" class="form"/>E-Mail</label>
                    <input type="text" name="email" class="form-control" />

                    <label for="password" class="form"/>Password</label>
                    <input type="password" name="password" class="form-control" />   

                    <input type="submit" name="submit" class="btn btn-primary" />
                </form>
                
                 <?php 
                    
                ?>
            </div>
        </div>
    </body>
</html>