<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php session_start();?>
<?php include './config.php';?>
<?php include './code_user_test.php'?>
<?php $district_point = '';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ДЖКХ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/themify-icons.css"/>
    <link rel="stylesheet" href="css/nice-select.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/jquery-ui.css"/>
    <link rel="stylesheet" href="css/gijgo.css"/>
    <link rel="stylesheet" href="css/animate.min.css"/>
    <link rel="stylesheet" href="css/slicknav.css"/>
    <link rel="stylesheet" href="css/my_style.css"/>
        <script src="js/my.js"></script>

    <link rel="stylesheet" href="css/style.css"/>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo3.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php">Главная</a></li>
                                            <li><a href="https://www.mos.ru/dgkh/function/informatciia-dlia-zhitelei/vopros-otvet/">Вопрос-ответ</a></li>
                                            
                                            <li><a href="https://www.mos.ru/dgkh/function/informatciia-dlia-zhitelei/telefony-goriachikh-linii/">Контакты</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="#"></a>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <form name="exit" method="get" action="../../index.php">
                                            <input name="exit" id = "ex" class="boxed-btn3" type="submit" value="Выход"/>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3></h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- job_listing_area_start  -->
    <div class="job_listing_area plus_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="job_filter white-bg">
                        <form name="serch" method="get" action="user.php">
                        <div class="form_inner white-bg">
                            <h3>Фильтр</h3>

                                <div class="row">
    
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                                <div class="col-lg-12">
                                                    <div class="single_field">
                                                        <input type="text" placeholder="Округ" name="region" value = "<?php echo $region_start;?>"/>
                                                        <input type="text" placeholder="Район" name="district" value = "<?php echo $district_start;?>"/>
                                                        <input type="text" placeholder="Улица" name="street" value = "<?php echo $street_start;?>"/>
                                                        <input type="text" placeholder="Дом" name="building" value = "<?php echo $building_start;?>"/>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    

                                </div>
                        </div>
                        
                            <div class="reset_btn">
                                <?php if(($error_search != '') and ($error_search != 'no')){?>
                                <p><?php echo $error_search;?></p>
                                <?php }?>
                                <button  class="boxed-btn3 w-100" type="submit" name="request_search">Найти</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="recent_joblist_wrap">
                        <div class="recent_joblist white-bg ">
                            <h3 align ="center">Список заявок</h3>
                            <?php 
                                  if(($error_search == 'no') and ($top_adress != '')){
                                    
                                    
                                
                            ?>
                            <h3 align ="center"><?php echo $district.' '.$street.' '.$building;?></h3>
                            <?php
                                }
                            ?>

                        </div>
                    </div>

                    <div class="job_lists m-0">
                        <div class="row">

                                <?php  if(($error_search == 'no')  and ($top_adress != '')){echo $table_provesing;}?>


                           
                    </div>
                </div>
            </div>

            





        </div>
    </div>
   

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/range.js"></script>
    



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>

</body>

</html>