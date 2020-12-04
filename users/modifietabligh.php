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

    <title> المفوض القضائي - تعديل  الإجراءات </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/rtl/bootstrap.min.css" rel="stylesheet">
    
    <!-- not use this in ltr -->
    <link href="css/rtl/bootstrap.rtl.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/rtl/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="font-family:tahoma;">
<?php
 
  //r�cup�ration de la variable d'URL,
  //qui va nous permettre de savoir quel enregistrement modifier
  $id  = $_GET["idtab"] ;
  
 
  //requ�te SQL:
  $sql = "SELECT *
            FROM tabligh
	    WHERE idtab = ".$id ;
 
  //ex�cution de la requ�te:
  $query = mysqli_query( $conn, $sql ) ;
 
  //affichage des donn�es:
  if( $result = mysqli_fetch_object( $query ) )
  {
  ?>

    <div id="wrapper">



        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="index.php">مكنب المفوض القضائي  <b>   </b> </a>
            </div>
            <!-- /.navbar-header -->
            
             <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                 <input type="text" class="form-control" placeholder="البحث...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> الإدارة </a>
                        </li><li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> تسجيل  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="enregistrehuissier.php"><i class="fa fa-dashboard fa-fw"></i>تسجيل  مفوض قضائي </a></li>
                                <li><a href="enregistreclerc.php"><i class="fa fa-dashboard fa-fw"></i>إضافة كاتب محلف  </a></li>
                                
                                <li><a href="enregistreavoca.php"><i class="fa fa-dashboard fa-fw"></i>إضافة  محامي  </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>التبليغ <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="enregistretab.php"> تسجيل الاجراءات </a>
                                </li>
                                <li>
                                    <a href="uploadtabligh.php"> ذمج الوثيقة  </a>
                                </li>
                                <li>
                                    <a href="bureautab.php"> قصد الانجاز </a>
                                </li>
                                <li>
                                    <a href="encourtab.php"> طور الانجاز </a>
                                </li>
                                <li>
                                    <a href="finietab.php"> منجزة قصد التضمين </a>
                                </li>
                                <li>
                                    <a href="datelisttabligh.php"> منجزة قصد  الارسال </a>
                                </li>
                                <li>
                                    <a href="savetab.php"> الحفظ </a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> الارشيف  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="archivetabligh.php"> التبليغ </a>
                                </li>
                                
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">تضمين الاجراءات</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			<div class="col-lg-6">
                                    <h1>المحكمة</h1>
									</div>
			<div class="col-lg-6">

											<form role="form" name="ajouter" action="" method="POST">
										
                                        <div class="form-group">
                                         
                                            <select class="form-control" name="tabtrubunal"  >
                                                
                                                <option value="<?php echo $result->tabtrubunal ;?>"><?php echo $result->tabtrubunal; ?></option>
                                                <option value="المحكمة الاستئناف ">المحكمة الاستئناف</option>
                                                <option value="محكمة الاستئناف التجارية">محكمة الاستئناف التجارية</option>
                                                <option value="المحكمة الابتدائية المدنية">المحكمة الابتدائية </option>
                                                <option value="المحكمة التجارية">المحكمة التجارية</option>
                                                
                                                <option value="المحكمة الادارية">المحكمة الادارية</option>
                                                <option value="المحكمة الاجتماعية">المحكمة الاجتماعية</option>
												
												
                                                
                                            </select>
                                        </div>
										
								</div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><b>نوع الاجراء</b></h4>
                        </div>
                        <div class="panel-body">                             
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group" >
                                            <label>السجل العام</label>
                                            <input class="form-control" name="tabregGen" value="<?php echo($result->tabregGen) ;?>">
                                    </div>
                                </div>
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                            <label>السجل الخاص</label>
                                            <input class="form-control" name="tabregPre" value="<?php echo($result->tabregPre) ;?>">
                                        </div>
                                    </div>
                                        
                            
                                <div class="col-md-3">
                                    <div class="form-group">
                                            <label>تاريخ السحب</label>
                                            <input class="form-control" type="date" name="tabdateentre" value="<?php echo($result->tabdateentre) ;?>">
                                        </div>
                                    </div>

                                    
                            </div>
                            <div class="row">
                                
                                
                            
                                <div class="col-md-3">
                                    <div class="form-group" style="margin-right:15px">
                                    <label>  نوع الاجراء </label>
                                    <select class="form-control" name="tabgenre"  >                         
                                <option value="<?php echo $result->tabgenre ;?>"><?php echo $result->tabgenre; ?></option>
                                <option value="جلسة">جلسة</option>
                                                <option value="قرار">قرار</option>
                                                <option value="حكم">حكم</option>
                                                <option value="أمر">أمر</option>
                                                <option value="انذار مباشر SPH">انذار مباشر SPH</option>
                                                <option value="حجز لدى الغير">حجز لدى الغير</option>
                                                <option value="انذار عقاري">انذار عقاري</option>
                                                <option value="بيوعات عقارية">بيوعات عقارية</option>
                                                <option value="خبرة">خبرة</option>
                                                <option value="اعذار">اعذار</option>  
                                </select></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group" >
                                            <label>رقم التنفيذ </label>
                                            <input class="form-control" name="tabnumtanfid" value="<?php echo($result->tabnumtanfid) ;?>">
                                        </div>
                                    </div>
                                <div class="col-md-3">
									<div class="form-group">
                                            <label>رقم الملف</label>
                                            <input class="form-control" name="tabnumdoss" value="<?php echo($result->tabnumdoss) ;?>" >
                                        </div>
									</div>
                            
                            <div class="col-md-3">
                                    <div class="form-group">
                                            <label>تاريخ الجلسة أو البيع</label>
                                            <input class="form-control" type="date" name="tabdatejalsa" value="<?php echo($result->tabdatejalsa) ;?>">
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group" style="margin-right:15px">
                                            <label>طالب الاجراء</label>
                                            <input class="form-control" name="tabavec" value="<?php echo($result->tabavec) ;?>">
                                        </div>
									</div>
                                <div class="col-md-6">
									<div class="form-group" style="margin-left:15px">
                                            <label>النائب عنه</label>
                                            <input class="form-control" name="tabavoca" value="<?php echo($result->tabavoca) ;?>" >
                                        </div>
									</div>
								</div>
                            
							<div class="row">
                                <div class="col-md-6">
									<div class="form-group">
                                            <label>المبلغ إليه</label>
                                            <input class="form-control" name="tabcontre" value="<?php echo($result->tabcontre) ;?>">
                                        </div>
									</div>
                                <div class="col-md-6">
									<div class="form-group">
                                            <label>عنوانه</label>
                                            <input class="form-control" name="tabadress" value="<?php echo($result->tabadress) ;?>">
                                        </div>
									</div>
								</div>
                            </div>
							<div class="row">
                                <div class="col-md-6">
									<div class="form-group" style="margin-right:15px">
                                            <label>المصدر</label>
                                            <select class="form-control" name="tabsource">
                                                <option value="<?php echo($result->tabsource) ;?>"><?php echo($result->tabsource) ;?></option>
                                              <option value="مكتب المحامي">مكتب المحامي</option>
                                                <option value="المحكمة">المحكمة</option>
                                                <option value="الشركة">الشركة</option>
                                                <option value="كاتب محلف">كاتب محلف</option>
                                                <option value="عموم">عموم</option>  
                                            </select>
                                        </div>
									</div>
                                <div class="col-md-4">
									<!--<div class="form-group">
                                            <label>المفوض القضائي</label>
                                            <select class="form-control">
                                                <option>المفوض القضائي</option>
                                                <option>ذ/ عبد العزيز كندر</option>
												<option>مفوض قضائي آخر</option>
                                                
                                                
                                            </select>
                                        </div>-->
									</div>
                                <div class="col-md-6">
									<div class="form-group" style="margin-left:15px">
                                            <label>الكاتب المحلف</label>
                                            <select class="form-control" name="tabclerc">
												<option value="<?php echo($result->tabclerc) ;?>"><?php echo($result->tabclerc) ;?></option>
												<?php 
                                        $query1 = "SELECT * FROM huissiers";          
                                        $result1 = mysqli_query($conn, $query1);
                                    while ($row1 = mysqli_fetch_array($result1)):; ?>
                                      <option value="<?php echo $row1[1];?>"><?php echo "$row1[1]";?> </option>
                                  <?php endwhile; ?>							

                                            </select>
                                        </div>
									</div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label>تاريخ السحب  للكاتب</label>
                                            <input class="form-control" type="date" name="num_donne" value="<?php echo($result->num_donne) ;?>">
                                        </div>
                                    </div>
                            
                            <div class="col-md-6">
                                    <div class="form-group">
                                            <label>تاريخ الارجاع</label>
                                            <input class="form-control" type="date" name="num_encour" value="<?php echo($result->num_encour) ;?>">
                                        </div>
                                    </div>
                                </div>
							
							<div class="row">
							<div class="col-lg-6">
							 
							
                                <input type="submit" class="btn btn-outline btn-success btn-lg" style="margin:15px; width:50%" value="تعديل الاجراء" name="tadmin">
                                
								</div>
								<div class="col-lg-6">
							
                            


                            </div>
							</form>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
  <?php
  }//fin if 
  ?>
</body>

</html>
<?php

if(isset($_POST['tadmin']))

{
    

$idtab = $_REQUEST['idtab'];
$tabregGen = $_POST["tabregGen"];
$tabregPre = $_POST["tabregPre"];
$tabtrubunal = $_POST["tabtrubunal"];
$num_donne = $_POST["num_donne"];
$num_encour = $_POST["num_encour"];
$tabnumdoss = $_POST["tabnumdoss"];
$tabnumtanfid = $_POST["tabnumtanfid"];
$tabgenre = $_POST["tabgenre"];
$tabavec = $_POST["tabavec"];
$tabavoca = $_POST["tabavoca"];
$tabcontre = $_POST["tabcontre"];
$tabadress = $_POST["tabadress"];
$tabsource = $_POST["tabsource"];
$tabclerc = $_POST["tabclerc"];
$tabdateentre = $_POST["tabdateentre"];

$sql = "UPDATE tabligh SET 
            tabregGen = '$tabregGen',
            tabregPre = '$tabregPre', 
            tabtrubunal = '$tabtrubunal', 
            num_donne='$num_donne', 
            num_encour = '$num_encour', 
            tabnumdoss = '$tabnumdoss', 
            tabnumtanfid = '$tabnumtanfid', 
            tabgenre='$tabgenre', 
            tabavec = '$tabavec', 
            tabavoca = '$tabavoca', 
            tabcontre='$tabcontre', 
            tabadress = '$tabadress', 
            tabsource = '$tabsource', 
            tabclerc = '$tabclerc', 
            tabdateentre='$tabdateentre'
             WHERE idtab='$idtab'";
   
   if (mysqli_query($conn, $sql)) {
        
     header('Location: datelisttabligh.php');
   } else {
        
      echo "Error updating record: " . mysqli_error($conn);
   }
   mysqli_close($conn);
    }

?>