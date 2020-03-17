<?php   

    $root = $_SERVER['DOCUMENT_ROOT'];
    $path = '/img/branding/';
    $path2 = '/img/illustration/';
  $GLOBALS['paths'] = array(1,2);
  function generate_paths(){
    $prevpath = end($GLOBALS['paths']);
    $newpath = $prevpath+1;
    array_push($GLOBALS['paths'],$newpath);
  }
    generate_paths();
    $imgList = getImagesFromDir($root . $path);
    $imgList2 = getImagesFromDir($root . $path2);
  shuffle($imgList);

    function getImagesFromDir($path) {
        $images = array();
        if ( $img_dir = @opendir($path) ) {
            while ( false !== ($img_file = readdir($img_dir)) ) {
                // checks for gif, jpg, png
                if ( preg_match("/(\.gif|\.jpg|\.png)$/", $img_file) ) {
                    $images[] = $img_file;
                }
            }
            closedir($img_dir);
        }
        return $images;        
    }

    function getRandomFromArray($ar) {
        $num = array_rand($ar);
        return $ar[$num];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cesar Garde</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){  

            
            $(".navbar-brand").click(function() {
                $('html, body').animate({
                  scrollTop: $("#page-top").offset().top - 161
                }, 1000);
              });
            $(".skills").click(function() {
                $('html, body').animate({
                  scrollTop: $("#skills").offset().top - 161
                }, 1000);
              });
            $(".graphics").click(function() {
                $('html, body').animate({
                  scrollTop: $("#graphics").offset().top - 161
                }, 1000);
              });
            $(".projects").click(function() {
                $('html, body').animate({
                  scrollTop: $("#projects").offset().top - 161
                }, 1000);
              });
            $(".contact").click(function() {
                $('html, body').animate({
                  scrollTop: $("#contact").offset().top - 161
                }, 1000);
              });
      });
    </script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand">Cesar Garde</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="skills">
                        <a>Skills</a>
                    </li>
                    <li class="graphics">
                        <a>Graphics</a>
                    </li>
                    <li class="projects">
                        <a>Projects</a>
                    </li>
                    <li class="contact">
                        <a>Contact Me</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/cg_main_logo_light.png" alt="">
                    <div class="intro-text">
                        <span class="skills">Art Direction - User Experience Design & Development</span>
                    </div>
                </div>
            </div>
        </div>
    </header>    

    <!-- About Section -->
    <section class="success">
        <div class="container">
            <div class="row" style="border-bottom:1px solid #fff;">
                <div id="skills" class="col-lg-12 text-center">
                    <h2>Skills</h2>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-3 col-lg-offset-0 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 text-center">                    
                    <img src="/img/soft_icon.png">
                    <h4>Sofware & Operating Systems</h4>
                    <ul class="skill_list">
                        <li>Adobe suite<br>(Illustrator, Photoshop, InDesign, Lightroom, Flash)</li>
                        <li>Sublime Text</li>
                        <li>Visual Studio</li>
                        <li>Microsoft Office</li>
                        <li>AutoCad</li>
                        <li>Final Cut Pro (Video Editor)</li>
                        <li>Mac IOS</li>
                        <li>Windows</li>
                        <li>LINUX</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-lg-offset-0 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 text-center">
                    <img src="/img/code_icon.png">
                    <h4>Programming & Scripting</h4>
                    <ul class="skill_list">
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Bootstrap</li>
                        <li>Javascript</li>
                        <li>Jquery</li>
                        <li>AJAX</li>
                        <li>JSON</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>Shell Script (MAC terminal)</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-lg-offset-0 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 text-center">
                    <img src="/img/anl_icon.png">
                    <h4>Social Media & Analytics</h4>
                    <ul class="skill_list">
                        <li>API’s interaction (Facebook)</li>
                        <li>API’s interaction (Twitter)</li>
                        <li>API’s interaction (YouTube)</li>
                        <li>Google Analytics</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-lg-offset-0 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 text-center">
                    <img src="/img/net_icon.png">
                    <h4>Networking</h4>
                    <ul class="skill_list">
                        <li>Git & Github</li>
                        <li>Tortoise SVN</li>
                        <li>Filezilla (FTP)</li>
                        <li>SFTP</li>
                        <li>SSH</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="about" class="dark_blue">
        <div class="container-fluid">
            <div class="row" style="border-bottom:1px solid #fff;">
                <div id="graphics" class="col-lg-12 text-center">
                    <h2>Graphics</h2>
                </div>
            </div>
            <br><br>
            <div class="col-lg-12 text-center">  
                <?php
                    foreach ($imgList as $v) {
                        echo "<div style='background:url(/img/branding/".$v.");margin:10px;height:202px;background-size:100%;width:245px;border-radius:4px;border:1px solid #999;position:relative;float:left;'>                                  
                                </div>";
                    }
                ?>   
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section >
        <div class="container">
            <div class="row" style="border-bottom:1px solid #2c3e50;">
                <div id="projects" class="col-lg-12 text-center">
                    <h2>Projects</h2>
                </div>
            </div>
             <br><br>
            <div class="col-lg-12 text-center">                
                <h4 ><a href="http://www.harryfox.com" target="_blank">Harryfox.com</a></h4>
                <h4 ><a href="http://www.songfile.com" target="_blank">Songfile.com</a></h4>
                <h4 ><a href="http://www.hfaslingshot.com" target="_blank">HFASlingshot.com</a></h4>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="dark_style">
        <div class="container">
            <div class="row">
                <div id="contact" class="col-lg-12 text-center" style="border-bottom:1px solid #fff;">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="background: rgba(255,255,255,0.1);border-radius: 4px;">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12"><a href="http://www.linkedin.com/pub/cesar-garde/45/a23/21a" target="_blank">Visit my LinkedIn Profile</a></div>
                    <div class="col-lg-12">
                        Copyright &copy; Cesar Garde 2015
                    </div>
                    <div class="col-lg-12"><a href="http://www.songfile.com/?utm_source=cesar_garde&utm_medium=website&utm_campaign=cesar_garde_referral">Songfile &reg;</a></div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>    
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>


</body>

</html>
