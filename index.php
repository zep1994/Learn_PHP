<?php
    include './data/db.php';
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
                    <input type="text" name="password" class="form-control" />   

                    <input type="submit" name="submit" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </body>
</html>