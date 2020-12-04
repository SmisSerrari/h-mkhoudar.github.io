<?php 

include ('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> المفوض القضائي  - تسجيل  عضو جديد  </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/rtl/bootstrap.min.css" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="css/rtl/bootstrap.rtl.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/rtl/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="font-family: tahoma">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h2><center>مكتب المفوض القضائي <b>الأستاذ مراد خضار </center></h2>
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">تسجيل  عضو جديد</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="اسم المستخدم" name="pseudo" type="text" required>
                                </div>
                                <div class="form-group"> 
                                    <input class="form-control" placeholder="كلمة السر" name="password" type="password" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="اعادة كلمة السر" name="repassword" type="password" required>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="تسجيل" class="btn btn-lg btn-success btn-block">
                            </fieldset>
                                
                        </form>
                    </div>
                </div>
                <a href="index.php" class="btn btn-lg btn-warning btn-block"> تسجيل الدخول </a>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
<?php 

include ('connexion.php');

if(isset($_POST["submit"]))
{
    $pseudo = $_POST["pseudo"];
    $password = md5($_POST["password"]);
    $repassword = md5($_POST["repassword"]);

    if($password != $repassword)
    {
       
     echo "كلمة السر  غير صحيحة  المرجو اعادة كلمة السر";
        
    }
    else{
          $query = "INSERT INTO user (pseudo, password, repassword) VALUES('$pseudo','$password','$repassword') ";
          $result = mysqli_query($conn, $query);
            if(mysqli_query($conn, $query))
            {
                  echo '<center><b> تمة إضافة    '.$pseudo.'بنجاح </b></center>';
                  header('Location: register.php');
            }
            else{
                echo "Error: " . $query . "" . mysqli_error($conn);
            }

     }
        
      mysqli_close($conn);
}
      
 
 ?>