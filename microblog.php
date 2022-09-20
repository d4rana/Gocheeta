<html>
    <head>
        <meta charset="UTF-8">
        <link href="microblog.css" rel="stylesheet" type="text/css"/>
        <title>Micro Blog</title>
        
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
        $server_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "user";
        $conn = new mysqli($server_name, $user_name, $password, $db_name);
        if ($conn->connect_error) {
            die("Error connecting to the database");
        }
        $sql_cmd = "SELECT * FROM microblog";
        $result = $conn->query($sql_cmd);
        
        while ($row = $result->fetch_assoc()) {
            echo $row["blogid"] . "<br>";
            echo "<img src = '" . $row["imageurl"] . "' width='200px' /> <br>";
            echo $row["blogtext"] . "<br>";
           
        }
        
        ?>
        
    </body>
    
</html>