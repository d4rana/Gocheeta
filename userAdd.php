<html>
    <head>
        <meta charset="UTF-8">
        <link href="useradd.css" rel="stylesheet" type="text/css"/>
        <title>Log-in</title>
    </head>
    <body>
        <div class="container header"> 
            <a href="blogmanage.php" class="header-btn">Blog Manage</a> </a>
        <a href="contactus.php" class="header-btn">Contact us</a>
        <a href="microblog.php" class="header-btn">Micro blog</a>
        <a href="userAdd.php" class="header-btn">Login</a>
        <a href="index.php" class="header-btn">Home</a>


    </div>
</body>
<body>
    <?php
    $un = "";
    $pw = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $un = $_POST["uname"];
        $pw = $_POST["password"];
    }
    ?>
    <div class="h1">
        <h1> Login Details </h1>
    </div>
         <form name="useradd" method="post"
          action = "<?php echo $_SERVER["PHP_SELF"] ?>" >
             <div class="profiles"<br>
             <h2> User Name :</h2> <br>
             <input class="profiles" type="text" name="uname"value="<?php echo $un ?>" /><br><br>
            <h2> Password :</h2> <br>
            <input class="profiles" type="password" name="password" value="<?php echo $pw ?>" /><br><br>
            <h2> Role :</h2> <br>
            <select class="profiles" name="role">
                <option>Administrator</option>
                <option>Operator</option>
                <option>User</option>
                <option>Guest</option>
            </select><br><br>
            <input  class="h2" type="submit" value="Submit" />
            <input class="h3" type="reset" value="Reset" />
            
             </div>
        </form>
  
        <?php
        
        if  ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "User name entered : " . $_POST["uname"] . "  <br> <br>";
            echo "Password entered : " . $_POST["password"] . " <br> <br>";
            echo "Role selected : " . $_POST["role"] . " <br> <br>";

            $server_name = "localhost";
            $user_name = "root";
            $password = "";
            $db_name = "user";



            $conn = new mysqli($server_name, $user_name, $password, $db_name);



            if ($conn->connect_error) {
                die("Error connecting to the database");
            }

            $sql_cmd = "INSERT INTO user (uname, password, role) VALUES( '" .
                    $_POST["uname"] . "','" . $_POST["password"] . "','" .
                    $_POST["role"] . "')";

            if ($conn->query($sql_cmd) === TRUE) {
                echo "Data inserted into table <br>";
            } else {
                echo "Error : " . $conn->error;
            }
        }
        ?>
</body>
</html>
