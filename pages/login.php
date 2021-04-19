<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
</head>
<body>
    <?php
        //$_GET =array ("usernamelogin"=>" ",'passwordlogin'=>'');
    ?>

    <?php
    $username='';

    //$username = $_GET['usernamelogin'];
    //$password = $_GET['passwordlogin'];
    if ($_SERVER['REQUEST_METHOD']== 'GET')
    {
        if(!empty($_GET['usernamelogin'])&&(!empty($_GET['passwordlogin'])))
        {
            $username = $_GET['usernamelogin'];
            $password = $_GET['passwordlogin'];

        }

        require ('dbcon.php');
        $q1 = "SELECT email FROM alluser WHERE username = '$username'";
        $result = $dbc->query($q1);
        $row=$result->fetch_assoc();
        if(!is_null($row))
        {
            $mail =$row['email'];
        }

       /* $stm = $dbc->prepare($q1);
        $result = $stm->bind_param("s",$username);
        $stm->execute();
        $stm->bind_result($mail);
        $stm->fetch();
        $stm->close();
        $dbc->close()*/;
        if($result &&!is_null($row))
        {
            $q = "SELECT pass FROM alluser WHERE email = '$mail'";
            $result = $dbc->query($q);
            $row1=$result->fetch_assoc();
            $pass =$row1['pass'];
            if($password==$pass)
            {
                //setcookie(name, value, expiration,path, host, secure, httponly);
                setcookie('username',$username,time()+1800,'/mysite/');
                $name = $_COOKIE['username'];
                header('location:../index.php');
            }
            else
            {
                echo "wrong password";
            }
           
    
        }
    }
?>
    <form action=""  method = "GET">
        <fieldset>
            <legend>log in</legend>
            <input type="text" name ="usernamelogin" placeholder= "enter your username" ><br>
            <input type="password" name = "passwordlogin" placeholder = "enter your password"><br>
            <button>login</button>
            <button><a href="signup.php">create account</a></button>
        </fieldset>
    </form>
</body>
</html>