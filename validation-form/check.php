<?php
    $data = $_POST;
    if (isset($data['do_signup'])) {

        $erorrs = array();
        if (trim($data['email']) == ''){
            $errors[] = 'Enter your email!';
        }

        if ($data['password'] == ''){
            $errors[] = 'Enter your password!';
        }

        if ($data['cpassword'] != $data['password']){
            $errors[] = 'The repeated password was entered incorrectly!';
        }
        
        if (empty($errors)) {

            $email = filter_var(trim($_POST['email']),
            FILTER_SANITIZE_STRING);
            $password = filter_var(trim($_POST['password']),
            FILTER_SANITIZE_STRING);
            $cpassword = filter_var(trim($_POST['cpassword']),
            FILTER_SANITIZE_STRING);

            $password = md5($password."zxczxczxc");

            require "../blocks/connects.php";
            $mysql->query("INSERT INTO `users` (`email`, `pass`) VALUES('$email', '$password')");

            $mysql->close();
            header('Location: ../index2.php');
        } else {
            header('Location: ../index2.php');
            //$data['err_signup'] = '.array_shift($errors).';
        }

        /*if (mb_strlen($email) < 5 || mb_strlen($email) > 90){
            echo "ERROR";
            exit();
        } else if (mb_strlen($password) < 3 || mb_strlen($password) > 50){
            echo "ERROR";
            exit();
        } else if (mb_strlen($cpassword) < 3 || mb_strlen($cpassword) > 50){
            echo "ERROR";
            exit();
        } else if ($cpassword != $password){
            echo "ERROR";
            exit();
        }*/
    }

?>