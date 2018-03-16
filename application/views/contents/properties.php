

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Finding the best choice of houses at affordable prices</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
   <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">   
                <div class="row">
                    <div class="col-md-9 padding-top-40 properties-page">
                        <div class="section clear"> 
                            <div class="col-xs-10 page-subheader sorting pl0">
                            </div>

                            <div class="col-xs-2 layout-switcher">
                                <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                                <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                            </div><!--/ .layout-switcher-->
                        </div>

                        <div class="section clear"> 
                            <div id="list-type" class="proerty-th">
                                

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
                                            <p style="display: none;"><?php echo $value['description']; ?></p>
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
                        <div class="section">
                            <div class="pull-right">
                                <div class="pagination">
                                    <ul>
                                        <li><a href="#">Prev</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-3 pl0 padding-top-40">
                        <div class="blog-asside-right pl0">
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
                                                        <option>Status</option>
                                                        <option>Buy</option>
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
                        </div>
                    </div>
                </div>           
            </div>
        </div>