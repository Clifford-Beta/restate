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
                                    <li><i class="pe-7s-map-marker strong"> </i> Karen Professional Center Along Karen Road First Floor Room M1C </li>
                                    <li><i class="pe-7s-mail strong"> </i> info@inkarealtors.com</li>
                                    <li><i class="pe-7s-call strong"> </i>  +254 700 095 967</li>
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
                                 <form action="<?php echo base_url('email'); ?>" method="post">
                                <div class="row">

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message</label>
                                            <textarea id="message" class="form-control" name="message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send message</button>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form> 


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