<?php 

  //connection au serveur:
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

    <title>المفوض القضائي - تسجيل التنفيذات</title>
	
	

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
               <a class="navbar-brand" href="index.php">مكنب المفوض القضائي  </a>
            </div>
            <!-- /.navbar-header -->

            
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <img src="images/logo_KJM.png" style="width: 50%; height: 50%; margin: 15px 55px 20px 0px" >
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> الإدارة </a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> تسجيل  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="enregistrehuissier.php"><i class="fa fa-dashboard fa-fw"></i>تسجيل  مفوض قضائي </a></li>
                                <li><a href="enregistreclerc.php"><i class="fa fa-dashboard fa-fw"></i>إضافة كاتب محلف  </a></li>
                                
                                <li><a href="enregistreavoca.php"><i class="fa fa-dashboard fa-fw"></i>إضافة  محامي  </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> البحث  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="tabrecherche.php">-  التبليغ</a>
                                </li>
                                <li><a href="tanrecherche.php">- التنفيذ </a>
                                </li>
                                <li><a href="mkhrecherche.php">-  المختلف  </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> الاحصائيات  <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="statistiquehuissier.php">- أحصاء المفوض القضائي  </a>
                                </li>
                                <li><a href="statistiqueclercdate.php">- إحصاء المكتب  </a>
                                </li>
                                <li><a href="statistiqueclercreq.php">- إحصاء الكتاب المحلفون   </a>
                                </li>
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-wrench fa-briefcase"></i>+ التنفيذ<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a href="#"><i class="fa fa-wrench fa-briefcase"></i>+ ملفات التنفيذات <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                            <a href="enregistretan.php">- تسجيل الملف </a>
                                        </li>
                                        <li>
                                            <a href="tandoc.php">- ذمج  الوثيقة  </a>
                                        </li>
                                        <li>
                                            <a href="tanbureau.php">- قصد الانجاز </a>
                                        </li>
                                        <li>
                                            <a href="tanencour.php">- طور الانجاز </a>
                                        </li>
                                        <li>
                                            <a href="tantadmin.php">- ملفات قصد  التضمين </a>
                                        </li>
                                        <li>
                                            <a href="tanfine.php">- مآل ملفات التنفيذ</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-wrench"></i>+  الحجز التنفيذي  <span class="fa arrow"></span></a>
                                            <ul class="nav nav-second-level">
                                                 <li>
                                                    <a href="tanhajztan.php">- الحجز التنفيذي  </a>
                                                </li>
                                                <li>
                                                    <a href="tanlistepvhjztan.php">-  طلب تعيين خبير  </a>
                                                </li>
                                                <li>
                                                    <a href="tanlisterapexp.php">- تقرير الخبير  </a>
                                                </li>
                                                <li>
                                                    <a href="tanlisteexp.php">- تعين تاريخ البيع   </a>
                                                </li>
                                                <li>
                                                    <a href="tanlistevente.php">- عملية البيع  </a>
                                                </li>
                                                <li>
                                                    <a href="tanlisteventeok.php">- محضر الأداء</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="tandateliste.php"> المنجزة قصد الارسال </a>
                                        </li>
                                        
                                        <li>
                                            <a href="tansave.php">- الحفظ </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            
                                <li><a href="#"><i class="fa fa-wrench fa-briefcase"></i>+ التنفيذ المختلف  <span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li>
                                    <a href="enregistremokhtlf.php">- تسجيل  التنفيذ المختلف </a>
                                </li>
                                <li>
                                    <a href="bureaumokhtlf.php">- قصد الانجاز </a>
                                </li>
                                <li>
                                    <a href="encourmokhtlf.php">- طور الانجاز </a>
                                </li>
                                <li>
                                    <a href="finiemokhtlf.php">- منجزة قصد التضمين </a>
                                </li>
                                <li>
                                    <a href="datelistmokhtalif.php">- تتبع ملف التنفيذ </a>
                                </li>
                                <li>
                                    <a href="suiviemokhtlf.php">- مآل الملف  </a>
                                </li>
                                <li>
                                    <a href="suiviemokhtlf.php">- المنجزة قصد  الإرسال  </a>
                                </li>
                                <li>
                                    <a href="savemokhtlf.php">- الحفظ </a>
                                </li>
                               </ul>
                           </li>
                            </ul>
                            <!-- /.nav-second-level -->
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
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>الشركات (معاينة مجردة) <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="steenregistre.php"> تسجيل  المعيانات </a>
                                </li>
                                <li>
                                    <a href="stebureau.php"> لائحة المعاينات المنجزة  </a>
                                </li>
                            </ul>
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
            <form role="form" method="post" action="">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">تسجيل  ملفات التنفيذ </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
			    <div class="col-lg-4">
                    <h1>المحكمة</h1>
				</div>
			    <div class="col-lg-4">
				

                    <div class="form-group">
                                         
                        <select class="form-control" name="tantrubunal">
    												 
                            <option value="الاستئناف ">الاستئناف</option>
                            <option value="الاستئناف التجارية">الاستئناف التجارية</option>
                            <option value="الابتدائية المدنية">الابتدائية المدنية</option>
                            <option value="التجارية">التجارية</option>
                            <option value="الادارية">الادارية</option>
                            <option value="الاجتماعية">الاجتماعية</option>
    					</select>
                    </div>								
			    </div>
		    </div>				
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            تسجيل ملفات التنفيذ
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                
                                    
                                        <div class="panel-body">
										<div class="col-lg-4">
                            <h3>نوع الاجراء</h3>
                            </div>
							<div class="col-lg-4"><p>
                                   <select class="form-control" name="tangenre">
												<option value="تتنفيذ أمر"> تنفيذ أمر </option>
                                                <option value="بليغ و تنفيذ أمر">تبليغ و تنفيذ أمر </option> 
                                                <option value="تنفيذ حكم">تنفيذ حكم </option>
                                                <option value="تبليغ وتنفيذ حكم">تبليغ وتنفيذ حكم </option>
                                                <option value="تنفيذ قرار">تنفيذ قرار </option>
                                                <option value="تبليغ وتنفيذ قرار">تبليغ وتنفيذ قرار </option>

                                                <option value="تنفيذ أمر بالأداء ">تنفيذ أمر بالأداء </option>
                                                <option value="تبليغ وتنفيذ أمر بالأداء ">تبليغ و تنفيذ أمر بالأداء </option>
												
                                </select>
							</p>
                            </div></div>
							<div class="row">
                                <div class="col-md-4">
									<div class="form-group" style="margin-right:15px">
                                        <label>السجل العام</label>
                                        <input class="form-control" plaleftceholder="السجل العام" name="tanregGen">
                                        </div>
									</div>
                                <div class="col-md-4">
									<div class="form-group">
                                        <label>السجل الخاص</label>
                                        <input class="form-control" placeholder="السجل الخاص" name="tanregPre">
                                        </div>
									</div>
                                
									<div class="col-md-4">
									<div class="form-group" style="margin-left:15px">
                                            <label>تاريخ  السحب</label>
                                            <input type="date" class="form-control" name="tandateh">
                                        </div>
									</div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-right:15px">
                                        <label>رقم التنفيذ</label>
                                        <input class="form-control" plaleftceholder="رقم التنفيذ" name="tannum">
                                        </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>رقم الملف</label>
                                        <input class="form-control" placeholder="رقم الملف" name="tannumdoss">
                                        </div>
                                    </div>
                                <div class="col-md-4">
                                    <div class="form-group" style="margin-left:15px">
                                        <label>رقم الحكم</label>
                                        <input class="form-control" placeholder="رقم الحكم" name="tannumh">
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="row">
                                <div class="col-md-6">
									<div class="form-group" style="margin-right:15px">
                                            <label>طالب الاجراء</label>
                                            <input class="form-control" placeholder="طالب الاجراء" name="tanavec">
                                        </div>
									</div>
                                <div class="col-md-6">
									<div class="form-group" style="margin-left:15px">
                                            <label>النائب عنه</label>
                                            <input class="form-control" placeholder="النائب عنه" name="tanavoca">
                                            <!--<select class="form-control" name="tanavoca">
                                                <option>النائب  عنه</option>
                                            <?php 
                                                $query4 = "SELECT * FROM avocas";          
                                                $result4 = mysqli_query($conn, $query4);
                                                while ($row4 = mysqli_fetch_array($result4)):; ?>
                                                <option value="<?php echo $row4[1];?>"><?php echo "$row4[1]";?> </option>
                                            <?php endwhile; ?>
                                            </select>-->
                                        </div>
									</div>
								</div>
                            </div>
							<div class="row">
                                <div class="col-md-6">
									<div class="form-group">
                                            <label>المبلغ إليه</label>
                                            <input class="form-control" placeholder="المبلغ إليه"c name="tancontre">
                                        </div>
									</div>
                                <div class="col-md-6">
									<div class="form-group">
                                            <label>عنوانه</label>
                                            <input class="form-control" placeholder="عنوانه" name="tanadress">
                                        </div>
									</div>
								</div>
                            </div>
							<div class="row">
                                
                                
                                        <div class="col-md-3">
										<div class="form-group" style="margin-right:15px">
                                            <label>المفوض القضائي</label>
											<select class="form-control" name="tanhuissier">
                                            <option>المفوض القضائي</option>
											<?php 
                                                $query2 = "SELECT * FROM huissiers";          
                                                $result2 = mysqli_query($conn, $query2);
                                                while ($row2 = mysqli_fetch_array($result2)):; ?>
										 
                                                <option value="<?php echo $row2[1];?>"><?php echo "$row2[1]";?> </option>
                                            <?php endwhile; ?>
                                            </select>
                                        </div>
										</div>
                                        <div class="col-md-3">
                                    <div class="form-group" style="margin-right:15px">
                                            <label>الكاتب المحلف</label>
                                            <select class="form-control" name="tanclerc">
                                                <option>الكاتب المحلف</option> 
                                                <?php 
                                        $query3 = "SELECT * FROM clerc";          
                                        $result3 = mysqli_query($conn, $query3);
                                    while ($row3 = mysqli_fetch_array($result3)):; ?>
                                         
                                      <option value="<?php echo $row3[1];?>"><?php echo "$row3[1]";?>
                                     </option>
                                      <?php endwhile; ?>
                                            </select>
                                        </div></div>
										
                            </div>
							
							<div class="row">
							<div class="col-lg-6">
							 
							
                                <input type="submit" name="submit" class="btn btn-outline btn-success btn-lg" style="margin:15px; width:50%"  value="تسجيل الاجراءات">
                                
								</div>
								<div class="col-lg-6">
							
                                <input type="reset" class="btn btn-outline btn-warning btn-lg" style="margin:15px; width:50%" value="مسح المعلومات">


                            
                            </div>
							</form>
                            </div>
                            <!-- /.row (nested) -->
							<?php


  //connection au serveur:
include('connexion.php');

if(isset($_POST["submit"]))
{
   
$tantrubunal = $_POST["tantrubunal"];
$tanregGen = $_POST["tanregGen"];
$tanregPre = $_POST["tanregPre"];
$tangenre = $_POST["tangenre"];
$tannum = $_POST["tannum"];
$tannumdoss = $_POST["tannumdoss"];
$tannumh = $_POST["tannumh"];
$tandateh = $_POST["tandateh"];
$tanavec = $_POST["tanavec"];
$tanavoca = $_POST["tanavoca"];
$tancontre = $_POST["tancontre"];
$tanadress = $_POST["tanadress"];
$tanclerc = $_POST["tanclerc"];
$tanhuissier = $_POST["tanhuissier"];

$query = "INSERT INTO tanfid ( tantrubunal,tanregGen,tanregPre, tangenre, tannum, tannumdoss, tannumh, tandateh, tanavec, tanavoca, tancontre, tanadress, tanclerc, tanhuissier) VALUES 
    ('$tantrubunal','$tanregGen','$tanregPre','$tangenre','$tannum','$tannumdoss','$tannumh','$tandateh','$tanavec','$tanavoca','$tancontre','$tanadress','$tanclerc','$tanhuissier')";
$result = mysqli_query($conn, $query);
   if (isset($result)) {
      echo '<center><b> تمت إضافة الإجراء بنجاح  '.$tannum.'</b></center>';
     
    } 

    else 

    {
      echo "Error: " . $query . "" . mysqli_error($conn);
      echo "<BR/> non enregistre";
    }
      mysqli_close($conn);
}

?>
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

</body>

</html>
