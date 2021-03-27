<?php
    require 'db_connect.php';

    ##registering
    if (isset($_POST['register']))
    {
        $user = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);
        $con_password = htmlentities($_POST['con_password']);

        ##comfirm password
        if($password !== $con_password)
        {
            die("Password does not match");
        }

        if(strlen($password) < 6)
        {
            die("Short Password");
        }

        $validate_username = mysqli_query(
            $route , "select * from users where username = '$user'"
        );

        $user_count = mysqli_num_rows($validate_username);
        if ($user_count > 0)
        {
            die("user Exist");
        }

        $hash_key = password_hash($password , PASSWORD_DEFAULT);

        $add_user = mysqli_query(
          $route , "INSERT INTO `users` (`username` , `password`) VALUES ('$user' , '$hash_key')"
        );

        if ($add_user === true)
        {
            header("Location:../");
            exit();
        }
        else
        {
            die("Could not add user");
        }

    }
