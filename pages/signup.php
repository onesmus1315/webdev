<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="../main.css">
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/javs.js"></script>
</head>
<body class="signup_body">
<?php
        if ($_SERVER['REQUEST_METHOD']== 'POST')
        {
            $errors=[];
            global $username;
            global $email;
            //getting the user name 
            if(empty($_POST['username']))
            {
                $errors[]='you forgot to enter your username';
            }
            else
            {
                $username = trim($_POST['username']);
            }
            //geting the email
            if(empty($_POST['email']))
            {
                $errors[]='you forgot to enter your email';
            }
            else
            {
                $email = trim($_POST['email']);
            }
            //getting the password and validating it
            if(!empty($_POST['password']))
            {
                if($_POST['password'] !== $_POST['password1'])
                {
                    
                    $errors[]='password did not match';
                }
                else
                {
                    $password = trim($_POST['password']);
                    //validating length of password
                    if(strlen($password)<6)
                    {
                        $errors[]="please enter password that is more than 8 characters long";
                    }
                }
            }
            else
            {
                $errors[]='you forgot to enter you password';
            }
            if(empty($errors))
            {
                require ('dbcon.php');
                $q = "INSERT INTO alluser (pass,username,user_id,registration_date,email)
                VALUES (?,?,0,NOW(),?)";
                $stmt = $dbc->prepare($q);
                $results =$stmt->bind_param("iss",$password,$username,$email);
                $stmt->execute();
                $stmt->close();
                $dbc->close();
                if($results)
                {
                    header('location:login.php');
                }
                else
                {
                    echo 'we are sorry for any inconviniences <br> try again';
                    exit();
                }
            }
            else
            {
                foreach($errors as $message)
                {
                    
                    echo "$message";
                }
            }
        }
?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <fieldset>
            <legend>sign up</legend>
            <input type="text" id="username" name="username" size="30" maxlength="30" required="required" placeholder="username" > <br>
            <input type="text" name="email" id="email" size="30" maxlength="30" placeholder="email" required="required" > <br>
            <input type="password" id="password" name="password" size="30" maxlength="30" required="required" placeholder="password"> <br>
            <input type="password" id="password" name="password1" size="30" maxlength="30" required="required" placeholder="confirm password"> <br>
            <button>create account</button>
        </fieldset>




    </form>
</body>
</html>