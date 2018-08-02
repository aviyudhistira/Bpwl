<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>CV.Tiga Putra Petir</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- boxed bg -->
  <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "penjualan", { role: "style" } ],
        ["2010", 150, "#b87333"],
        ["2011", 200, "#b87333"],
        ["2012", 300, "#b87333"],
        ["2013", 210, "#b87333"],
        ["2014", 250, "#b87333"],
        ["2015", 300, "#b87333"],
        ["2016", 150, "#b87333"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Perkembangan perusahaan",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>CV. Tiga Putra Petir </strong></li>
              <li>Main office: Yos Sudarso, Rumbai.134</li>
              <li>Call us <i class="icon-phone"></i> 081277923568 </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <?php
                require_once __DIR__.'/vendor/autoload.php';
                include_once("config.php");
                $result = mysqli_query($mysqli, "SELECT * FROM pengunjung");
                $user_data = mysqli_fetch_array($result);
  
                session_start();
  
                if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
                  $profile = $_SESSION['access_profile'];
                  echo "
                        <img src=\"{$profile['image']['url']}\" alt=\"Profile_photo\" width=\"30\" height=\"30\"> &nbsp<br>";
                  echo "Hai,({$profile['emails']['0']['value']})<br>
                          <a href=\"profile.php?id2=$user_data[email]\">Profile</a>
                          <a href=\"logout.php\">Logout</a>";
                } else {
                  echo "<ul>
                          <li><a href='#mySignup' data-toggle='modal'><i class='icon-user'></i> Sign up</a></li>
                          <li><a href='#mySignin' data-toggle='modal'>Sign in</a></li>
                        </ul>";
                }
              ?>
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a><br>
                      Log in via <a href="auth.php">Google</a><a href="auth.php"><img src="foto/google-logo.png" alt="Google" width="30" height="30"></a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">Login to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" id="inputText" placeholder="Username">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSigninPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign in</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Forgot password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a><br>
                      Log in via <a href="auth.php">Google</a><a href="auth.php"><img src="foto/google-logo.png" alt="Google" width="30" height="30"></a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
         </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.php"><img src="foto/logo.png" alt="" class="logo"width=250pxs /></a>
              
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      <a href="index.php">Home <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        
                        
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">Product <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="typography.php">Pesan Material Bangunan</a></li>
                        <li><a href="table.php">Sewa Tukang Profesional</a></li>
                        
                        
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">About <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="about.php">Profile Perusahaan</a></li>
                        
                      </ul>
                    </li>
                    <li>
                      <a href="contact.php">Contact </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </header>
    <!-- end header -->
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>About</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="index.html"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Profile Perusahaan</a><i class="icon-angle-right"></i></li>
              
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span6">
            <h2>Welcome to <strong> 3 Putra Petir</strong></h2>
            <p>
              Misi kami adalah :<br>
              Untuk menciptakan nilai bagi pelanggan kami, pemegang saham.
              Untuk mempercepat evolusi pembayaran elektronik di seluruh dunia dengan menjadi pemimpin Eropa dalam pemrosesan transaksi, memberikan inovasi dalam yang aman, kecepatan infrastruktur dan intelijen.
            </p>
            <p>
              Visi kami adalah :<br>
              Untuk diakui sebagai pemimpin regional dalam penyediaan kualitas layanan yang tinggi investasi bisnis, dan produk.
              CV. Tiga Putra Petir bersedia untuk mendefinisikan kembali manajemen aset dengan transparansi lengkap dan likuiditas yang tinggi. Untuk menargetkan kembali mutlak menggunakan risiko disesuaikan strategi dan inovasi. Untuk mengaktifkan data-driven commerce dan layanan investasi melalui inovasi dalam yang aman, kecepatan infrastruktur dan intelijen.
            </p>
          </div>
          <div class="span6">
            <!-- start flexslider -->
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <img src="foto/image-08-full.jpg" alt="" />
                </li>
               
            </div>
            <!-- end flexslider -->
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span12">
            <h4>Chief Executive Officer</h4>
          </div>
          <div class="span3">
            <img src="foto/default-user.png" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Antonio Putra</strong>
              </p>
              <p>
                CEO - Founder
              </p>
            </div>
          </div>
          <div class="span3">
            <img src="foto/default-user.png" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Aviecenna Yudhistira</strong>
              </p>
              <p>
                CEO - Founder
              </p>
            </div>
          </div>
          <div class="span3">
            <img src="foto/default-user.png" alt="" class="img-polaroid" />
            <div class="roles">
              <p class="lead">
                <strong>Iqbal Ibrahim</strong>
              </p>
              <p>
                CEO - Founder
              </p>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
          <div class="span6">
            <h4>Selebihnya</h4>
            <div class="accordion" id="accordion2">
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
							1. What we do </a>
                </div>
                <div id="collapseOne" class="accordion-body collapse in">
                  <div class="accordion-inner">
                    <p>
                      Kami Membuat sponsor dan customer kami percaya dengan kami
                      maka dari itu kami selalu setiap tahun mengadakan event-event
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
							2. Work process </a>
                </div>
                <div id="collapseTwo" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Proses Kerja kami insyallah berjalan lancar, dengan ada nya karyawan yang taat dan sopan maka perusahaan kami ini dikenal orang banyak bahkan seluruh dunia.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
							3. Quality assurance </a>
                </div>
                <div id="collapseThree" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Buat para pekerja kami , kami menyediakan asuransi kematian. kami disini memfasilitasi karyawan kami sebaik mungkin sehingga mereka nyaman dengan pekerjaan nya sendiri.
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-group">
                <div class="accordion-heading">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
							4. What we can deliver </a>
                </div>
                <div id="collapseFour" class="accordion-body collapse">
                  <div class="accordion-inner">
                    <p>
                      Kami berpesan pada  pelanggan kami dan sponsor kami, kami dari pihak perusahaan sangat menghargai kalian gimana nya kalian lah yang membuat perusahaan ini menuju gerbang industri besar di dunia ini.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="span6">
<div id="columnchart_values" style="width: 700; height: 150;"></div>
<p><a href="cetak.php">Cetak</a></p>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Quotes Perusahaan</h5>
              <ul class="link-list">
                <li></li>
                <li>In order to succeed,</a></li>
                <li>your desire for success</a></li>
                <li>should be greater </a></li>
                <li>than your fear of failure.</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Chief Executive Officer</h5>
              <ul class="link-list">
                <li>Anthonio Putra</li>
                <li>Aviecenna Yudhistira</li>
                <li>Iqbal Ibrahim</li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Flickr photostream</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
           <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
                <strong>3 Putra Petir, CV. Tiga Putra Petir</strong><br>
                 Jl. Yos Sudarso, Rumbai, 134<br>
                 Rumbai 16425 Indonesia
              </address>
              <p>
                <i class="icon-phone"></i> 081277923568 <br>
                <i class="icon-envelope-alt"></i> tigaputrapetir@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>

</html>
