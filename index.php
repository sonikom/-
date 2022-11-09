<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php session_start();?>
<?php include './config.php';?>
<?php include './login/code_login.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ДЖКХ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">


    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slicknav.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

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
                                        <a class="boxed-btn3" href="login/login.php">Войти</a>
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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="slider_text" align ="center">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">Департамент</h3>
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">жилищно-коммунального хозяйства</h5>
                            <h5 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">города Москвы</h5>
                            <br>
                            <div class="sldier_btn wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                                <a href="https://www.gosuslugi.ru/r/moscow" class="boxed-btn3">Задать вопрос</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ilstration_img wow fadeInRight d-none d-lg-block text-right" data-wow-duration="1s" data-wow-delay=".2s">
            <img src="img/banner/illustration.png" alt="">
        </div>
    </div>
    <!-- slider_area_end -->


    <!-- testimonial_area  -->
    <div class="testimonial_area  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-40">
                        <h3 align ="center">Деятельность</h3>
                    </div>
                </div>
                <div class="col-xl-12">
                     <!-- <div class="testmonial_active owl-carousel"> -->
                        <!-- <div class="single_carousel"> -->
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="single_testmonial d-flex align-items-center">
                                        <div class="info">
                                            <p align ="justify">Департамент ЖКХ занимается вопросами жилищно-коммунального хозяйства, управления многоквартирными домами, ресурсоснабжения, водоотведения, содержания и ремонта инженерных объектов и коммуникаций. Также в ведении Департамента дорожно-мостовое хозяйство, озеленение, праздничное оформление, иллюминация и освещение, системы обращения с ТКО и содержание безнадзорных животных.</p>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

   
    <!-- job_listing_area_start  -->
    <div class="job_listing_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title mb-40">
                        <br>
                        <br>
                        <h3>Информация для жителей</h3>
                    </div>
                </div>
            </div>
            <div class="job_lists">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/1.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="https://www.mos.ru/dgkh/function/informatciia-dlia-zhitelei/telefony-goriachikh-linii/"><h4>Телефоны горячих линий</h4></a>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/2.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="https://www.mos.ru/dgkh/function/informatciia-dlia-zhitelei/perechen-vodnih-obektov/"><h4>Перечень мест массового отдыха на водных объектах города Москвы</h4></a>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/3.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="https://www.mos.ru/dgkh/function/informatciia-dlia-zhitelei/pravovaia-pomoshch-naseleniiu-po-voprosam-zhkkh/"><h4>Правовая помощь населению по вопросам ЖКХ</h4></a>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/4.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="https://www.mos.ru/dgkh/function/informatciia-dlia-zhitelei/kontaktnaia-informatciia-126-gbu-zhilishchnik-raionov-sozdannykh-v-2013-2015-gg/"><h4>Контактная информация ГБУ «Жилищник» районов Москвы</h4></a>

                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/5.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="https://www.mos.ru/dgkh/function/informatciia-dlia-zhitelei/vopros-otvet/"><h4>Вопрос-ответ</h4></a>
                                   
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="single_jobs white-bg d-flex justify-content-between">
                            <div class="jobs_left d-flex align-items-center">
                                <div class="thumb">
                                    <img src="img/svg_icon/1.svg" alt="">
                                </div>
                                <div class="jobs_conetent">
                                    <a href="https://www.mos.ru/dgkh/function/informatciia-dlia-zhitelei/poverka-individualnykh-priborov-ucheta-vody/"><h4>Поверка индивидуальных приборов учёта воды</h4></a>
                                    
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job_listing_area_end  -->

    

    




    <!-- footer start -->
    <footer class="footer" align="center">
        <div class="footer_top" align="center">
            <div class="container" align="center">
                <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                           
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by LoLTeX

                        </p>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

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
    <script src="js/gijgo.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
</body>

</html>