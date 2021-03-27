<?php
    require 'db_connect.php';

    if(isset($_POST['login']))
    {
        //get form values
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);

        //check if user exist in database
        $user_validate = mysqli_query(
            $route , "SELECT * FROM `users` WHERE `username` = '$username'"
        );

        if (mysqli_num_rows($user_validate) > 0)
        {
            $user_result = mysqli_fetch_assoc($user_validate);
            $db_password = $user_result['password'];

            if (password_verify($password, $db_password))
            {
                session_start();
                $_SESSION['username'] = $user_result['username'];
                $_SESSION['user_id'] = $user_result['id'];

                $_SESSION['login'] = true;
                header("Location:../home/");
            }
            else
            {
                echo 'Password Invalid';
            }


        }
        else
        {
            die("No User");
        }
    }
