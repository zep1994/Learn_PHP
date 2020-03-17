<!DOCTYPE HTML>  
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>  
     <?php include "site.php" ?>
    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
      Name: <input type="text" name="name">
      <span class="error">* <?php echo $nameErr;?></span>
      <br><br>
      E-mail: <input type="text" name="email">
      <span class="error">* <?php echo $emailErr;?></span>
      <br><br>
      Website: <input type="text" name="website">
      <span class="error"><?php echo $websiteErr;?></span>
      <br><br>
      Comment: <textarea name="comment" rows="5" cols="40"></textarea>
      <br><br>
      Gender:
      <input type="radio" name="gender" value="female">Female
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="other">Other
      <span class="error">* <?php echo $genderErr;?></span>
      <br><br>
      <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
    
    <!-- copy right -->
    <footer>
        &copy; 2010-<?php  echo date("Y");?>
    </footer>

    </body>
</html>