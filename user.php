<?php header('Content-Type: text/html; charset=utf-8'); ?>
<?php session_start();?>
<?php include './config.php';?>
<?php include './code_user.php'?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Job Board</title>
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
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a></li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a></li>
                                            <li><a href="https://www.mos.ru/dgkh/function/informatciia-dlia-zhitelei/telefony-goriachikh-linii/">Контакты</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="phone_num d-none d-xl-block">
                                        <a href="#">Log in</a>
                                    </div>
                                    <div class="d-none d-lg-block">
                                        <a class="boxed-btn3" href="map/map.php">Post a Job</a>
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
<!--                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn">Выпадающий</button>
                                    <div id="myDropdown" class="dropdown-content">
                                      <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                                      <a href="#about">О Нас</a>
                                      <a href="#base">Основа</a>
                                      <a href="#blog">Блог</a>
                                      <a href="#contact">Контакт</a>
                                      <a href="#custom">Заказ</a>
                                      <a href="#support">Поддержка</a>
                                      <a href="#tools">Инструменты</a>
                                    </div>
                                  </div>-->
                            <!--<form action="#">-->
                                <div class="row">
                                    <!--<form name="serch" method="get" action="user.php">-->
<!--                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <br/>
                                            <h3>Наименование</h3>
                                            <input type="text" placeholder="Поиск" name="search_input"/>
                                        </div>
                                    </div>-->
                                    <!--</form>-->
                                    
                                    <div class="col-lg-12">
                                        <div class="single_field">
                                            <!--<form name="location_form" method="get" action="user.php">-->
                                                <!--<input name="location" type="submit" value="Местоположение"/>-->
                                                
                                                    <!--<option data-display="Локация">Локация</option>-->
                                                    <?php 
//                                                    if (isset($_REQUEST['location'])){
                                                        //echo 'JOPAJOPAJOPAJOPA'; ?>

                                                <div class="col-lg-12">
                                                    <div class="single_field">
                                                        <input type="text" placeholder="Округ" name="region"/>
                                                        <input type="text" placeholder="Район" name="district"/>
                                                        <input type="text" placeholder="Улица" name="street"/>
                                                        <input type="text" placeholder="Дом" name="building"/>
                                                    </div>
                                                </div>

                                                    <?php 
//                                                    } else {
                                                       // echo 'DADADDADAD';
//                                                    }

                                                         ?>

                                                
                                            <!--</form>-->
                                        </div>
                                    </div>
                                    

                                </div>
                            <!--</form>-->
                        </div>
                        <!-- <div class="range_wrap">
                            <label for="amount">Price range:</label>
                            <div id="slider-range"></div>
                            <p>
                                <input type="text" id="amount" readonly style="border:0; color:#7A838B; font-size: 14px; font-weight:400;">
                            </p>
                        </div> -->
                        
                            <div class="reset_btn">
                                <button  class="boxed-btn3 w-100" type="submit" name="request_search">Найти</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="recent_joblist_wrap">
                        <div class="recent_joblist white-bg ">
                            <h3 align ="center">Список заявок</h3>
<!--                            <div class="row align-items-center">
                                
                                <div class="col-md-6">
                                    <h4 align ="center">Список заявок</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="serch_cat d-flex justify-content-end">
                                        <select>
                                            <option data-display="Most Recent">Most Recent</option>
                                            <option value="1">Marketer</option>
                                            <option value="2">Wordpress </option>
                                            <option value="4">Designer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>

                    <div class="job_lists m-0">
                        <div class="row">
                            <form name="serch" method="get" action="user.php">
                            <?php echo $table_provesing;?>
                            </form>
                        <?php if (isset($_REQUEST['location'])){?>    
                            <form name="serch" method="get" action="user.php">
                            <?php echo $table_provesing;?>
                            </form>
                        <div class="testimonial_area  ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section_title text-center mb-40">
                                            <h3 align ="center">Заявка</h3>
                                        </div>
                                    </div>

                                    <div class="col-xl-12">
                                         <!-- <div class="testmonial_active owl-carousel"> -->
                                            <!-- <div class="single_carousel"> -->
                                                <div class="row">
                                                    <div class="col-lg-11">
                                                        <div class="single_testmonial d-flex align-items-center">
                                                            <div class="info">
                                                                <!--<p align ="justify">Департамент ЖКХ занимается вопросами жилищно-коммунального хозяйства, управления многоквартирными домами, ресурсоснабжения, водоотведения, содержания и ремонта инженерных объектов и коммуникаций. Также в ведении Департамента дорожно-мостовое хозяйство, озеленение, праздничное оформление, иллюминация и освещение, системы обращения с ТКО и содержание безнадзорных животных.</p>-->                                            

                                                                <?php echo $table_provesing2;?>


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- </div> -->


                                        <!-- </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                           
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px;"></div>
                <script>
                  function initMap() {
                    var uluru = {lat: -25.363, lng: 131.044};
                    var grayStyles = [
                      {
                        featureType: "all",
                        stylers: [
                          { saturation: -90 },
                          { lightness: 50 }
                        ]
                      },
                      {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
                    ];
                    var map = new yandex.maps.Map(document.getElementById('map'), {
                      center: {lat: -31.197, lng: 150.744},
                      zoom: 9,
                      styles: grayStyles,
                      scrollwheel:  false
                    });
                  }
                  
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
                
              </div>



        </div>
    </div>
    <!-- job_listing_area_end  -->

    
    <!-- footer start -->
<!--    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                finloan@support.com <br>
                                +10 873 672 6782 <br>
                                600/D, Green road, NewYork
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul>
                                <li><a href="#">About </a></li>
                                <li><a href="#"> Pricing</a></li>
                                <li><a href="#">Carrier Tips</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <h3 class="footer_title">
                                Category
                            </h3>
                            <ul>
                                <li><a href="#">Design & Art</a></li>
                                <li><a href="#">Engineering</a></li>
                                <li><a href="#">Sales & Marketing</a></li>
                                <li><a href="#">Finance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                            <h3 class="footer_title">
                                Subscribe
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Enter your mail">
                                <button type="submit">Subscribe</button>
                            </form>
                            <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                                luckily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                             Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
 Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>-->
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
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/range.js"></script>
    



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>


	<script>
        $( function() {
            $( "#slider-range" ).slider({
                range: true,
                min: 0,
                max: 24600,
                values: [ 750, 24600 ],
                slide: function( event, ui ) {
                    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] +"/ Year" );
                }
            });
            $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
                " - $" + $( "#slider-range" ).slider( "values", 1 ) + "/ Year");
        } );
        </script>
</body>

</html>