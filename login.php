<!DOCTYPE HTML>
<html> 
    <head>
        <title>login page</title>
    </head> 
<body>
    <?php
    // define variables and set to empty valuese
    $email=$psw="";   

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["email"]);
      $email = test_input($_POST["psw"]);
      // $website = test_input($_POST["website"]);
      // $comment = test_input($_POST["comment"]);
      // $gender = test_input($_POST["gender"]);
    }
    
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

</body>
</html>