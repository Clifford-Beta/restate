
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Submit Property</h1>               
                    </div>
                </div>
            </div>
        </div>

        <!-- End page header -->

        <!-- property area -->
        <div class="content-area recent-property" style="background-color: #FFF;">
            <div class="container">   
                <div class="row">

                    <div class="col-md-9 pr-30 padding-top-40 properties-page user-properties">
                        <div class="wizard-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo base_url('submit_property');?>"> <input type='button'  class='btn btn-previous btn-default' name='submit' value='Submit New Property'/></a>
                                    </div>
                                    <div class="clearfix"></div>                                            
                                </div>
                        <div class="section"> 
                            <div id="list-type" class="proerty-th-list">
                                <?php if (!empty($houses)) {

                                foreach($houses as $key=>$value){
                                $img = json_decode($value['image'],true);
                                ?>
                                <div class="col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="<?php echo base_url('property/h/').$value['id'];?>" ><img src="<?php echo base_url('uploads/').$img[0];?>"></a>
                                        </div>
                                        <div class="item-entry overflow">
                                            <h5> <?php echo $value['name']; ?></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b><?php echo $value['name']; ?> m </span>
                                            <span class="proerty-price pull-right">  <?php echo $value['price']; ?></span>
                                            <p style="display: none;"><?php echo $value['description']; ?></p>
                                            <div class="property-icon">
                                                <img src="assets/img/icon/bed.png">
                                                <?php if(isset($value['bedroom'])){
                                                     echo $value['bedroom'];
                                                } ?>|
                                                <img src="assets/img/icon/shawer.png"><?php if(isset($value['bathroom'])){
                                                    echo $value['bathroom'];
                                                } ?>|
                                                <img src="assets/img/icon/cars.png"><?php if(isset($value['garage'])){
                                                    echo $value['garage'];
                                                } ?>

                                                <div class="dealer-action pull-right">
                                                    <a href="<?php echo base_url('edit/h/').$value['id'];?>" class="button">Edit </a>
                                                    <?php
                                                    if($value['active']==1){?>
                                                        <a href="#" class="button" onclick="Editor('h',0,<?php echo $value['id'];?>)">Deactivate</a>
                                                    <?php }else{ ?>
                                                        <a href="#" class="button delete_user_car" onclick="Editor('h',1,<?php echo $value['id'];?>)">Activate</a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php }} ?>
                                <?php if (!empty($lands)) {

                                    foreach($lands as $key=>$value){
                                        $img = json_decode($value['image'],true);
                                        ?>
                                        <div class="col-md-4 p0">
                                            <div class="box-two proerty-item">
                                                <div class="item-thumb">
                                                    <a href="<?php echo base_url('property/l/').$value['id'];?>" ><img src="<?php echo base_url('uploads/').$img[0];?>"></a>
                                                </div>
                                                <div class="item-entry overflow">
                                                    <h5> <?php echo $value['name']; ?></h5>
                                                    <div class="dot-hr"></div>
                                                    <span class="pull-left"><b> Area :</b><?php echo $value['name']; ?> m </span>
                                                    <span class="proerty-price pull-right">  <?php echo $value['price']; ?></span>
                                                    <p style="display: none;"><?php echo $value['description']; ?></p>
                                                    <div class="property-icon">

                                                        <div class="dealer-action pull-right">
                                                            <a href="<?php echo base_url('edit/l/').$value['id'];?>" class="button">Edit </a>
                                                            <?php
                                                            if($value['active']==1){?>
                                                                <a href="#" class="button" onclick="Editor('l',0,<?php echo $value['id'];?>)">Deactivate</a>
                                                            <?php }else{ ?>
                                                                <a href="#" class="button delete_user_car" onclick="Editor('l',1,<?php echo $value['id'];?>)">Activate</a>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                            </div>
                                            </div>
                                        </div>

                                    <?php }} ?>
                                <?php if (!empty($spaces)) {

                                    foreach($spaces as $key=>$value){
                                        $img = json_decode($value['image'],true);
                                        ?>
                                        <div class="col-md-4 p0">
                                            <div class="box-two proerty-item">
                                                <div class="item-thumb">
                                                    <a href=<?php echo base_url('property/s/').$value['id'];?>" ><img src="<?php echo base_url('uploads/').$img[0];?>"></a>
                                                </div>
                                                <div class="item-entry overflow">
                                                    <h5> <?php echo $value['name']; ?></h5>
                                                    <div class="dot-hr"></div>
                                                    <span class="pull-left"><b> Area :</b><?php echo $value['name']; ?> m </span>
                                                    <span class="proerty-price pull-right">  <?php echo $value['price']; ?></span>
                                                    <p style="display: none;"><?php echo $value['description']; ?></p>
                                                    <div class="property-icon">

                                                        <div class="dealer-action pull-right">
                                                            <a href="<?php echo base_url('edit/s/').$value['id'];?>" class="button">Edit </a>
                                                            <?php
                                                            if($value['active']==1){?>
                                                                <a href="#" class="button" onclick="Editor('s',0,<?php echo $value['id'];?>)">Deactivate</a>
                                                            <?php }else{ ?>
                                                                <a href="#" class="button delete_user_car" onclick="Editor('s',1,<?php echo $value['id'];?>)">Activate</a>
                                                            <?php } ?>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php }} ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function Editor(type,status,id) {
                var url = "<?php echo base_url('active'); ?>" ;
                axios.post(url, {'status':status,'id':id,'type':type})
                    .then(function (response) {
                        toastr.success("Done ");


                    })
                    .catch(function (error) {
                        toastr.error(error);
                    });

            }

            var data = sessionStorage.getItem('isLogged');
            if(!data){
                window.location.replace("<?php echo base_url();?>"); 
            }
        </script>