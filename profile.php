<?php include('configSa3i.php');?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ساعٍ</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->

</head>

<body id="subConfirm" class="index" dir="rtl">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> القائمة <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="index.html#page-top"><img src="saai.png" alt="هوية ساع" class="logo"/></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="index.html#page-top"></a>
                    </li> 
                    <li>
                        <a class="page-scroll" href="index.html#portfolio">أرسل رسالة</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#services">عن ساعٍ</a>
                    </li>
                    
                    <li>
                        <a class="page-scroll" href="controlPage.php">قائمة أرقامي</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Sign up form Section -->
    <section id="signupHeader">
        <div class="container formSection">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"> أضف رقماً</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form  name="sign" method='post' accept-charset='UTF-8'id="signForm" novalidate  >
                        <div class="col-md-12">
                            <div class="form-group">
                                <h4>  رقم (واتساب) </h4>
                                <input name="number" type="number" class="form-control" placeholder="Wahtsapp *" id="whatsNo" required data-validation-required-message="فضلًا أدخل رقم الواتس">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <h4>رقم (تيليقرام)،</h4>
                                <input name ="number" type="number" class="form-control" placeholder="Telegram *" id="telegramNo" required data-validationrequired-message=" أفضلًا أدخل حساب أو رقم التيليقرام">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <h4> رقم SMS </h4>
                                <input name="number" type="number" class="form-control" placeholder="SMS *" id="SMSNo" required data-validation-required-message="فضلًا أدخل رقم جوالك لإرسال رسائل قصيرة">
                                <p class="help-block text-danger"></p>
                            </div>
                           
                           
                        </div>

                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button name="save" type="submit" class="btn btn-xl">حفظ</button>
                            
                            

                            <?php //Insert the user's Number to DB
                            if(isset($_POST['save'])){
       // $sql = "INSERT INTO `user`( `Numbers`) VALUES "($_POST['number']);
                               // mysqli_query($sql);
                                
                            $query="insert into user (Numbers) values('$_POST[number]')";
        
        mysqli_query($conn , $query);    
                                
    }?>
                            
                            
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://github.com/Sa3y/saay" target><i class="fa fa-github"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <span class="copyright">الحقوق محفوظة &copy; لموقع ساعٍ ١٤٣٨</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
        crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>