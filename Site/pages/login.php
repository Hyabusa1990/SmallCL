<!DOCTYPE html>

<?php
define('WERDICHLEGALGERUFEN', 1);
require_once('../includes/database.php');
require_once('../includes/user.php');
require_once('../includes/helper.php');
header('Content-Type: text/html; charset=UTF-8');
 if(!isset($_SESSION))
{
    session_start();
}

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

$db = new Database();
$loginWrong = FALSE;

if(isset($_POST["userName"]) && isset($_POST["password"])){
    $user = $db->get_userFromUserName($_POST["userName"]);
    if(!is_null($user)){
        if($user->check_password($_POST["password"])){
            $_SESSION["LogedInUser"] = $user;
            echo $user->get_userName();
            if(isset($_POST["remember"])){
                if($_POST["remember"] == "Remember Me"){
                    setcookie("SmallCLUser", $user->get_userName(), time()+60*60*24*30 );
                    setcookie("SmallCLToken", $user->get_PwCn(), time()+60*60*24*30 );
                }
            }
        }
        else{
            $loginWrong = TRUE;
        }
    }
    else{
        $loginWrong = TRUE;
    }
}
else if(isset($_COOKIE["SmallCLUser"])){
    $user = $db->get_userFromUserName($_COOKIE["SmallCLUser"]);

    if($user->get_PwCn() == $_COOKIE["SmallCLToken"]){
        $_SESSION["LogedInUser"] = $user;
        setcookie("SmallCLUser", $user->get_userName(), time()+60*60*24*30);
        setcookie("SmallCLToken", $user->get_PwCn(), time()+60*60*24*30);
    }
}


if(isset($_GET["logout"])){
    if(isset($_COOKIE["SmallCLUser"])){
        setcookie("SmallCLUser", "", time()-60*60*24*30);
        setcookie("SmallCLToken", "", time()-60*60*24*30);
    }
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
    header("location:login.php");
    die;
}

if(isset($_SESSION["LogedInUser"])){
    header("location:index.php");
    die;
}
?>
<html lang="de">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SmallCL</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><?php echo HELPER::get_langString('login.header') ?></h3>
                    </div>
                    <?php
                        if($loginWrong){
                            print "<div class=\"alert alert-danger\">\n";
                            print HELPER::get_langString('login.loginError');
                            print "</div>";
                        }
                    ?>
                    <div class="panel-body">
                        <form role="form" action="login.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Benutzername" name="userName" type="<?php echo HELPER::get_langString('login.username') ?>" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Passwort" name="password" type="<?php echo HELPER::get_langString('login.password') ?>" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me"><?php echo HELPER::get_langString('login.remember') ?>
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                                <input type="submit" value="<?php echo HELPER::get_langString('login.submit') ?>" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
