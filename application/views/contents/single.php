        

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Super nice villa </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-1 ">
                        <div class="row">
                            <div class="light-slide-item">            
                                <div class="clearfix">
                                    <div class="favorite-and-print">
                                        <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                            <i class="fa fa-star-o"></i>
                                        </a>
                                        <a class="printer-icon " href="javascript:window.print()">
                                            <i class="fa fa-print"></i> 
                                        </a>
                                    </div> 
                                    <?php if(!empty($house)){ ?>

                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                    <?php  $dta = json_decode($house[0]['image']); if(!empty($dta)){
                                            
                                        foreach ($dta as $key => $value) {
                                            # code...
                                        
                                        ?>
                                        <li data-thumb="<?php echo base_url('uploads/').$value;?>"> 
                                            <img src="<?php echo base_url('uploads/').$value;?>" />
                                        </li>
                                        
                                        
                                    <?php }} ?>                                 
                                    </ul>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="single-property-wrapper">
                            <div class="single-property-header">                                          
                                <h1 class="property-title pull-left"><?php echo $house[0]['name']; ?></h1>
                                <span class="property-price pull-right">Shs. <?php echo $house[0]['price']; ?></span>
                            </div>

                            <div class="property-meta entry-meta clearfix ">   

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                
                                    <span class="property-info-icon icon-tag">                                        
                                        <img src="<?php echo base_url('assets/img/icon/sale-orange.png');?>">
                                    </span>
                                    <span class="property-info-entry">
                                    <?php if(isset($house[0]['status'])){ ?>
                                        <span class="property-info-label">Status</span>
                                        <span class="property-info-value"><?php echo $house[0]['status']; ?></span>
                                        <?php } ?>
                                    </span>
                                   
                                </div>
                                 
                                         
                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    
                                    <span class="property-info icon-area">
                                        <img src="<?php echo base_url('assets/img/icon/room-orange.png');?>">
                                    </span>
                                    <span class="property-info-entry">
                                   <?php if(isset($house[0]['area'])){ ?>
                                        <span class="property-info-label">Area</span>
                                        <span class="property-info-value"><?php echo $house[0]['area']; ?><b class="property-info-unit">Sq M</b></span>
                                        <?php } ?>
                                    </span>
                                    
                                </div>
                                 
                                
                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                
                                    <span class="property-info-icon icon-bed">
                                        <img src="<?php echo base_url('assets/img/icon/bed-orange.png"');?>>
                                    </span>
                                    <span class="property-info-entry">
                                    <?php if(isset($house[0]['bedroom'])){ ?>
                                        <span class="property-info-label">Bedrooms</span>
                                        <span class="property-info-value"><?php echo $house[0]['bedroom']; ?></span>
                                        <?php } ?>
                                    </span>
                                    
                                </div>
                                
                                
                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                 <?php if(isset($house[0]['garage'])){ ?>
                                    <span class="property-info-icon icon-bed">
                                        <img src="<?php echo base_url('assets/img/icon/cars-orange.png');?>">
                                    </span>
                                    <span class="property-info-entry">
                                   
                                        <span class="property-info-label">Car garages</span>
                                        <span class="property-info-value"><?php echo $house[0]['garage']; ?></span>
                                        
                                    </span>
                                    <?php } ?>
                                </div>

                                
                                   
                                        
                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                        <?php if(isset($house[0]['bathroom'])){ ?>
                                    <span class="property-info-icon icon-garage">
                                        <img src="<?php echo base_url('assets/img/icon/room-orange.png');?>">
                                    </span>
                                    <span class="property-info-entry">
                                    
                                        <span class="property-info-label">Bathrooms</span>
                                        <span class="property-info-value"><?php echo $house[0]['bathroom']; ?></span>
                                        
                                    </span>
                                    <?php } ?>
                                    
                                </div>
                                        


                            </div>
                            <!-- .property-meta -->

                            <div class="section">
                                <h4 class="s-property-title">Description</h4>
                                <div class="s-property-content">
                                    <p><?php echo $house[0]['description']; ?>  </p>
                                </div>
                            </div>
                            <!-- End description area  -->
                            
                            <?php } ?>
                        
                            
                        </div>
                    </div>


                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <div class="inner-wrapper">

                                        <div class="clear">
                                            <div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                    <img src="<?php echo base_url('assets/img/client-face1.png');?>" class="img-circle">
                                                </a>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name">
                                                    <a href="">Yusuf Manduku</a>
                                                    <span>Real Estate Agent</span>        
                                                </h3>
                                                <div class="dealer-social-media">
                                                    <a class="twitter" target="_blank" href="">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a class="facebook" target="_blank" href="">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                                </div>

                                            </div>
                                        </div>

                                        <div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                <li><i class="pe-7s-map-marker strong"> </i>Karen Professional Center Along Karen Road Second Floor Room F6 </li>
                                                <li><i class="pe-7s-mail strong"> </i> info@heavenlinkproperties.com</li>
                                                <li><i class="pe-7s-call strong"> </i>+254 700 095 967</li>
                                            </ul>
                                            <p> Yusuf Manduku is the C.E.O of Inkarealtors Properties Limited dealing with letting houses and commercial space, selling houses and lands</p>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Smart search</h3>
                                </div>
                                <div class="panel-body search-widget">
                                    <form action="" class=" form-inline"> 
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input type="text" class="form-control" placeholder="Key word">
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-6">

                                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your City">

                                                         <option>Karen</option>
                                                         <option>Kileleleshwa</option>
                                                         <option>CBD</option>
                                                         <option>Ngong</option>
                                                         <option>Kiserian</option>
                                                         <option>Runda</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-6">

                                                    <select id="basic" class="selectpicker show-tick form-control">
                                                        <option> Status </option>
                                                        <option>Buy </option>
                                                        <option>Let</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>

                                       
                                        <fieldset >
                                            <div class="row">
                                                <div class="col-xs-12">  
                                                    <input class="button btn largesearch-btn" value="Search" type="submit">
                                                </div>  
                                            </div>
                                        </fieldset>                                     
                                    </form>
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </div>
   
        

        <script>
            $(document).ready(function () {

                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function () {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>