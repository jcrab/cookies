<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // if remember checked set cookie
        $user = $_POST['name'];
        $pwd = $_POST['pwd'];
        
        if ($pwd == "bar") {
            echo "Welcome $user";
        } else {
            echo "bad username or password";
        }
        
        ?>
    </body>
</html>
