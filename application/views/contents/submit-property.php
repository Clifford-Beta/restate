 <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Submit new property</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <div class="clearfix" > 
                    <div class="wizard-container"> 
                            
                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                            <?php echo form_open_multipart('Heavenlink/dosubmit_property', array('class' => 'upload-image-form'));?>
                            <!-- <form action="<?php// echo base_url('Heavenlink/dosubmit_property'); ?>" method="POST" id="myform">                         -->
                                <div class="wizard-header">
                                    <h3>
                                        <b>Submit</b> YOUR PROPERTY <br>
                                        <small>Making it Simple</small>
                                    </h3>
                                </div>
                               
                                <ul>
                                    <li><a href="#step1" data-toggle="tab">Step 1 </a></li>
                                    <li><a href="#step2" data-toggle="tab">Step 2 </a></li>
                                    <li><a href="#step3" data-toggle="tab">Step 3 </a></li>
                                    <li><a href="#step4" data-toggle="tab">Finished </a></li>
                                </ul>

                                <div class="tab-content">
                                        
                                    <div class="tab-pane" id="step1">
                                         <?php echo $error;?>
                                        <div class="row p-b-15  ">
                                            <span class = "upload-image-messages"></span>
                                            <h4 class="info-text"> Let's start with the basic information (with validation)</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="assets/img/default-property.jpg" class="picture-src" id="wizardPicturePreview" title=""/>
                                                        <input type="file" id="wizard-picture" name="image">
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Property name <small>(required)</small></label>
                                                    <input name="name" type="text" class="form-control" placeholder="Enter property name ...">
                                                </div>

                                                <div class="form-group">
                                                    <label>Property Location <small>(required)</small></label>
                                                    <input name="location" type="text" class="form-control" placeholder="Enter Location">
                                                </div> 
                                                <div class="form-group">
                                                    <label>Property price <small>(required)</small></label>
                                                    <input name="price" type="text" class="form-control" placeholder="Shs.">
                                                </div> 
                                                <!-- <div class="form-group">
                                                    <label>Telephone <small>(empty if you wanna use default phone number)</small></label>
                                                    <input name="phone" type="text" class="form-control" placeholder="+254 7">
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 1 -->

                                    <div class="tab-pane" id="step2">
                                        <h4 class="info-text"> How much your Property is Beautiful ? </h4>
                                        <div class="row">
                                            <div class="col-sm-12"> 
                                                <div class="col-sm-12"> 
                                                    <div class="form-group">
                                                        <label>Property Description :</label>
                                                        <textarea name="description" class="form-control" ></textarea>
                                                    </div> 
                                                </div> 
                                            </div>

                                            <div class="col-sm-12">
                                                
                                                <!-- <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Property City :</label>
                                                        <select id="lunchBegins" name="city" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                            <option>New york, CA</option>
                                                            <option>Paris</option>
                                                            <option>Casablanca</option>
                                                            <option>Tokyo</option>
                                                            <option>Marraekch</option>
                                                            <option>kyoto , shibua</option>
                                                        </select>
                                                    </div>
                                                </div> -->
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Property Status  :</label>
                                                        <select id="basic" name="status" class="selectpicker show-tick form-control">
                                                            <option> -Status- </option>
                                                            <option>Rent </option>
                                                            <option>Buy</option>
                                                            <option>used</option>  

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Property Type  :</label>
                                                        <select id="basic" name="type" class="selectpicker show-tick form-control">
                                                            <option>House</option>
                                                            <option>Land </option>
                                                            

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Owner  :</label>
                                                        <select id="basic" name="owner" class="selectpicker show-tick form-control">
                                                            <option value='1'>Default</option>
                                                            <option value='' id="here">Me </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                           
                                            <div class="col-sm-12 padding-top-15">                                                   
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label for="property-geo">Bedrooms :</label>
                                                        <input type="number" name="bedroom" class="form-control"  ><br />
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">

                                                    <div class="form-group">
                                                        <label for="price-range">Bathrooms</label>
                                                        <input name="bath" type="number" class="form-control"  ><br />
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">

                                                    <div class="form-group">
                                                        <label for="property-geo">Property geo (m2) :</label>
                                                        <input type="number" class="form-control"  name="area"  ><br />
                                                        
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col-sm-12 padding-top-15">
                                                                                           
                                                
                                            </div> 
                                            <div class="col-sm-12 padding-bottom-15">
                                                
                                                
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <!-- End step 2 -->

                                    <div class="tab-pane" id="step3">                                        
                                        <h4 class="info-text">Give us somme images</h4>
                                        <div class="row">  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-images">Chose Images :</label>
                                                    <input class="form-control" type="file"  multiple="multiple" accept="image/*" id="property-images" name="images[]" size="20">
                                                    <p class="help-block">Select multiple images for your property .</p>
                                                </div>
                                            </div>
                                            <!--<div class="col-sm-6"> 
                                                <div class="form-group">
                                                    <label for="property-video">Property video :</label>
                                                    <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                                </div> 

                                                <div class="form-group">
                                                    <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                                </div>

                                                <div class="form-group">
                                                    <input class="form-control" value="" placeholder="http://www.youtube.com, http://vimeo.com" name="property_video" type="text">
                                                </div>
                                            </div>-->
                                        </div>
                                    </div>
                                    <!--  End step 3 -->


                                    <div class="tab-pane" id="step4">                                        
                                        <h4 class="info-text"> Finish and Submit </h4>
                                        <div class="row">  
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <p>
                                                        <label><strong>Terms and Conditions</strong></label>
                                                        By accessing or using  Heavenlink Properties Limited services, such as 
                                                        posting your property advertisement with your personal 
                                                        information on our website you agree to the
                                                        collection, use and disclosure of your personal information 
                                                        in the legal proper manner
                                                    </p>

                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" /> <strong>Accept termes and conditions.</strong>
                                                        </label>
                                                    </div> 

                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 4 -->

                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-primary' name='next' value='Next' />
                                        <input type='submit' id="propertit" class='btn btn-finish btn-primary ' name='finish' value='Finish' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button'  class='btn btn-previous btn-default' name='previous' value='Previous' />
                                    </div>
                                    <div class="clearfix"></div>                                            
                                </div>  
                            </form>
                        </div>
                        <!-- End submit form -->
                    </div> 
                </div>
            </div>
        </div>

             <script>                    
         var elem = document.getElementById('here');
            elem.value = sessionStorage.getItem('Id');

        $( "#propertit" ).click(function( event ) {
            event.preventDefault();
            var datea = new FormData();
            jQuery.each($('#wizard-picture')[0].files, function(i, file) {
                datea.append('file[]', file);
            });
            
            jQuery.each(jQuery('#property-images')[0].files, function(i, file) {
                datea.append('file[]', file);
            });
            jQuery.ajax({
                url: '<?php echo base_url('Heavenlink/do_upload'); ?>',
                data: datea,
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST', // For jQuery < 1.9
                success: function(data){
                    imgs = [];
                    console.log(data.dta.upload_data)
                        data.dta.upload_data.forEach(element => {
                           imgs.push(element.file_name); 
                        });
                        console.log(imgs);
                    toastr.success(data.msg);

                        jQuery.ajax({
                url: '<?php echo base_url('Heavenlink/dosubmit_property'); ?>',
                data: $(".upload-image-form").serialize()+'&image='+JSON.stringify(imgs),
                cache: false,
                contentType: false,
                processData: false,
                method: 'POST',
                type: 'POST', // For jQuery < 1.9
                success: function(data){
                    toastr.success("Property added successfully");
                    //   console.log( $(".upload-image-form").serialize() );
 
                    
                },
                 error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 toastr.error(errorThrown);
                     }  
                
            });

                    //   console.log( $(".upload-image-form").serialize() );
 
                    
                },
                 error: function(XMLHttpRequest, textStatus, errorThrown) { 
                 toastr.error(errorThrown);
                     }  
                
            });

    });

     var data = sessionStorage.getItem('isLogged');
            if(!data){
                window.location.replace("<?php echo base_url();?>");
            }
        </script>