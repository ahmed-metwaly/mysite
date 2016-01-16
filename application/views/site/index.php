<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ahmed Metwaly</title>
        <base href="<?php echo base_url() . 'ui/site/'; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <!--Bootstrap-->
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <!-- Custom styles -->
        <link href="css/custom.css" rel="stylesheet" media="screen">
        <link href="css/animations.css" rel="stylesheet" media="screen">
        <!-- Modernizr -->
        <script src="js/modernizr.custom.js"></script>
        <!--[if lt IE 9]>
          <link href="css/ie8.css" rel="stylesheet" media="screen">
          <script src="js/html5shiv.js" type="text/javascript"></script>
        <![endif]-->
        <!--Background Images-->
        <style>
            .bg-image1 { background: url(./img/bgs/1.jpg) no-repeat; }
            .bg-image2 { background: url(./img/bgs/2.jpg) no-repeat; }
            .bg-image3 { background: url(./img/bgs/3.jpg) no-repeat; }
            .bg-image4 { background: url(./img/bgs/4.jpg) no-repeat; }
            .bg-image5 { background: url(./img/bgs/5.jpg) no-repeat; }
            .bg-image6 { background: url(./img/bgs/6.jpg) no-repeat; }
        </style>
    </head>

    <!--Body-->
    <body>
        <div id="pt-main" class="pt-perspective">

            <!--Home Screen-->
            <article class="pt-page pt-page-1 bg-image1" id="home">
                <div class="outer-wrapper">
                    <!--Header-->
                    <header class="row-fluid">
                        <div class="container">
                            <div class="span8 logo">
                                <h1>Ahmed</h1>
                            </div>
                            <div class="span4">
                                <ul class="social-bar-white transparent">
                                    <li><a class="facebook-white" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-white" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-white" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-white" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-white" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <!--Navigation-->
                    <nav class="navi row-fluid transparent">
                        <div class="container">
                            <div class="span12 clearfix">
                                <div class="span4">
                                    <a class="small-navi about page-transition" href="#about" onclick="gotoPageWithTrans1(1)" title="About Us"><i class="navi-icons about-icon"></i>About Us</a>
                                    <a class="small-navi team page-transition" href="#team" onclick="gotoPageWithTrans1(2)" title="Our Team"><i class="navi-icons team-icon"></i>Our Team</a>
                                    <a class="middle-navi resume" href="#" title="Resume" target="_blank"><i class="navi-icons resume-icon"></i>Resume</a>
                                </div>
                                <div class="span4">
                                    <a class="big-navi works page-transition" href="#works" onclick="gotoPageWithTrans1(3)" title="Our Works"><i class="navi-icons works-icon"></i>Our Works</a>
                                </div>
                                <div class="span4">
                                    <a class="middle-navi contacts page-transition" href="#contacts" onclick="gotoPageWithTrans1(4)" title="Contacts"><i class="navi-icons contacts-icon"></i>Contacts</a>
                                    <a class="small-navi blog page-transition" href="#blog" onclick="gotoPageWithTrans1(5)" title="Blog"><i class="navi-icons blog-icon"></i>Blog</a>
                                    <a class="small-navi feedback page-transition" href="#feedback" onclick="gotoPageWithTrans1(6)" title="Feedback"><i class="navi-icons feedback-icon"></i>Feedback</a>
                                </div>
                            </div>
                        </div>
                    </nav>
                    <section class="container">
                        <div class="clearfix">
                            <div class="tw-feed transparent">
                                <p>Duis tincidunt erat quam. Etiam placerat sapien elit. Pellentesque egestas ornare sagittis. Sed augue lorem, dignissim eget bibendum vitae, scelerisque eget justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                            </div>
                            <div class="tw-feed-author">
                                <a href="#" title="@Nikson">@Nikson</a><span>, 10 min ago</span>
                            </div>
                        </div>
                    </section>
                    <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
                </div>
                <!--Footer-->
                <footer>
                    <div class="container">
                        <p>Copyright &copy; ItemBridge inc., 2013</p>
                    </div>
                </footer>
            </article>

            <!--About Screen-->
            <article class="pt-page pt-page-2 bg-image2" id="about">
                <div class="outer-wrapper overlay-green1">
                    <!--Header-->
                    <header class="row-fluid">
                        <div class="container">
                            <div class="span8 relative">
                                <div class="page-navi">
                                    <a class="home-page page-transition" href="#home" onclick="gotoPageWithTrans2(0)" title="Go Home"></a>
                                    <a class="prev-page page-transition" href="#about" onclick="gotoPageWithTrans3(6)" title="Go To Previous Page"></a>
                                </div>
                                <h1>About Us</h1>
                                <nav class="submenu page2-submenu">
                                    <ul>
                                        <li class="current"><a href="#about">About Us</a></li>
                                        <li class="inline"><a href="#team" class="page-transition" onclick="gotoPageWithTrans4(2)">Our Team</a></li>
                                        <li><a href="#works" class="page-transition" onclick="gotoPageWithTrans4(3)">Our Works</a></li>
                                        <li><a href="#contacts" class="page-transition" onclick="gotoPageWithTrans4(4)">Contact Us</a></li>
                                        <li><a href="#blog" class="page-transition" onclick="gotoPageWithTrans4(5)">Our Blog</a></li>
                                        <li><a href="#feedback" class="page-transition" onclick="gotoPageWithTrans4(6)">Feedback</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="span4">
                                <ul class="social-bar-white">
                                    <li><a class="facebook-white" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-white" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-white" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-white" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-white" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <!--Content-->
                    <section class="row-fluid">
                        <div class="container">
                            <div class="quotation span12 clearfix">
                                <div class="quotation-mark"></div>
                                <p>Duis tincidunt erat quam. Etiam placerat sapien elit. Pellentesque egestas ornare sagittis. Sed augue lorem, dignissim eget bibendum vitae, scelerisque eget justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                <span class="quotation-author">Mark Nikson, General director</span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="span6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas neque diam, luctus at laoreet in, auctor ut tellus. Etiam enim lacus, ornare et tempor et, rhoncus rhoncus sem. Cras in velit ante, eget pellentesque sem.</p>
                            </div>
                            <div class="span6">
                                <p>Praesent rhoncus nunc vitae metus condimentum viverra. Fusce sed est orci, vel condimentum felis. Suspendisse ullamcorper vulputate sagittis. Quisque ullamcorper euismod diam at bibendum. Duis tincidunt erat quam. Etiam placerat sapien.</p>
                            </div>
                        </div>
                    </section>
                    <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
                </div>
                <!--Footer-->
                <footer>
                    <div class="container">
                        <p>Copyright &copy; ItemBridge inc., 2013</p>
                    </div>
                </footer>
            </article>

            <!--Our Team Screen-->
            <article class="pt-page pt-page-3 bg-image3" id="team">
                <div class="outer-wrapper overlay-green2">
                    <!--Header-->
                    <header class="row-fluid">
                        <div class="container">
                            <div class="span8 relative">
                                <div class="page-navi">
                                    <a class="home-page page-transition" href="#home" onclick="gotoPageWithTrans2(0)" title="Go Home"></a>
                                    <a class="prev-page page-transition" href="#about" onclick="gotoPageWithTrans3(1)" title="Go To Previous Page"></a>
                                </div>
                                <h1>Our Team</h1>
                                <nav class="submenu page3-submenu">
                                    <ul>
                                        <li><a href="#about" class="page-transition" onclick="gotoPageWithTrans5(1)">About Us</a></li>
                                        <li class="current"><a href="#team">Our Team</a></li>
                                        <li class="inline"><a href="#works" class="page-transition" onclick="gotoPageWithTrans4(3)">Our Works</a></li>
                                        <li><a href="#contacts" class="page-transition" onclick="gotoPageWithTrans4(4)">Contact Us</a></li>
                                        <li><a href="#blog" class="page-transition" onclick="gotoPageWithTrans4(5)">Our Blog</a></li>
                                        <li><a href="#feedback" class="page-transition" onclick="gotoPageWithTrans4(6)">Feedback</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="span4">
                                <ul class="social-bar-white">
                                    <li><a class="facebook-white" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-white" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-white" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-white" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-white" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <!--Content-->
                    <section class="row-fluid">
                        <div class="container">
                            <div class="span12">
                                <p>Etiam enim lacus, ornare et tempor et, rhoncus rhoncus sem. Cras in velit ante, eget pellentesque sem. Duis tincidunt erat quam. Etiam placerat sapien. Fusce sed est orci, vel condimentum felis. Phasellus et enim sed est dictum luctus a in nibh. In metus dolor, interdum eget consectetur vel, ornare sodales felis.</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="span4 team-mate">
                                <span class="figcap"></span>
                                <a href="#" title="Michael Jonson">
                                    <img src="img/team/johnson.jpg" alt="Michael Jonson">
                                    <h2>Michael Jonson</h2>
                                    <h3>Chief Executive Officer</h3>
                                </a>
                                <p>Praesent rhoncus nunc vitae metus condiment viverra. Fusce sed est orci, condimentum felis. Suspendisse ullamcorper.</p>
                                <ul class="social-bar2">
                                    <li><a class="facebook-black" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-black" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-black" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-black" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-black" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                            <div class="span4 team-mate">
                                <span class="figcap"></span>
                                <a href="#" title="Mike Brin">
                                    <img src="img/team/brin.jpg" alt="Mike Brin">
                                    <h2>Mike Brin</h2>
                                    <h3>Technical Director</h3>
                                </a>
                                <p>Praesent rhoncus nunc vitae metus condiment viverra. Fusce sed est orci, condimentum felis. Suspendisse ullamcorper.</p>
                                <ul class="social-bar2">
                                    <li><a class="facebook-black" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-black" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-black" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-black" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-black" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                            <div class="span4 team-mate">
                                <span class="figcap"></span>
                                <a href="#" title="Rayan Green">
                                    <img src="img/team/green.jpg" alt="Rayan Green">
                                    <h2>Rayan Green</h2>
                                    <h3>Art Director</h3>
                                </a>
                                <p>Praesent rhoncus nunc vitae metus condiment viverra. Fusce sed est orci, condimentum felis. Suspendisse ullamcorper.</p>
                                <ul class="social-bar2">
                                    <li><a class="facebook-black" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-black" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-black" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-black" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-black" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
                </div>
                <!--Footer-->
                <footer>
                    <div class="container">
                        <p>Copyright &copy; ItemBridge inc., 2013</p>
                    </div>
                </footer>
            </article>

            <!--Our Works Screen-->
            <article class="pt-page pt-page-4 bg-image4" id="works">
                <div class="outer-wrapper overlay-blue">
                    <!--Header-->
                    <header class="row-fluid">
                        <div class="container">
                            <div class="span8 relative">
                                <div class="page-navi">
                                    <a class="home-page page-transition" href="#home" onclick="gotoPageWithTrans2(0)" title="Go Home"></a>
                                    <a class="prev-page page-transition" href="#team" onclick="gotoPageWithTrans3(2)" title="Go To Previous Page"></a>
                                </div>
                                <h1>Our Works</h1>
                                <nav class="submenu page4-submenu">
                                    <ul>
                                        <li><a href="#about" class="page-transition" onclick="gotoPageWithTrans5(1)">About Us</a></li>
                                        <li><a href="#team" class="page-transition" onclick="gotoPageWithTrans5(2)">Our Team</a></li>
                                        <li class="current"><a href="#works">Our Works</a></li>
                                        <li class="inline"><a href="#contacts" class="page-transition" onclick="gotoPageWithTrans4(4)">Contact Us</a></li>
                                        <li><a href="#blog" class="page-transition" onclick="gotoPageWithTrans4(5)">Our Blog</a></li>
                                        <li><a href="#feedback" class="page-transition" onclick="gotoPageWithTrans4(6)">Feedback</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="span4">
                                <ul class="social-bar-white">
                                    <li><a class="facebook-white" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-white" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-white" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-white" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-white" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <!--Content-->
                    <section class="row-fluid">
                        <div class="container">
                            <div class="span12">
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis tincidunt erat quam. Etiam placerat sapien elit. Pellentesque egestas ornare sagittis. Sed augue lorem, dignissim eget bibendum vitae, scelerisque eget justo.</p>
                            </div>
                        </div>
                        <div class="container">

                            <div id="filterOptions" class="portfolio-toolbar toolbar">
                                <a href="#" class="category active" data-target="all">All</a>
                                <a href="#" class="category" data-target="graphic-design">Graphic Design</a>
                                <a href="#" class="category" data-target="other">Other</a>
                                <a href="#" class="category" data-target="web-design">Web Design</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="clearfix"></div>

                            <ul class="og-grid ourHolder">
                                <li class="item-p" data-id="id-1" data-type="web-design">
                                    <a href="http://www.google.com" data-largesrc="img/works/w1_b.jpg" data-title="Duis Sid Amet" data-category="Web Design" data-client="Brand" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.">
                                        <span class="figcap"></span>
                                        <img src="img/works/w1_s.jpg" alt="Duis Sid Amet"/>
                                        <h2>Duis Sid Amet</h2>
                                        <h3>Web design</h3>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="item-p" data-id="id-2" data-type="graphic-design">
                                    <a href="#" data-largesrc="img/works/w2_b.jpg" data-title="Etiam Placerat" data-category="Graphic design" data-client="Brand" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.">
                                        <span class="figcap"></span>
                                        <img src="img/works/w2_s.jpg" alt="Etiam Placerat"/>
                                        <h2>Etiam Placerat</h2>
                                        <h3>Graphic design</h3>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="item-p" data-id="id-3" data-type="other">
                                    <a href="#" data-largesrc="img/works/w3_b.jpg" data-title="Egestas Ornare" data-category="Other" data-client="Brand" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.">
                                        <span class="figcap"></span>
                                        <img src="img/works/w3_s.jpg" alt="Egestas Ornare"/>
                                        <h2>Egestas Ornare</h2>
                                        <h3>Other</h3>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="item-p" data-id="id-4" data-type="graphic-design">
                                    <a href="#" data-largesrc="img/works/w4_b.jpg" data-title="Degnissim" data-category="Graphic design" data-client="Brand" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.">
                                        <span class="figcap"></span>
                                        <img src="img/works/w4_s.jpg" alt="Degnissim"/>
                                        <h2>Degnissim</h2>
                                        <h3>Graphic design</h3>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="item-p" data-id="id-5" data-type="web-design">
                                    <a href="#" data-largesrc="img/works/w5_b.jpg" data-title="Eget Justo" data-category="Web design" data-client="Brand" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.">
                                        <span class="figcap"></span>
                                        <img src="img/works/w5_s.jpg" alt="Eget Justo"/>
                                        <h2>Eget Justo</h2>
                                        <h3>Web design</h3>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li class="item-p" data-id="id-6" data-type="other">
                                    <a href="#" data-largesrc="img/works/w6_b.jpg" data-title="Bibendum" data-category="Other" data-client="Brand" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ac augue at erat hendrerit dictum. Praesent porta, purus eget sagittis imperdiet.">
                                        <span class="figcap"></span>
                                        <img src="img/works/w6_s.jpg" alt="Bibendum"/>
                                        <h2>Bibendum</h2>
                                        <h3>Other</h3>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </section>
                    <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
                </div>
                <!--Footer-->
                <footer>
                    <div class="container">
                        <p>Copyright &copy; ItemBridge inc., 2013</p>
                    </div>
                </footer>
            </article>

            <!--Contact Us Screen-->
            <article class="pt-page pt-page-5 bg-image5" id="contacts">
                <div class="outer-wrapper overlay-pink">
                    <!--Header-->
                    <header class="row-fluid">
                        <div class="container">
                            <div class="span8 relative">
                                <div class="page-navi">
                                    <a class="home-page page-transition" href="#home" onclick="gotoPageWithTrans2(0)" title="Go Home"></a>
                                    <a class="prev-page page-transition" href="#works" onclick="gotoPageWithTrans3(3)" title="Go To Previous Page"></a>
                                </div>
                                <h1>Contact Us</h1>
                                <nav class="submenu page5-submenu">
                                    <ul>
                                        <li><a href="#about" class="page-transition" onclick="gotoPageWithTrans5(1)">About Us</a></li>
                                        <li><a href="#team" class="page-transition" onclick="gotoPageWithTrans5(2)">Our Team</a></li>
                                        <li><a href="#works" class="page-transition" onclick="gotoPageWithTrans5(3)">Our Works</a></li>
                                        <li class="current"><a href="#contacts">Contact Us</a></li>
                                        <li class="inline"><a href="#blog" class="page-transition" onclick="gotoPageWithTrans4(5)">Our Blog</a></li>
                                        <li><a href="#feedback" class="page-transition" onclick="gotoPageWithTrans4(6)">Feedback</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="span4">
                                <ul class="social-bar-white">
                                    <li><a class="facebook-white" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-white" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-white" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-white" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-white" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <!--Content-->
                    <section class="row-fluid">
                        <div class="container">
                            <div class="span4 addspace">
                                <h2>Address</h2>
                                <p>49 Archdale, 2B Charleston, New York City,<br/>USA</p>
                            </div>
                            <div class="span4 addspace">
                                <h2>Phone</h2>
                                <p>Support: +777 (100) 1234 (10am - 6pm)</p>
                                <p>Director: +777 (100) 1243 (6am - 11pm)</p>
                            </div>
                            <div class="span4 addspace">
                                <h2>Email</h2>
                                <p>Support: <a href="mailto:support@example.com" title="mailto:support@example.com">support@example.com</a></p>
                                <p>Director: <a href="mailto:chief@example.com" title="mailto:chief@example.com">chief@example.com</a></p>
                            </div>
                        </div>
                    </section>
                    <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
                </div>
                <!--Footer-->
                <footer>
                    <div class="container">
                        <p>Copyright &copy; ItemBridge inc., 2013</p>
                    </div>
                </footer>
            </article>


            <!--Blog Screen-->
            <article class="pt-page pt-page-6 bg-image6" id="blog">
                <div class="outer-wrapper overlay-orange">
                    <!--Header-->
                    <header class="row-fluid">
                        <div class="container">
                            <div class="span8 relative">
                                <div class="page-navi">
                                    <a class="home-page page-transition" href="#home" onclick="gotoPageWithTrans2(0)" title="Go Home"></a>
                                    <a class="prev-page page-transition" href="#contacts" onclick="gotoPageWithTrans3(4)" title="Go To Previous Page"></a>
                                </div>
                                <h1>Our Blog</h1>
                                <nav class="submenu page6-submenu">
                                    <ul>
                                        <li><a href="#team" class="page-transition" onclick="gotoPageWithTrans5(2)">Our Team</a></li>
                                        <li><a href="#works" class="page-transition" onclick="gotoPageWithTrans5(3)">Our Works</a></li>
                                        <li><a href="#contacts" class="page-transition" onclick="gotoPageWithTrans5(4)">Contact Us</a></li>
                                        <li class="current"><a href="#blog">Our Blog</a></li>
                                        <li class="inline"><a href="#feedback" class="page-transition" onclick="gotoPageWithTrans4(6)">Feedback</a></li>
                                        <li><a href="#about" class="page-transition" onclick="gotoPageWithTrans5(1)">About Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="span4">
                                <ul class="social-bar-white">
                                    <li><a class="facebook-white" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-white" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-white" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-white" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-white" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <!--Content-->
                    <section class="row-fluid">
                        <div class="container blogpost-row">
                            <div class="span6">
                                <a class="blogpost page-transition" href="#blog-single" onclick="gotoPageWithTrans6(7)">
                                    <span class="figcap"></span>
                                    <h2>Etiam Tristique Consectetu</h2>
                                    <span class="post-meta">Mike Example, 03.11.2012&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="comments-icon"></i>&nbsp;3</span>
                                    <p>ChiefNullam interdum accumsan diam, dictum tempor nisl pretium. Etiam nulla velit, tempor vitae dolor eget, aliquam posuere nulla. Morbi vestibulum dui ut orci commodo, ut ornare dui mattis... </p>
                                </a>
                            </div>
                            <div class="span6">
                                <a class="blogpost page-transition" href="#blog-single" onclick="gotoPageWithTrans6(7)">
                                    <span class="figcap"></span>
                                    <h2>Curabitur Egestas Est</h2>
                                    <span class="post-meta">Mike Example, 03.11.2012&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="comments-icon"></i>&nbsp;3</span>
                                    <p>Etiam bibendum felis non porta venenatis. Maecenas sit amet quam sit amet ipsum rutrum egestas. Curabitur quis ligula ante. Fusce lectus neque, consectetur eu pretium eu, pellentesque quis dui...</p>
                                </a>
                            </div>
                        </div>
                        <div class="container blogpost-row">
                            <div class="span6">
                                <a class="blogpost page-transition" href="#blog-single" onclick="gotoPageWithTrans6(7)">
                                    <span class="figcap"></span>
                                    <h2>Etiam Tristique Consectetu</h2>
                                    <span class="post-meta">Mike Example, 03.11.2012&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="comments-icon"></i>&nbsp;3</span>
                                    <p>ChiefNullam interdum accumsan diam, dictum tempor nisl pretium. Etiam nulla velit, tempor vitae dolor eget, aliquam posuere nulla. Morbi vestibulum dui ut orci commodo, ut ornare dui mattis... </p>
                                </a>
                            </div>
                            <div class="span6">
                                <a class="blogpost page-transition" href="#blog-single" onclick="gotoPageWithTrans6(7)">
                                    <span class="figcap"></span>
                                    <h2>Curabitur Egestas Est</h2>
                                    <span class="post-meta">Mike Example, 03.11.2012&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="comments-icon"></i>&nbsp;3</span>
                                    <p>Etiam bibendum felis non porta venenatis. Maecenas sit amet quam sit amet ipsum rutrum egestas. Curabitur quis ligula ante. Fusce lectus neque, consectetur eu pretium eu, pellentesque quis dui...</p>
                                </a>
                            </div>
                        </div>
                        <div class="container blogpost-row">
                            <a class="load-more-btn" href="#"><span class="figcap"></span><p>Load more</p></a>
                        </div>
                    </section>
                    <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
                </div>
                <!--Footer-->
                <footer>
                    <div class="container">
                        <p>Copyright &copy; ItemBridge inc., 2013</p>
                    </div>
                </footer>
            </article>

            <!--Feedback Screen-->
            <article class="pt-page pt-page-7 bg-image6" id="feedback">
                <div class="outer-wrapper overlay-brown">
                    <!--Header-->
                    <header class="row-fluid">
                        <div class="container">
                            <div class="span8 relative">
                                <div class="page-navi">
                                    <a class="home-page page-transition" href="#home" onclick="gotoPageWithTrans2(0)" title="Go Home"></a>
                                    <a class="prev-page page-transition" href="#blog" onclick="gotoPageWithTrans3(5)" title="Go To Previous Page"></a>
                                </div>
                                <h1>Feedback</h1>
                                <nav class="submenu page6-submenu">
                                    <ul>
                                        <li><a href="#works" class="page-transition" onclick="gotoPageWithTrans5(3)">Our Works</a></li>
                                        <li><a href="#contacts" class="page-transition" onclick="gotoPageWithTrans5(4)">Contact Us</a></li>
                                        <li><a href="#blog" class="page-transition" onclick="gotoPageWithTrans5(5)">Our Blog</a></li>
                                        <li class="current"><a href="#feedback">Feedback</a></li>
                                        <li class="inline"><a href="#about" class="page-transition" onclick="gotoPageWithTrans5(1)">About Us</a></li>
                                        <li><a href="#team" class="page-transition" onclick="gotoPageWithTrans5(2)">Our Team</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="span4">
                                <ul class="social-bar-white">
                                    <li><a class="facebook-white" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-white" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-white" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-white" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-white" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <!--Content-->
                    <section class="row-fluid">
                        <div class="container">
                            <form method="post" name="feedback-form" id="feedback-form" class="addspace clearfix">
                                <fieldset class="span6">
                                    <span id="sprytextfield1">
                                        <input type="text" name="name" id="name">
                                    </span>
                                    <span id="sprytextfield2">
                                        <input type="text" name="email" id="email">
                                    </span>
                                </fieldset>
                                <fieldset class="span6">
                                    <span id="sprytextarea1">
                                        <textarea name="message" id="message" cols="45" rows="5"></textarea>
                                    </span>
                                </fieldset>
                                <input name="submit" type="submit" class="submit" id="submit" value="Submit">
                                <div id="success"></div>
                            </form>
                        </div>
                    </section>
                    <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
                </div>
                <!--Footer-->
                <footer>
                    <div class="container">
                        <p>Copyright &copy; ItemBridge inc., 2013</p>
                    </div>
                </footer>
            </article>

            <!--Single Blog Post Screen-->
            <article class="pt-page pt-page-8 bg-image6" id="blog-single">
                <div class="outer-wrapper overlay-orange">
                    <!--Header-->
                    <header class="row-fluid">
                        <div class="container">
                            <div class="span8 relative">
                                <div class="page-navi">
                                    <a class="home-page page-transition" href="#home" onclick="gotoPageWithTrans2(0)" title="Go Home"></a>
                                    <a class="prev-page page-transition" href="#blog" onclick="gotoPageWithTrans7(5)" title="Go To Blog Posts"></a>
                                </div>
                                <h1>Our Blog</h1>
                                <nav class="submenu page6-submenu">
                                    <ul>
                                        <li><a href="#team" class="page-transition" onclick="gotoPageWithTrans5(2)">Our Team</a></li>
                                        <li><a href="#works" class="page-transition" onclick="gotoPageWithTrans5(3)">Our Works</a></li>
                                        <li><a href="#contacts" class="page-transition" onclick="gotoPageWithTrans5(4)">Contact Us</a></li>
                                        <li class="current"><a href="#blog">Our Blog</a></li>
                                        <li class="inline"><a href="#feedback" class="page-transition" onclick="gotoPageWithTrans4(6)">Feedback</a></li>
                                        <li><a href="#about" class="page-transition" onclick="gotoPageWithTrans5(1)">About Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="span4">
                                <ul class="social-bar-white">
                                    <li><a class="facebook-white" href="#" title="Facebook" target="_blank"></a></li>
                                    <li><a class="twitter-white" href="#" title="Twitter" target="_blank"></a></li>
                                    <li><a class="googleplus-white" href="#" title="Google+" target="_blank"></a></li>
                                    <li><a class="linkedin-white" href="#" title="LinkedIn" target="_blank"></a></li>
                                    <li><a class="behance-white" href="#" title="Behance" target="_blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <!--Content-->
                    <section class="row-fluid">
                        <div class="single-post-content">
                            <div class="container">
                                <h2>Etiam Tristique Consectetu</h2>
                                <span class="post-meta">Mike Example, 03.11.2012&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="comments-icon"></i>&nbsp;3</span>
                                <p>Etiam enim lacus, ornare et tempor et, rhoncus rhoncus sem. Cras in velit ante, eget pellentesque sem. Duis tincidunt erat quam. Etiam placerat sapien. Fusce sed est orci, vel condimentum felis. Phasellus et enim sed est dictum luctus a in nibh. In metus dolor, interdum eget consectetur vel, ornare sodales felis.</p>
                                <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis tincidunt erat quam. Etiam placerat sapien elit. Pellentesque egestas ornare sagittis. Sed augue lorem, dignissim eget bibendum vitae, scelerisque eget justo.</p>
                            </div>
                            <div class="container comments">
                                <h2>Comments</h2>
                                <div class="comments-wrapper clearfix">
                                    <div class="timeline"><span class="timeline-track"></span><span class="timeline-arrow"></span></div>
                                    <div class="comment">
                                        <span class="figcap"></span>
                                        <span class="pointer-right"></span>
                                        <span class="comment-meta">Mike Example, 03.11.2012, 10:45</span>
                                        <p>ChiefNullam interdum accumsan diam, dictum tempor nisl pretium. Etiam nulla velit, tempor vitae dolor eget, aliquam posuere nulla. Morbi vestibulum dui ut orci commodo, ut ornare dui mattis.</p>
                                    </div>
                                    <div class="comment last-col">
                                        <span class="figcap"></span>
                                        <span class="pointer-left"></span>
                                        <span class="comment-meta">Mike Example, 03.11.2012, 10:50</span>
                                        <p>ChiefNullam interdum accumsan diam, dictum tempor nisl pretium. Etiam nulla velit, tempor vitae dolor eget, aliquam posuere nulla. Morbi vestibulum dui ut orci commodo, ut ornare dui mattis.</p>
                                    </div>
                                    <div class="comment">
                                        <span class="figcap"></span>
                                        <span class="pointer-right"></span>
                                        <span class="comment-meta">Mike Example, 03.11.2012, 10:55</span>
                                        <p>ChiefNullam interdum accumsan diam, dictum tempor nisl pretium. Etiam nulla velit, tempor vitae dolor eget, aliquam posuere nulla. Morbi vestibulum dui ut orci commodo, ut ornare dui mattis. Maecenas quis diam vehicula, consequat purus in, molestie lorem. Donec in pharetra ante. Pellentesque faucibus ligula neque.</p>
                                    </div>
                                    <div class="comment last-col">
                                        <span class="figcap"></span>
                                        <span class="pointer-left"></span>
                                        <span class="comment-meta">Mike Example, 03.11.2012, 10:59</span>
                                        <p>ChiefNullam interdum accumsan diam, dictum tempor nisl pretium. Etiam nulla velit, tempor vitae dolor eget, aliquam posuere nulla. Morbi vestibulum dui ut orci commodo, ut ornare dui mattis.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="container comment-form">
                                <h2>Leave a Reply</h2>
                                <form method="post" name="comments-form" id="comments-form" class="clearfix">
                                    <fieldset class="span6">
                                        <span id="sprytextfield3">
                                            <input type="text" name="name" id="comment-author-name">
                                        </span>
                                        <span id="sprytextfield4">
                                            <input type="text" name="email" id="comment-author-email">
                                        </span>
                                    </fieldset>
                                    <fieldset class="span6">
                                        <span id="sprytextarea2">
                                            <textarea name="message" id="comment" cols="45" rows="5"></textarea>
                                        </span>
                                    </fieldset>
                                    <input name="submit" type="submit" class="submit" value="Submit">
                                </form>
                            </div>
                        </div>
                    </section>
                    <div class="push"><!--//--></div><!--Ryan Fait's Sticky Footer-->
                </div>
                <!--Footer-->
                <footer>
                    <div class="container">
                        <p>Copyright &copy; Ahmed Metwaly inc., 2016</p>
                    </div>
                </footer>
            </article>
        </div>
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="js/pagetransitions.js" type="text/javascript"></script>
        <script src="js/validation.js" type="text/javascript"></script>
        <script src="js/grid.js"></script>
        <script src="js/scripts.js"></script>

        <!-- Form validation -->
        <script type="text/javascript">
                          var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {hint: "Your Name *", validateOn: ["change"]});
                          var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {hint: "Your Email *", validateOn: ["change"]});
                          var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {hint: "Your Name *", validateOn: ["change"]});
                          var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "email", {hint: "Your Email *", validateOn: ["change"]});
                          var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {hint: "Any comment *", validateOn: ["change"]});
                          var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {hint: "Any comment *", validateOn: ["change"]});
        </script>
    </body>
</html>
