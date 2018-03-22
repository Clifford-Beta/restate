        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="<?php echo base_url('assets/img/slide1/slider-image-1.jpg'); ?>" alt="Inkarealtors"></div>
                    <div class="item"><img src="<?php echo base_url('assets/img/slide1/slider-image-2.jpg'); ?>" alt="Inkarealtors"></div>
                    <div class="item"><img src="<?php echo base_url('assets/img/slide1/slider-image-4.jpg'); ?>"" alt="Inkarealtors"></div>

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <!--<h2>Best choice for houses and lands</h2>-->
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi deserunt deleniti, ullam commodi sit ipsam laboriosam velit adipisci quibusdam aliquam teneturo!</p>-->
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                            <form action="<?php echo base_url('search'); ?>" class=" form-inline" method="post">
                                <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                                <div id="the-basics" class="form-group">
                                    <input name="kwarg" class="typeahead form-control" type="text" placeholder="Keyword">
                                </div>
                                <div class="form-group">
                                    <select name="location" id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select location">

                                        <option>Karen</option>
                                        <option>Kileleleshwa</option>
                                        <option>CBD</option>
                                        <option>Ngong</option>
                                        <option>Kiserian</option>
                                        <option>Runda</option>
                                    </select>
                                </div>
                                <div class="form-group">                                     
                                    <select name="status" id="basic" class="selectpicker show-tick form-control">
                                        <option>Buy</option>
                                        <option>Let</option>  
                                    </select>
                                </div>
                               <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>

                                <div style="display: none;" class="search-toggle">
                            </div>                             
                       <!-- <button class="btn search-btn prop-btm-sheaerch" type="submit"><i class="fa fa-search"></i></button> --> 
                                </div>                    

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- property area -->
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Top submitted property</h2>
                        <p>These are the latest offers we have for 2018 get youself one</p>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th">


                         <?php if (!empty($houses)) {  

                                    foreach($houses as $key=>$value){ 
                                         $img = json_decode($value['image'],true);
                                        ?>
                                    
                                <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="<?php echo base_url('property/h/').$value['id'];?>" ><img src="<?php echo base_url('uploads/').$img[0];?>"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="<?php echo base_url('property/h/').$value['id'];?>"> <?php echo $value['name']; ?> </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> <?php echo $value['area'];?>m </span>
                                            <span class="proerty-price pull-right"> Shs. <?php echo $value['price'];?></span>
                                            <p style="display: none;"><?php $value['description']; ?></p>
                                            <div class="property-icon">
                                                 <img src="<?php echo base_url('assets/img/icon/bed.png');?>">
                                                <img src="<?php echo base_url('assets/img/icon/shawer.png');?>">
                                                <img src="<?php echo base_url('assets/img/icon/cars.png');?>"> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                       <?php } } ?> 

                    </div>
                </div>
            </div>
        </div>



        <!-- boy-sale area -->
        <div class="boy-sale-area">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-md-offset-0 col-xs-12">
                        <div class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-search"></span>
                            </div>
                            <div class="asks-first-info">
                                <h2>ARE YOU LOOKING FOR A Property?</h2>
                                <p> Get the best houses at convinient prices</p>                                        
                            </div>
                            <div class="asks-first-arrow">
                                <a href="<?php echo base_url('properties');?>"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-10 col-sm-offset-1 col-xs-12 col-md-offset-0">
                        <div  class="asks-first">
                            <div class="asks-first-circle">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="asks-first-info">
                                <h2>DO YOU WANT TO SELL A Property?</h2>
                                <p> Various houses used or new can be submitted by through the admin.</p>
                            </div>
                            <div class="asks-first-arrow">
                                <a href="<?php echo base_url('properties');?>"><span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <p  class="asks-call">QUESTIONS? CALL US  : <span class="strong"> +254 700 095 967</span></p>
                    </div>
                </div>
            </div>
        </div>
