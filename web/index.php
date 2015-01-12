
<?php
/*
  require('../vendor/autoload.php');

  $app = new Silex\Application();
  $app['debug'] = true;

  // Register the monolog logging service
  $app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
  ));

  // Our web handlers

  $app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return 'Hello';
  });
 */
?>


<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#"
      xmlns="http://www.w3.org/1999/xhtml" xml:lang="it-it" lang="it-it"
      dir="ltr">
    <head>
        <title>意大利华人专业人士协会</title>

        <meta name="viewport"
              content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!--<base href="/" /> -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords"
              content="startup, start, up, innovation, innovazione, investitori, imprenditoria, imprenditore, idea, corso, pitch" />
        <meta name="description"
              content="意大利华人专业人士协会 " />
        <meta name="generator"
              content="Joomla! - Open Source Content Management" />


        <!-- metadata -->
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="意大利华人专业人士协会"/>
        <meta itemprop="description" content="意大利华人专业人士协会 "/>
        <meta itemprop="image" content="/logo.jpg"/>
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:creator" content="http://www.apci-italia.it/"/>
        <meta name="twitter:url" content="http://www.apci-italia.it/"/>
        <meta name="twitter:title" content="意大利华人专业人士协会"/>
        <meta name="twitter:description"  content="意大利华人专业人士协会 "/>
        <meta name="twitter:image" content="/logo.jpg"/>
        <!-- Open Graph data -->
        <meta property="og:locale" content="it_IT" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="意大利华人专业人士协会" />
        <meta property="og:description" content="意大利华人专业人士协会 " />
        <meta property="og:image" content="/logo.jpg" />
        <meta property="og:url" content="http://www.apci-italia.it/" />

        <link rel="shortcut icon" href="images/logo/favicon.ico" /> 

        <link rel="stylesheet" href="components/com_k2/css/k2.css"
              type="text/css" />
        <link rel="stylesheet"
              href="media/coalawebsocial/modules/likebox/css/cwl-default.css"
              type="text/css" />
        <link rel="stylesheet" href="templates/boxme/css/flexslider.css"
              type="text/css" />
        <link rel="stylesheet" href="templates/boxme/css/camera.css"
              type="text/css" />
        <link rel="stylesheet"
              href="templates/boxme/css/nivo-themes/default/default.css"
              type="text/css" />
        <link rel="stylesheet" href="templates/boxme/css/nivo-slider.css"
              type="text/css" />
        <link rel="stylesheet" href="templates/boxme/css/elastic.css"
              type="text/css" />
        <link rel="stylesheet" href="templates/boxme/css/jquery.kwicks.min.css"
              type="text/css" />
        <link rel="stylesheet" href="templates/boxme/css/bootstrap.min.css"
              type="text/css" />
        <link rel="stylesheet" href="templates/boxme/css/main.css"
              type="text/css" />
        <link rel="stylesheet" href="templates/boxme/css/boxme.responsive.css"
              type="text/css" />
        <link rel="stylesheet"
              href="templates/boxme/css/style.php?color1=cd3a27&color2=232323&color3=232323"
              type="text/css" />
        <link rel="stylesheet" href="modules/mod_dmt_social/css/dmt_social.css"
              type="text/css" />
        <link rel="stylesheet"
              href="media/com_uniterevolution/assets/rs-plugin/css/settings.css"
              type="text/css" />
        <link rel="stylesheet"
              href="media/com_uniterevolution/assets/rs-plugin/css/captions.css"
              type="text/css" />
        <link rel="stylesheet" href="media/mod_falang/css/template.css"
              type="text/css" />

        <link rel="stylesheet" href="css/slid.css"
              type="text/css" />

        <link rel="stylesheet" href="css/font-setting.css"
              type="text/css" />

        <link rel="stylesheet" href="css/founder.css"
              type="text/css" />	

        <style type="text/css">
            #likebox-wrapper * {
                min-width: 200px;
            }

            .fb-comments, .fb-comments span, .fb-comments iframe[style],
            .fb-comments iframe span[style], .fb-like-box, .fb-like-box span,
            .fb-like-box iframe[style], .fb-like-box iframe span[style] {
                min-width: 200px;
            }
        </style>
        <script src="media/system/js/mootools-core.js" type="text/javascript"></script>
        <script src="media/system/js/core.js" type="text/javascript"></script>
        <script src="media/jui/js/jquery.min.js" type="text/javascript"></script>
        <script src="media/jui/js/jquery-noconflict.js" type="text/javascript"></script>
        <script src="components/com_k2/js/k2.js?v2.6.7&amp;sitepath=/"
        type="text/javascript"></script>
        <script src="media/system/js/mootools-more.js" type="text/javascript"></script>
        <script src="templates/boxme/js/vendor/bootstrap.min.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/retina-1.1.0.min.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/hoverIntent.js" type="text/javascript"></script>
        <script src="templates/boxme/js/superfish.min.js" type="text/javascript"></script>
        <script src="templates/boxme/js/supersubs.js" type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.carouFredSel.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.prettyPhoto.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.smint.js" type="text/javascript"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"
        type="text/javascript"></script>
        <script src="plugins/system/shinetheme/assets/js/jquery.ui.map.min.js"
        type="text/javascript"></script>
        <script src="plugins/system/shinetheme/assets/js/jquery.validate.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.parallax-1.1.3.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.isotope.min.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/excanvas.js" type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.easy-pie-chart.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.flexslider-min.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.eislideshow.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.easing.1.3.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/camera.min.js" type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.nivo.slider.pack.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/jquery.kwicks.min.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/responsive-nav.min.js"
        type="text/javascript"></script>
        <script src="templates/boxme/js/main.js" type="text/javascript"></script>
        <script
            src="media/com_uniterevolution/assets/rs-plugin/js/jquery.themepunch.plugins.min.js"
        type="text/javascript"></script>
        <script
            src="media/com_uniterevolution/assets/rs-plugin/js/jquery.themepunch.revolution.min.js"
        type="text/javascript"></script>

        <script
            src="templates/boxme/js/main_1420213682874.js"
        type="text/javascript"></script>



        <!--[animation]-->
        <script
            src="templates/boxme/js/main_1420213682874.js"
        type="text/javascript"></script>
        <!--[filte isotope.pkgd.min.js]-->
        <script src ="js/isotope.pkgd.min.js" type="text/javascript"></script>





        <!-- Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                                                     <script src="templates/boxme/js/respond.min.js"></script>
                                                     <![endif]-->

        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-48209536-1']);
            _gaq.push(['_trackPageview']);
            (function () {
                var ga = document.createElement('script');
                ga.type = 'text/javascript';
                ga.async = true;
                ga.src = ('https:' === document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(ga, s);
            })();
        </script>

        <!--cnzz “虚拟PV跟踪”、“事件跟踪” -->
        <script>
            //声明_czc对象:
            var _czc = _czc || [];
        </script>
    </head>


    <body id=""  >
        <div id="wrapper" >

            <header class="soci-header">
                <div id="head-box" class="style2 ">
                    <div class="head-social-box">
                        <div class="container clearfix pos-center">
                            <div class="pull-right">

                                <ul class="dmt-social-links dmt-icons-16">
                                    <li class="facebook"><a title="Facebook" rel="me nofollow"
                                                            href="http://www.apci-italia.it/" target="_blank">
                                            <img src="modules/mod_dmt_social/icons/facebook_16.png" alt="" />
                                        </a></li>
                                    <li class="twitter"><a title="Twitter" rel="me nofollow"
                                                           href="http://www.apci-italia.it/" target="_blank"> <img
                                                src="modules/mod_dmt_social/icons/twitter_16.png" alt="" />
                                        </a></li>
                                    <li class="google_wave"><a title="Google+" rel="me nofollow"
                                                               href="http://www.apci-italia.it/"
                                                               target="_blank"> <img
                                                src="modules/mod_dmt_social/icons/google_wave_16.png" alt="" />
                                        </a></li>
                                    <li class="linkedin"><a title="LinkedIn" rel="me nofollow"
                                                            href="http://www.apci-italia.it/"
                                                            target="_blank"> <img
                                                src="modules/mod_dmt_social/icons/linkedin_16.png" alt="" />
                                        </a></li>
                                    <li class="youtube"><a title="YouTube" rel="me nofollow"
                                                           href="http://www.apci-italia.it/"
                                                           target="_blank"> <img
                                                src="modules/mod_dmt_social/icons/youtube_16.png" alt="" />
                                        </a></li>


                                </ul>
                                <div class="mod-languages">

                                    <ul class="lang-inline">

                                        <!-- >>> [FREE] >>> -->
                                        <!-- <<< [FREE] <<< -->

                                        <!-- >>> [FREE] >>> -->
                                        <li class="" dir="ltr"><a href="/en/"> <img
                                                    src="media/mod_falang/images/en.gif" alt="English (UK)"
                                                    title="English (UK)" />
                                            </a></li>
                                            <!-- <<< [FREE] <<< -->
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="header-wrapper margint10">
                            <div class="pull-left logo" margin-bottom="10px" >
                                <a href="/"><img   src="images/logo67.png"
                                                   class="img-responsive logo-image" alt="Important Logo" /></a>
                            </div>
                            <div class="pull-right menu">
                                <nav class="pull-left menu-bar" id="responsive-menu">
                                    <ul id="site-menu" class=" site-menu" >

                                        <li class="item-201 current active"><a class="active menu-font" href="/" >主页</a></li>
                                        <li class="item-202"><a class="menu-font" href="/milan-2015.html">米兰世博会</a></li>

                                        <li class="item-237 deeper parent"><a class="menu-font" href="#stop">活动介绍</a>
                                            <ul class="nav-child unstyled small">
                                                <li class="item-203"><a class="menu-font"
                                                                        href="/tianjin-2014.php">过往活动</a></li>
                                                <li class="item-204"><a class="menu-font"href="/milan-2015.html">即将进行</a></li>
                                            </ul>
                                        </li>

                                        <li class="item-206"><a class="menu-font" href="/member.html">协会会员</a></li>
                                        <li class="item-207"><a class="menu-font" href="/join-us.html">加入协会</a></li>
                                        <li class="item-242"><a class="menu-font" href="/contact-us.html">联系我们</a></li>

                                    </ul>

                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </header>

            <!--SLIDER -->
            <div id="slideshow">

                <div id="rev_slider_8_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" style="margin:0px auto;background-color:#E9E9E9;padding:0px;margin-top:0px;margin-bottom:0px;max-height:500px;direction:ltr;">
                    <div id="rev_slider_8_1" class="rev_slider fullwidthabanner" style="display:none;max-height:500px;height:500px;">						
                        <ul>

                            <li data-transition="fade" data-slotamount="7" data-masterspeed="300" > 

                                <img src="http://www.innovactionlab.org/images/slider_web.jpg" alt="" />

                                <div class="tp-caption rev-slider-title-nobackground fade"  
                                     data-x="3" 
                                     data-y="112" 
                                     data-speed="300" 
                                     data-start="500" 
                                     data-easing="easeOutExpo"  ></div>


                                <div class="tp-caption rev-slider-title-nobackground fade"  
                                     data-x="2" 
                                     data-y="178" 
                                     data-speed="300" 
                                     data-start="800" 
                                     data-easing="easeOutExpo"  >因为专业所以优秀</div>

                                <div class="tp-caption rev-slider-title-nobackground fade"  
                                     data-x="5" 
                                     data-y="293" 
                                     data-speed="300" 
                                     data-start="1200" 
                                     data-easing="easeOutExpo"  >服务于意大利专业人士!</div>

                                <div class="tp-caption rev-slider-button fade"  
                                     data-x="8" 
                                     data-y="380" 
                                     data-speed="300" 
                                     data-start="1500" 
                                     data-easing="easeOutExpo"  >
                                    <div class="bigbutton-place">
                                        <a class="bigbutton bigbutton2" target="tag" style=" " href="/join-us.html" >加入我们</a>
                                    </div>
                                </div>


                            </li>
                        </ul>
                    </div>
                </div>

                <!--Slid script-->
                <script type="text/javascript">

                    var tpj = jQuery;


                    var revapi8;

                    tpj(document).ready(function () {

                        if (tpj.fn.cssOriginal != undefined)
                            tpj.fn.css = tpj.fn.cssOriginal;

                        if (tpj('#rev_slider_8_1').revolution == undefined)
                            revslider_showDoubleJqueryError('#rev_slider_8_1', "joomla");
                        else
                            revapi8 = tpj('#rev_slider_8_1').show().revolution(
                                    {
                                        delay: 10000,
                                        startwidth: 1140,
                                        startheight: 500,
                                        hideThumbs: 200,
                                        thumbWidth: 100,
                                        thumbHeight: 50,
                                        thumbAmount: 1,
                                        navigationType: "none",
                                        navigationArrows: "verticalcentered",
                                        navigationStyle: "round",
                                        touchenabled: "on",
                                        onHoverStop: "off",
                                        shadow: 0,
                                        fullWidth: "on",
                                        navigationHAlign: "center",
                                        navigationVAlign: "bottom",
                                        navigationHOffset: 0,
                                        navigationVOffset: 20,
                                        stopLoop: "off",
                                        stopAfterLoops: -1,
                                        stopAtSlide: -1,
                                        shuffle: "off",
                                        hideSliderAtLimit: 0,
                                        hideCaptionAtLimit: 0,
                                        hideAllCaptionAtLilmit: 0});

                    });	//ready

                </script>


            </div>

            <!--component session -->
            <div id="component">
                <div class="container">

                    <div id="system-message-container">
                        <div id="system-message"></div>
                    </div>
                </div>

                <div class="container">
                    <div class='st-divider ' style='padding: 20px 0; border: none;'></div>
                </div>

                <!----Text below banner---->

                <div class="container">
                    <div class="st-module module" id="Mod231">
                        <div class="module-inner">
                            <div class="module-ct">

                                <div id="k2ModuleBox231" class="k2ItemsBlock">


                                    <ul>
                                        <li class="even lastItem">
                                            <!-- Plugins: BeforeDisplay --> <!-- K2 Plugins: K2BeforeDisplay -->




                                            <!-- Plugins: AfterDisplayTitle --> <!-- K2 Plugins: K2AfterDisplayTitle -->

                                            <!-- Plugins: BeforeDisplayContent --> <!-- K2 Plugins: K2BeforeDisplayContent -->

                                            <div class="container">

                                                <center>                                                                                        </center>

                                                <h1 style="font-size: 35px;line-height: 1.5em">意大利华人专业人士协会</h1>
                                                <h2 style="font-size: 20px;line-height: 1.5em;">Associazione Professionisti Cinesi in Italia</p>
                                                    <h2 style="font-size: 20px;line-height: 1.5em; margin-bottom: 15px;">Chinese Professionals Association of Italy</h2>
                                                    <h2 style="font-size: 25px; line-height: 1.5em ">意大利华人专业人士协会（意文缩写APCI）是于2014年11月7日在意大利首都罗马成立的非盈利机构。协会旨在维护和保障旅意华人专业人士的合法权益，帮助其更好地融入本地社区及文化环境，丰富业余生活内容，为旅意华人华侨和留学生回国创业和回国服务提供交流的平台和合作的机会。</h2>
                                                    <h2 style="font-size: 25px; line-height: 1.5em"></h2>
                                                    <h2 style="font-size: 25px; line-height: 1.5em"></h2>
                                                    <h2 style="font-size: 25px; line-height: 1.5em; margin-bottom: 35px; "></h2>
                                            </div>


                                            <div class="clr"></div>

                                            <div class="moduleItemVideo">
                                                <span class="moduleItemVideoCaption"></span> <span
                                                    class="moduleItemVideoCredits"></span>
                                            </div>

                                            <div class="clr"></div> <!-- Plugins: AfterDisplayContent -->

                                            <!-- K2 Plugins: K2AfterDisplayContent --> <!-- Plugins: AfterDisplay -->

                                            <!-- K2 Plugins: K2AfterDisplay -->

                                            <div class="clr"></div>
                                        </li>
                                        <li class="clearList"></li>
                                    </ul>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!----Three coloum foto text below banner---->

                <div class="container">
                    <div class="st-module module" id="Mod128">
                        <div class="module-inner">
                            <div class="module-ct">

                                <div id="k2ModuleBox128" class="k2ItemsBlock">


                                    <ul>
                                        <li class="even lastItem">
                                            <!-- Plugins: BeforeDisplay --> <!-- K2 Plugins: K2BeforeDisplay -->




                                            <!-- Plugins: AfterDisplayTitle --> <!-- K2 Plugins: K2AfterDisplayTitle -->

                                            <!-- Plugins: BeforeDisplayContent --> <!-- K2 Plugins: K2BeforeDisplayContent -->

                                            <div class="moduleItemIntrotext">

                                                <div class="col-lg-4" style="margin-bottom: 35px;">
                                                    <h3 style="line-height: 15.8079996109009px;">
                                                        <img src="images/firstIcon.png" alt=""
                                                             style="margin-right: 15px; height: 35px;" /><span
                                                             style="line-height: 1.3em;">促进交流</span>
                                                    </h3>
                                                    <br />
                                                    <p class="margint10">我们举办了多期学术交流与学术讲座活动，受到了多方好评，我们还将举办多期有利于专业人士交流的活动</p>
                                                </div>
                                                <div class="col-lg-4" style="margin-bottom: 35px;">
                                                    <h3>
                                                        <img src="images/secondIcon.png" alt=""
                                                             style="margin-right: 15px; height: 35px;" />享受优惠
                                                    </h3>
                                                    <br />
                                                    <p class="margint10">成为APCI的会员，您将享受我们为您提供的众多研讨会，座谈会，以及人际关系拓展等活动。
                                                        除此之外，APCI的赞助商们也为会员提供了许多的福利。</p>
                                                </div>

                                                <div class="col-lg-4" style="margin-bottom: 35px;">
                                                    <h3>
                                                        <img src="images/resultIcon.png" alt=""
                                                             style="margin-right: 15px; height: 35px;" />保障权益
                                                    </h3>
                                                    <br />
                                                    <p class="margint10">我们有多种专业人士会员，他们都可以以自己的专业素养帮助您在职业发展上取得成功。
                                                        在这里，您可以获得更多宝贵的机会和经验。</p>
                                                </div>

                                            </div>


                                            <div class="clr"></div>

                                            <div class="moduleItemVideo">
                                                <span class="moduleItemVideoCaption"></span> <span
                                                    class="moduleItemVideoCredits"></span>
                                            </div>

                                            <div class="clr"></div> <!-- Plugins: AfterDisplayContent -->

                                            <!-- K2 Plugins: K2AfterDisplayContent --> <!-- Plugins: AfterDisplay -->

                                            <!-- K2 Plugins: K2AfterDisplay -->

                                            <div class="clr"></div>
                                        </li>
                                        <li class="clearList"></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Founder -->
                <div class="founder-container">
                    <div class="container">

                        <h1 style="margin-top: 60px; margin-bottom: 60px; font-size: 42px">协会理事会成员</h1>
                        <center>
                            <div class="row portfolio-box">

                                <div class="col-lg-3 col-sm-3 item ">

                                    <!-- Titolo -->
                                    <div class="board-title">
                                        <span style="text-align: center; font-size: 16px; margin-bottom: 5px;">刘金权</span>
                                    </div>

                                    <!-- Image <a href="/" target="_blank" alt="">
                                            <img id="founder-hover" class="img-responsive board-image" src="images/founder/liujinquan.jpg" alt="刘金权" />
                                        </a>-->
                                    <center>

                                        <div class="blg-img-box" style="width: 90%; height: auto;">
                                            <a href="/" target="_blank" alt="">
                                                <!--board-image class to make the foto round-->
                                                <img id="founder-hover" class="img-responsive board-image" src="images/founder/liujinquan.jpg" alt="刘金权" />
                                            </a>
                                            <!--mask class to make the foto round
                                            <div class="mask board-image" >
                                                <div class="prt-lnk-wrppr editions-link clearfix">
                                                    <div class="pull-left editions-popup popup">
                                                        <a href="/tianjin-2014.php"><h2>&nbsp;</h2></a>
                                                    </div>
                                                </div>
                                            </div>
                                            -->
                                        </div>

                                    </center>

                                    <!-- Deascrizione -->
                                    <div class="margint10 board-description">
                                        <p><span style="font-size: 13px; text-align: center;">意大利天津同乡会会长</span></p>  
                                        <p><span style="font-size: 13px; text-align: center;">意大利华商总会常务副会长</span></p>  
                                        <p><span style="font-size: 13px; text-align: center;">亚欧经贸文化交流会常务副主席</span></p>  
                                        <p><span style="font-size: 13px; text-align: center;">意大利中华医药学会副主席</span></p>                                                                              </div>
                                </div>


                                <div class="col-lg-3 col-sm-3 item ">

                                    <!-- Titolo -->
                                    <div class="board-title">
                                        <span style="text-align: center; font-size: 16px; margin-bottom: 5px;">牛颖异</span>
                                    </div>

                                    <!-- Immagine -->
                                    <center>
                                        <a href="/" target="_blank" alt="史磊">
                                            <img src="images/founder/niuyingyi.jpg" alt="牛颖异" class="board-image img-responsive "/>
                                        </a>
                                    </center>

                                    <!-- Deascrizione -->
                                    <div class="margint10 board-description">
                                        <p><span style="font-size: 13px; text-align: center;">罗马大学第一建筑学院城市建筑学硕士</span></p>        		
                                        <p><span style="font-size: 13px; text-align: center;"></span></p>        		
                                    </div>


                                </div>

                                <div class="col-lg-3 col-sm-3 item ">

                                    <!-- Titolo -->
                                    <div class="board-title">
                                        <h3 style="text-align: center; font-size: 16px; margin-bottom: 5px;">史磊</h3>
                                        </a>
                                    </div>

                                    <!-- Immagine -->
                                    <center>
                                        <a href="/" target="_blank" alt="史磊">
                                            <img src="cv/professional/shilei.jpg " alt="牛颖异" class="img-responsive board-image"/>
                                        </a>
                                    </center>

                                    <!-- Deascrizione -->
                                    <div class="margint10 board-description">
                                        <p><span style="font-size: 13px; text-align: center;">意大利IT工程师</span></p>
                                        <p><span style="font-size: 13px; text-align: center;">曾获得2012年BMW宝马公司编程大赛头等奖</span></p>
                                        <p><span style="font-size: 13px; text-align: center;">2014年获得意大利拉齐奥大区政府创业资助</span></p>

                                    </div>
                                </div>

                                
                                
                                                                                            
                            </div>
                        </center>

                    </div>
                </div>







                <!--professional members style 2-->

                <div class="container-grey">
                    <div class="container">

                        <center>                    
                            <h1 style="margin-top: 60px; margin-bottom: 60px; font-size: 42px">专业会员介绍</h1>
                        </center>
                        <center><p class="margint20" style="font-family: HelveticaNeueLTCom45Light; font-size: 16px; text-transform:uppercase; max-width: 850px;"></p>
                        </center>



                        <center>
                            <div class="row portfolio-box">

                                <!--<div class="col-lg-1 col-sm-1 item ">

                                    <center>
                                        <ul class="prtfl-list-controller margint40 clearfix" style="margin-left:0; margin-right:0; margin-bottom: 60px;">
                                            <li><a id="prev" href="/"><i class="icon-angle-left"></i></a></li>
                                        </ul>
                                    </center>
                                </div>
                                -->
                                <div class="col-lg-12 col-sm-12 item ">

                                    <ul class="prtfl-list">

                                        <li>
                                            <center>
                                                <a href="/index.php/chi-siamo#testimonial"><img src="http://www.innovactionlab.org/media/k2/items/cache/d4ece76a0fc75091c09eca5036691827_M.jpg" alt="EMIL ABIRASCID" class="testimonial-image" style="width: 100px"/></a>
                                                <p class="testimonial-title margint10 testimonial-text-home">EMIL ABIRASCID</p>
                                            </center>
                                        </li>
                                        <li>
                                            <center>
                                                <a href="/index.php/chi-siamo#testimonial"><img src="http://www.innovactionlab.org/media/k2/items/cache/7d2898c3630feea92ec1553d16389ff6_M.jpg" alt="GIOVANNI NATELLA" class="testimonial-image" style="width: 100px"/></a>
                                                <p class="testimonial-title margint10 testimonial-text-home">GIOVANNI NATELLA</p>
                                            </center>
                                        </li>
                                        <li>
                                            <center>
                                                <a href="/index.php/chi-siamo#testimonial"><img src="http://www.innovactionlab.org/media/k2/items/cache/cca34d17b5186097267678a76444a0b0_M.jpg" alt="LUCA ESPOSITO" class="testimonial-image" style="width: 100px"/></a>
                                                <p class="testimonial-title margint10 testimonial-text-home">LUCA ESPOSITO</p>
                                            </center>
                                        </li>
                                        <li>
                                            <center>
                                                <a href="/index.php/chi-siamo#testimonial"><img src="http://www.innovactionlab.org/media/k2/items/cache/c9e8d9069e929f4898939a62f1adcffd_M.jpg" alt="PAOLO DE SANTIS" class="testimonial-image" style="width: 100px"/></a>
                                                <p class="testimonial-title margint10 testimonial-text-home">PAOLO DE SANTIS</p>
                                            </center>
                                        </li>
                                        <li>
                                            <center>
                                                <a href="/index.php/chi-siamo#testimonial"><img src="http://www.innovactionlab.org/media/k2/items/cache/fff4548682445ceca36c12620f894d26_M.jpg" alt="ANDREA COLOMBO" class="testimonial-image" style="width: 100px"/></a>
                                                <p class="testimonial-title margint10 testimonial-text-home">ANDREA COLOMBO</p>
                                            </center>
                                        </li>
                                        <li>
                                            <center>
                                                <a href="/index.php/chi-siamo#testimonial"><img src="http://www.innovactionlab.org/media/k2/items/cache/f9bbdeb62248e2fc4418a6935e64cf4c_M.jpg" alt="MAURIZIO CARMIGNANI" class="testimonial-image" style="width: 100px"/></a>
                                                <p class="testimonial-title margint10 testimonial-text-home">MAURIZIO CARMIGNANI</p>
                                            </center>
                                        </li>
                                        <li>
                                            <center>
                                                <a href="/index.php/chi-siamo#testimonial"><img src="http://www.innovactionlab.org/media/k2/items/cache/d382bd8ae87d9139df6458192532657c_M.jpg" alt="ANTONELLO SCANO" class="testimonial-image" style="width: 100px"/></a>
                                                <p class="testimonial-title margint10 testimonial-text-home">ANTONELLO SCANO</p>
                                            </center>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <center>
                                <ul class="prtfl-list-controller margint40 clearfix" style="margin-left:0; margin-right:0; margin-bottom: 60px;">
                                    <li><a id="prev" href="/"><i class="icon-angle-left"></i></a></li>
                                    <li>                                   
                                        <div class="bigbutton-place">
                                            <a href="/index.php/chi-siamo#testimonial" class="events-link" style="font-size:23px; color:#fff !important;">所有会员</a>
                                        </div>                              
                                    </li>
                                    <li><a id="next" href="/"><i class="icon-angle-right"></i></a></li>
                                </ul>
                            </center>

                    </div>

                </div>



                <!--professional members -->
                <div class="container">
                    <h1 style="margin-top: 60px; margin-bottom: 60px; font-size: 42px">专业会员介绍</h1>
                    <div class="row portfolio-box">
                        <div class="col-lg-3 col-sm-3 item  testimonial-main-container">
                            <a href="http://it.linkedin.com/in/emilabirascid" target="_blank" alt="EMIL ABIRASCID"> 
                                <!-- Immagine -->
                                <div class="col-lg-4 testimonial-right-column">
                                    <div class="testimonial-image-container">
                                        <img src="http://www.innovactionlab.org/media/k2/items/cache/d4ece76a0fc75091c09eca5036691827_M.jpg" alt="EMIL ABIRASCID" class="testimonial-image"/> 
                                        <img src="http://www.innovactionlab.org/images/linkedinSquare.jpg" class="testimonial-linkedin-image"/>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-sm-8 testimonial-content">
                                    <!-- Titolo -->
                                    <div>
                                        <p class="testimonial-title testimonial-text-align">EMIL ABIRASCID</p>
                                    </div>
                                    <!-- Deascrizione -->
                                    <div class="testimonial-description">
                                        <p>Innovologist - journalist</p>        			
                                    </div>
                                </div>               
                            </a>            
                        </div>



                        <div class="col-lg-3 col-sm-3 item  testimonial-main-container">
                            <a href="http://fr.linkedin.com/in/gfn87" target="_blank" alt="GIOVANNI NATELLA"> 

                                <!-- Immagine -->
                                <div class="col-lg-4 testimonial-right-column">
                                    <div class="testimonial-image-container">
                                        <img src="http://www.innovactionlab.org/media/k2/items/cache/7d2898c3630feea92ec1553d16389ff6_M.jpg" alt="GIOVANNI NATELLA" class="testimonial-image"/> 
                                        <img src="http://www.innovactionlab.org/images/linkedinSquare.jpg" class="testimonial-linkedin-image"/>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-sm-8 testimonial-content">

                                    <!-- Titolo -->
                                    <div>
                                        <p class="testimonial-title testimonial-text-align">GIOVANNI NATELLA</p>
                                    </div>

                                    <!-- Deascrizione -->
                                    <div class="testimonial-description">
                                        <p>Director at iStarter</p>        			</div>

                                </div>               

                            </a>            
                        </div>



                        <div class="col-lg-3 col-sm-3 item  testimonial-main-container">
                            <a href="http://ch.linkedin.com/in/lucaesposito" target="_blank" alt="LUCA ESPOSITO"> 

                                <!-- Immagine -->
                                <div class="col-lg-4 testimonial-right-column">
                                    <div class="testimonial-image-container">
                                        <img src="http://www.innovactionlab.org/media/k2/items/cache/cca34d17b5186097267678a76444a0b0_M.jpg" alt="LUCA ESPOSITO" class="testimonial-image"/> 
                                        <img src="http://www.innovactionlab.org/images/linkedinSquare.jpg" class="testimonial-linkedin-image"/>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-sm-8 testimonial-content">

                                    <!-- Titolo -->
                                    <div>
                                        <p class="testimonial-title testimonial-text-align">LUCA ESPOSITO</p>
                                    </div>

                                    <!-- Deascrizione -->
                                    <div class="testimonial-description">
                                        <p>Oracle EMEA Senior Account Manager for Insight Technologies</p>        			</div>

                                </div>               

                            </a>            
                        </div>



                        <div class="col-lg-3 col-sm-3 item  testimonial-main-container">
                            <a href="http://www.linkedin.com/in/desantispaolo" target="_blank" alt="PAOLO DE SANTIS"> 

                                <!-- Immagine -->
                                <div class="col-lg-4 testimonial-right-column">
                                    <div class="testimonial-image-container">
                                        <img src="http://www.innovactionlab.org/media/k2/items/cache/c9e8d9069e929f4898939a62f1adcffd_M.jpg" alt="PAOLO DE SANTIS" class="testimonial-image"/> 
                                        <img src="http://www.innovactionlab.org/images/linkedinSquare.jpg" class="testimonial-linkedin-image"/>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-sm-8 testimonial-content">

                                    <!-- Titolo -->
                                    <div>
                                        <p class="testimonial-title testimonial-text-align">PAOLO DE SANTIS</p>
                                    </div>

                                    <!-- Deascrizione -->
                                    <div class="testimonial-description">
                                        <p>Co-founder at Chupamobile Limited</p>        			</div>

                                </div>               

                            </a>            
                        </div>

                        <div class="clr"></div>

                        <div class="col-lg-3 col-sm-3 item  testimonial-main-container">
                            <a href="http://it.linkedin.com/pub/andrea-colombo/47/a70/a30" target="_blank" alt="ANDREA COLOMBO"> 

                                <!-- Immagine -->
                                <div class="col-lg-4 testimonial-right-column">
                                    <div class="testimonial-image-container">
                                        <img src="http://www.innovactionlab.org/media/k2/items/cache/fff4548682445ceca36c12620f894d26_M.jpg" alt="ANDREA COLOMBO" class="testimonial-image"/> 
                                        <img src="http://www.innovactionlab.org/images/linkedinSquare.jpg" class="testimonial-linkedin-image"/>
                                    </div>
                                </div>

                                <div class="col-lg-8 col-sm-8 testimonial-content">

                                    <!-- Titolo -->
                                    <div>
                                        <p class="testimonial-title testimonial-text-align">ANDREA COLOMBO</p>
                                    </div>

                                    <!-- Deascrizione -->
                                    <div class="testimonial-description">
                                        <p>COO U-start.biz</p>        			</div>

                                </div>               

                            </a>            
                        </div>
                    </div>
                </div>


                <!--business supporter ad -->
                <div class="container-grey">
                    <div class="container">
                        <div class="st-module module" id="Mod205">
                            <div class="module-inner">
                                <div class="module-ct">
                                    <div class="custom"  >
                                        <p> </p>
                                        <p> </p>
                                        <center>
                                            <h1 style="margin: 40px; font-size: 42px">社会联系</h1>
                                        </center>
                                        <p> </p>
                                        <div class="col-lg-2 col-sm-2 item ">
                                            <a href="http://www.ouhuaitaly.com/" target="_blank"> 
                                                <img class="img-responsive" src="images/supporter/ouhua.gif" alt="" style="float: left; margin-right: 30px; padding-top: 5px;" /></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 item ">
                                            <a href="http://www./" target="_blank"> 
                                                <img class="img-responsive" src="images/supporter/ouhua.gif" alt="" style="float: left; margin-right: 30px; padding-top: 5px;" /></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 item ">
                                            <a href="http://www./" target="_blank"> 
                                                <img class="img-responsive" src="images/supporter/ouhua.gif" alt="" style="float: left; margin-right: 30px; padding-top: 5px;" /></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 item ">
                                            <a href="http://www./" target="_blank"> 
                                                <img class="img-responsive" src="images/supporter/ouhua.gif" alt="" style="float: left; margin-right: 30px; padding-top: 5px;" /></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 item ">
                                            <a href="http://www./" target="_blank"> 
                                                <img class="img-responsive" src="images/supporter/ouhua.gif" alt="" style="float: left; margin-right: 30px; padding-top: 5px;" /></a>
                                        </div>
                                        <div class="col-lg-2 col-sm-2 item ">
                                            <a href="http://www./" target="_blank"> 
                                                <img class="img-responsive" src="images/supporter/ouhua.gif" alt="" style="float: left; margin-right: 30px; padding-top: 5px;" /></a>
                                        </div><p> </p>
                                        <p> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <center>
                        <p style="margin: 40px; font-size: 42px" id="founder-hover">&nbsp;</p>
                    </center>
                </div>

            </div>


            <!-- Previous Edition -->
            <div class="">
                <div class="st-divider " style="padding: 30px 0; border: none;"></div>
                <center>
                    <h1 style="margin-top: 0px; font-size: 42px">主办过的活动</h1>
                </center>
                <div class="st-divider " style="padding: 20px 0; border: none;"></div>

                <div class="container">
                    <div class="row portfolio-box">

                        <div class="col-lg-4 col-sm-4 item ">
                            <div class="catItemView blog-box groupLeading">
                                <div class="blg-img-box" style="width: 90%; height: auto;">
                                    <img 
                                        src="images/mainPageEventGallery/main_page_1.jpg"
                                        alt="天津滨海高新技术产业开发区召开投资与人才交流会" style="width: 100%; height: auto;">

                                        <div class="mask" >
                                            <div class="prt-lnk-wrppr editions-link clearfix">
                                                <div class="pull-left editions-popup popup">
                                                    <a href="/tianjin-2014.php"><h2>&nbsp;</h2></a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="editions-legend clearfix" style="width: 90%; height: auto;">
                                    <a href="/tianjin-2014.php">天津滨海高新技术产业开发区人才交流会</a>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-4 item ">
                            <div class="catItemView blog-box groupLeading">
                                <div class="blg-img-box" style="width: 90%; height: auto;">
                                    <img 
                                        src="images/mainPageEventGallery/main_page_2.jpg"
                                        alt="天津滨海高新技术产业开发区召开投资与人才交流会" style="width: 100%; height: auto;">
                                        <div class="mask" >
                                            <div class="prt-lnk-wrppr editions-link clearfix">
                                                <div class="pull-left editions-popup popup">
                                                    <a href="/tianjin-2014.php"><h2>&nbsp;</h2></a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="editions-legend clearfix" style="width: 90%; height: auto;">
                                    <a href="/tianjin-2014.php">天津滨海高新技术产业开发区人才交流会</a>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 item ">
                            <div class="catItemView blog-box groupLeading">
                                <div class="blg-img-box" style="width: 90%; height: auto;">
                                    <img 
                                        src="images/mainPageEventGallery/main_page_3.jpg"
                                        alt="天津滨海高新技术产业开发区召开投资与人才交流会" style="width: 100%; height: auto;">
                                        <div class="mask" >
                                            <div class="prt-lnk-wrppr editions-link clearfix">
                                                <div class="pull-left editions-popup popup">
                                                    <a href="/tianjin-2014.php"><h2>&nbsp;</h2></a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="editions-legend clearfix" style="width: 90%; height: auto;">
                                    <a href="/tianjin-2014.php">天津滨海高新技术产业开发区人才交流会</a>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 item ">
                            <div class="catItemView blog-box groupLeading">
                                <div class="blg-img-box" style="width: 90%; height: auto;">
                                    <img 
                                        src="images/mainPageEventGallery/main_page_4.jpg"
                                        alt="天津滨海高新技术产业开发区召开投资与人才交流会" style="width: 100%; height: auto;">
                                        <div class="mask" >
                                            <div class="prt-lnk-wrppr editions-link clearfix">
                                                <div class="pull-left editions-popup popup">
                                                    <a href="/tianjin-2014.php"><h2>&nbsp;</h2></a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="editions-legend clearfix" style="width: 90%; height: auto;">
                                    <a href="/tianjin-2014.php">天津滨海高新技术产业开发区人才交流会</a>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 item ">
                            <div class="catItemView blog-box groupLeading">
                                <div class="blg-img-box" style="width: 90%; height: auto;">
                                    <img 
                                        src="images/mainPageEventGallery/main_page_5.jpg"
                                        alt="天津滨海高新技术产业开发区召开投资与人才交流会" style="width: 100%; height: auto;">
                                        <div class="mask" >
                                            <div class="prt-lnk-wrppr editions-link clearfix">
                                                <div class="pull-left editions-popup popup">
                                                    <a href="/tianjin-2014.php"><h2>&nbsp;</h2></a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="editions-legend clearfix" style="width: 90%; height: auto;">
                                    <a href="/tianjin-2014.php">天津滨海高新技术产业开发区人才交流会</a>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-4 item ">
                            <div class="catItemView blog-box groupLeading">
                                <div class="blg-img-box" style="width: 90%; height: auto;">
                                    <img 
                                        src="images/mainPageEventGallery/main_page_6.jpg"
                                        alt="天津滨海高新技术产业开发区召开投资与人才交流会" style="width: 100%; height: auto;">
                                        <div class="mask" >
                                            <div class="prt-lnk-wrppr editions-link clearfix">
                                                <div class="pull-left editions-popup popup">
                                                    <a href="/tianjin-2014.php"><h2>&nbsp;</h2></a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="editions-legend clearfix" style="width: 90%; height: auto;">
                                    <a href="/tianjin-2014.php">天津滨海高新技术产业开发区人才交流会</a>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>







                    </div>
                </div>
            </div>


            <!-- SOCIAL MEDIA -->
            <div>
                <!--
                                                                       <div class="container">
                                                                           <p>&nbsp;</p>
                                                                           <p>&nbsp;</p>
                                                                           <h1 style="text-align: center;">SOCIAL MEDIA</h1>
                                                                           <p>&nbsp;</p>
                                                                       </div>
                                                                       <div class="container" style="padding: 0px !important">
                                                                           <div class='row'>
                                                                               <div class='col-lg-6 '>
                                                                                   <div class="container">
                <!-- START: Modules Anywhere -->
                <!--
                <script>!function (d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//platform.twitter.com/widgets.js";
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, "script", "twitter-wjs");</script>


                    <a class="twitter-timeline" href="https://twitter.com/@InnovLab"
                       data-widget-id="452930293221953536" data-theme="light"
                       data-link-color="" data-chrome="" data-border-color="">Tweets by
                        @@InnovLab</a>

                <!-- END: Modules Anywhere -->
                <!--
                                                                  </div>
                                                                              </div>
                                                                              <div class='col-lg-6 '>
                                                                                  <div class="container">
                                                                                      <div class="st-module module" id="Mod203">
                                                                                          <div class="module-inner">
                                                                                              <div class="module-ct">
              
                                                                                                  <script>(function (d, s, id) {
                                                                                                          var js, fjs = d.getElementsByTagName(s)[0];
                                                                                                          if (d.getElementById(id))
                                                                                                              return;
                                                                                                          js = d.createElement(s);
                                                                                                          js.id = id;
                                                                                                          js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1";
                                                                                                          fjs.parentNode.insertBefore(js, fjs);
                                                                                                      }(document, 'script', 'facebook-jssdk'));</script>
                                                                                                  <div class="cwlikebox100" id="cwlikebox1">
                                                                                                      <div id="likebox-wrapper">
                                                                                                          <div class='fb-like-box'
                                                                                                               data-href='https://www.facebook.com/InnovActionLab'
                                                                                                               data-width='200' data-height='492' data-colorscheme=''
                                                                                                               data-show_faces='0' data-show_border='0' data-stream='1'
                                                                                                               data-header='0' data-force_wall='0'></div>
                                                                                                      </div>
              
                                                                                                      <span class="cw-likebox-mod_copyrht"> Powered by <a
                                                                                                              target="_blank" title="CoalaWeb" href="http://coalaweb.com">CoalaWeb</a>
                                                                                                      </span>
                                                                                                  </div>
                                                                                              </div>
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                      <div class="container">
                                                                          <div class='st-divider ' style='padding: 30px 0; border: none;'></div>
                                                                      </div>
                                                                      <div class="container">
                                                                          <div class="st-module module" id="Mod0">
                                                                              <div class="module-inner">
                                                                                  <div class="module-ct">
              
              
                                                                                      <div class="custom"></div>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                -->
            </div>
        </div>

        <!--  Footer -->
        <div id="footer">
            <div class="container">
                <div class='margint30 marginb25 foo'><div class="container" style="padding: 0px !important">
                        <div class='row'>
                            <div class='col-lg-3 col-sm-6 '><div class="container">
                                    <div class="st-module module" id="Mod148">
                                        <div class="module-inner">
                                            <h3 class="module-title">
                                                <span>Info</span>
                                            </h3>
                                            <div class="module-ct">

                                                <div id="k2ModuleBox148" class="k2ItemsBlock">


                                                    <ul>
                                                        <li class="even lastItem">

                                                            <!-- Plugins: BeforeDisplay -->

                                                            <!-- K2 Plugins: K2BeforeDisplay -->




                                                            <!-- Plugins: AfterDisplayTitle -->

                                                            <!-- K2 Plugins: K2AfterDisplayTitle -->

                                                            <!-- Plugins: BeforeDisplayContent -->

                                                            <!-- K2 Plugins: K2BeforeDisplayContent -->

                                                            <div class="moduleItemIntrotext">

                                                                <p>客户服务邮箱：</p>
                                                                <p>apcitalia@hotmail.com</p>
                                                            </div>


                                                            <div class="clr"></div>


                                                            <div class="clr"></div>

                                                            <!-- Plugins: AfterDisplayContent -->

                                                            <!-- K2 Plugins: K2AfterDisplayContent -->








                                                            <!-- Plugins: AfterDisplay -->

                                                            <!-- K2 Plugins: K2AfterDisplay -->

                                                            <div class="clr"></div>
                                                        </li>
                                                        <li class="clearList"></li>
                                                    </ul>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  </div>
                            <div class='col-lg-3 col-sm-6 '><div class="container">
                                    <div class="st-module module" id="Mod111">
                                        <div class="module-inner">
                                            <h3 class="module-title">
                                                <span>About</span>
                                            </h3>
                                            <div class="module-ct">
                                                <ul class="footer-ul-style1">
                                                    <li class="item-177"><a href="/about-us.html" >关于我们</a></ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>  </div>
                            <div class='col-lg-3 col-sm-6 '><div class="container">
                                    <div class="st-module module" id="Mod150">
                                        <div class="module-inner">
                                            <h3 class="module-title">
                                                <span>Address</span>
                                            </h3>
                                            <div class="module-ct">

                                                <div id="k2ModuleBox150" class="k2ItemsBlock">


                                                    <ul>
                                                        <li class="even lastItem">

                                                            <!-- Plugins: BeforeDisplay -->

                                                            <!-- K2 Plugins: K2BeforeDisplay -->




                                                            <!-- Plugins: AfterDisplayTitle -->

                                                            <!-- K2 Plugins: K2AfterDisplayTitle -->

                                                            <!-- Plugins: BeforeDisplayContent -->

                                                            <!-- K2 Plugins: K2BeforeDisplayContent -->

                                                            <div class="moduleItemIntrotext">

                                                                <p>via giuseppe de leva 19
                                                                    roma, RM 00174 Italy</p>      	     
                                                            </div>


                                                            <div class="clr"></div>


                                                            <div class="clr"></div>

                                                            <!-- Plugins: AfterDisplayContent -->

                                                            <!-- K2 Plugins: K2AfterDisplayContent -->








                                                            <!-- Plugins: AfterDisplay -->

                                                            <!-- K2 Plugins: K2AfterDisplay -->

                                                            <div class="clr"></div>
                                                        </li>
                                                        <li class="clearList"></li>
                                                    </ul>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='col-lg-3 col-sm-6 '><div class="container">
                                    <div class="st-module module" id="Mod149">
                                        <div class="module-inner">
                                            <h3 class="module-title">
                                                <span>Copyrights</span>
                                            </h3>
                                            <div class="module-ct">

                                                <div id="k2ModuleBox149" class="k2ItemsBlock">


                                                    <ul>
                                                        <li class="even lastItem">

                                                            <!-- Plugins: BeforeDisplay -->

                                                            <!-- K2 Plugins: K2BeforeDisplay -->




                                                            <!-- Plugins: AfterDisplayTitle -->

                                                            <!-- K2 Plugins: K2AfterDisplayTitle -->

                                                            <!-- Plugins: BeforeDisplayContent -->

                                                            <!-- K2 Plugins: K2BeforeDisplayContent -->

                                                            <div class="moduleItemIntrotext">

                                                                <p>©2014 APCI<span style="line-height: 1.3em;"> </span></p>
                                                                <p><span style="line-height: 1.3em;">会标设计：王雪莹</span></p>
                                                                <p><a href="http://www.apci-italia.it/" target="_blank" title="Tecnojam"><span style="line-height: 1.3em;"><img src="images/logo_footer.png" alt="" /></span></a></p>
                                                                <p><span style="line-height: 1.3em;"></span></p>
                                                                <p><span style="line-height: 1.3em;">技术支持：史磊</span></p>


                                                                <div class="clr"></div>


                                                                <div class="clr"></div>

                                                                <!-- Plugins: AfterDisplayContent -->

                                                                <!-- K2 Plugins: K2AfterDisplayContent -->








                                                                <!-- Plugins: AfterDisplay -->

                                                                <!-- K2 Plugins: K2AfterDisplay -->

                                                                <div class="clr"></div>
                                                        </li>
                                                        <li class="clearList"></li>
                                                    </ul>



                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>


        <div class="custom"  >
            <div><a class="scrollup" href="#"><i class="icon-angle-up"></i></a></div></div>


        <!--StatCounter website statistic-->    
        <!--cnzz website statistic-->
        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cspan id='cnzz_stat_icon_1254054430'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1254054430' type='text/javascript'%3E%3C/script%3E"));</script>

        <!-- Start of StatCounter Code for Default Guide -->
        <script type="text/javascript">
            var sc_project = 10225486;
            var sc_invisible = 0;
            var sc_security = "1578c8e5";
            var scJsHost = (("https:" == document.location.protocol) ?
                    "https://secure." : "http://www.");
            document.write("<sc" + "ript type='text/javascript' src='" +
                    scJsHost +
                    "statcounter.com/counter/counter.js'></" + "script>");
        </script>
        <noscript><div class="statcounter"><a title="shopify visitor
                                              statistics" href="http://statcounter.com/shopify/"
                                              target="_blank"><img class="statcounter"
                                     src="http://c.statcounter.com/10225486/0/1578c8e5/0/"
                                     alt="shopify visitor statistics"></a></div></noscript>
        <!-- End of StatCounter Code for Default Guide -->


    </body>
</html>


<?php
/* */
$app->run();
?>