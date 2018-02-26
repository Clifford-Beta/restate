 <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>

                                <img src="<?php echo base_url('assets/img/footer-logo.png');?>" alt="" class="wow pulse" data-wow-delay="1s">
                                <!--<p>Heavenlink Properties is located along Ngong Road at Set Green Hill Plaza</p>-->
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i> Baywater Court,Block B 2<sup>nd</sup> Floor Suite 6</li>
                                    <li><i class="pe-7s-mail strong"> </i> info@inkarealtors.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +254 725 600 051</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Quick links </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="<?php echo site_url('properties');?>">Properties</a>  </li> 
                                    <li><a href="#">Services</a>  </li> 
                                    <li><a href="<?php echo site_url('submit_property');?>">Submit property </a></li> 
                                    <li><a href="<?php echo site_url('contact');?>">Contact us</a></li> 
                                   <!-- <li><a href="<?php //echo site_url('faq.php');?>">FAQ</a>  </li> 
                                    <li><a href="<?php //echo site_url('faq.php');?>">Terms </a>  </li> -->
                                </ul>
                            </div>
                        </div>
                      
                        <div class="col-md-6 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer news-letter">
                                <h4> Submit Your Feedback</h4>
                                <div class="footer-title-line"></div>
                                <!--<p>Lorem ipsum dolor sit amet, nulla  suscipit similique quisquam molestias. Vel unde, blanditiis.</p>-->

                                <!--<form>
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="E-mail ... ">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>
                                        </span>
                                    </div>
                                   /input-group 
                                </form>-->
                                 <form>
                                <div class="row">
                                    <!--<div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Firstname</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Lastname</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>-->
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form> 

                                <!--<div class="social pull-right"> 
                                    <ul>
                                        <li><a class="wow fadeInUp animated" href="https://twitter.com/kimarotec"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://www.facebook.com/kimarotec" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://plus.google.com/kimarotec" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>
                                        <li><a class="wow fadeInUp animated" href="https://instagram.com/kimarotec" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>
                                    </ul> 
                                </div>-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                           Copyright &copy <a href="http://www.inkarealtors.com"><span style="color: rgb(108,108,108);"> INKAREALTORS PROPERTIES LIMITED</span></a>  All rights reserved 2018  
                        </div> 
                        <div class="bottom-menu pull-right"> 
                            <ul> 
                                <li><a class="wow fadeInUp animated" href="<?php echo site_url('/');?>" data-wow-delay="0.2s">Home</a></li>
                                <li><a class="wow fadeInUp animated" href="<?php echo site_url('properties');?>" data-wow-delay="0.3s">Properties</a></li>
                                <!--<li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.4s">Faq</a></li>-->
                                <li><a class="wow fadeInUp animated" href="<?php echo site_url('contact');?>#" data-wow-delay="0.6s">Contact</a></li>
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>

        </div>

       <?php  $this->load->view('/templates/js'); ?>