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
            header('Location: ../indexManager.html');
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