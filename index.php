<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>The first PHP Project</title>
    </head>
    <body>
        <h1>Form for Name</h1>
        <form method="GET" action="index.php" name="name">
            <input type="text" name="name" />
            <input type="submit" />
        </form>
       <?php
         include 'site.php';
       ?>
    </body>
</html>
