<?php
    $data = $_POST;
    if (isset($data['do_signup'])) {

        $erorrs = array();
        if (trim($data['email']) == '' || mb_strlen(trim($data['email'])) < 5 || mb_strlen(trim($data['email'])) > 90){
            $errors[] = 'EMAIL ERROR';
        }

        if ($data['password'] == '' || mb_strlen($data['password']) < 3 || mb_strlen($data['password']) > 50){
            $errors[] = 'PASSWORD ERROR';
        }

        if ($data['fullname'] == '' || mb_strlen($data['fullname']) < 5 || mb_strlen($data['fullname']) > 90){
            $errors[] = 'FULLNAME ERROR';
        }

        if ($data['phonenumber'] == '' || mb_strlen($data['phonenumber']) < 3 || mb_strlen($data['phonenumber']) > 50){
            $errors[] = 'PHONE NUMBER ERROR';
        }
        
        if (empty($errors)) {
            $email = filter_var(trim($_POST['email']),
            FILTER_SANITIZE_STRING);
            $password = filter_var(trim($_POST['password']),
            FILTER_SANITIZE_STRING);
            $fullname = filter_var(($_POST['fullname']),
            FILTER_SANITIZE_STRING);
            $phonenumber = filter_var(trim($_POST['phonenumber']),
            FILTER_SANITIZE_STRING);

            $password = md5($password."zxczxczxc");

            require "../blocks/connects.php";
            $mysql->query("INSERT INTO `user_customer` (`email`, `password`, `full_name`, `phone_number`) VALUES('$email', '$password', '$fullname', '$phonenumber')");

            $mysql->close();
            header('Location: ../indexCustomer.html');
        } else {
            $err = array_shift($errors);
            echo '<script language="javascript">';
            echo 'alert("';
            echo $err;
            echo '")';
            echo '</script>';
        }
    }

?>