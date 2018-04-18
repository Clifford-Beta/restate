
<style>
    img {
        height: auto;
        max-width: 100%;
        vertical-align: middle;
        border: 0px none;
        margin-top: -20px;
    }
</style>
<?php
//var_dump($this->session->get_userdata());
//var_dump($this->session->userdata('user'));

//var_dump($this->session->userdata('user')==NULL);
//->username);
if($this->session->userdata('user')==NULL){ ?>

<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Body content -->

<div class="header-connect">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8  col-xs-12">
                <div class="header-half header-call">
                    <p>
                        <span><i class="pe-7s-call"></i> +254 700 095 967</span>
                        <span><i class="pe-7s-mail"></i> info@inkarealtors.com</span>
                    </p>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                <div class="header-half header-social">
                    <ul class="list-inline">
                        <li><a href="https://www.facebook.com/Inkarealtors/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End top header -->

<nav class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('/');?>"><img style="margin-top: -20px;" src="<?php echo base_url('assets/img/logo.png');?>" alt="Inkarealtors"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <div class="button navbar-right">
                <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('<?php echo site_url('login');?>')" data-wow-delay="0.45s">Login</button>
            </div>
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?php echo site_url('/');?>">Home</a></li>
                <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Buy Property<b class="caret"></b></a>
                    <ul class="dropdown-menu navbar-nav">
                        <li>
                            <a class="" href="<?php echo site_url('properties');?>">House</a>
                        </li>
                        <li>
                            <a class="" href="<?php echo site_url('land');?>">Land</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Let Property <b class="caret"></b></a>
                    <ul class="dropdown-menu navbar-nav">
                        <li>
                            <a class="" href="<?php echo site_url('properties');?>">House</a>
                        </li>
                        <li>
                            <a class="" href="<?php echo site_url('cmc');?>">Commercial Space</a>
                        </li>
                    </ul>
                </li>
                <!-- <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="<?php //echo site_url('Heavenlink/property');?>">About Us</a></li> -->
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="<?php echo site_url('contact');?>">Contact Us</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>




<?php } else { ?>

<body>
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Body content -->

<div class="header-connect">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-8  col-xs-12">
                <div class="header-half header-call">
                    <p>
                        <span><i class="pe-7s-call"></i> +254 700 095 967</span>
                        <span><i class="pe-7s-mail"></i> info@inkarealtors.com</span>
                    </p>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-5  col-sm-3 col-sm-offset-1  col-xs-12">
                <div class="header-half header-social">
                    <ul class="list-inline">
                        <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End top header -->

<nav class="navbar navbar-default ">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('/');?>"><img src="<?php echo base_url('assets/img/logo.png');?>" alt="Inkarealtors"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <div class="button navbar-right">
                <button class="navbar-btn nav-button wow fadeInRight" onclick="logout()" class="hidden" data-wow-delay="0.48s" id="lgout"><a class="" href="<?php echo base_url('logout');?>">Logout</a></button>
            </div>
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?php echo base_url('/');?>">Site</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="<?php echo base_url('profile');?>">Profile</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="<?php echo base_url('submit_property');?>">Submit Property</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.5s"><a href="<?php echo base_url('user_properties');?>">User Property</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>


<?php } ?>






        <script>
        // var data = sessionStorage.getItem('isLogged');
        //     if(data==true){
        //              $("#lgout").removeClass("hidden");
        //     }
   
            function logout(){

                 for (var obj in sessionStorage) {
                if (sessionStorage.hasOwnProperty(obj)) {
                    sessionStorage.removeItem(obj);
                }
                }
                console.log("logged out!!");
                window.location.replace("<?php echo base_url('/');?>");

            }
        </script>