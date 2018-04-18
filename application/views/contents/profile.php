        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Hello : <span class="orange strong">My Name</span></h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header --> 

        <!-- property area -->
        <div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">

                        <?php echo form_open_multipart('profiler', array('class' => 'upload-image-form', 'name'=>'profile'));?>
                            <div class="profiel-header">
                                <h3>
                                    <b>BUILD</b> YOUR PROFILE <br>
                                    <small>This information will let us know more about you.</small>
                                </h3>
                                <hr>
                            </div>

                            <div class="clear">
                                <div class="col-sm-3 col-sm-offset-1">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <?php
                                            $img = "";
                                            if (!empty($user)) {
                                                $img = json_decode($user[0]->profile)[0];
//                                                var_dump($img);

                                                }

                                            ?>
                                            <img src="<?php echo base_url('uploads/').$img;?>" class="picture-src" id="wizardPicturePreview" title=""/>
                                            <input type="file" id="wizard-picture">
                                        </div>
                                        <h6>Choose Picture</h6>
                                    </div>
                                </div>

                                <div class="col-sm-4 padding-top-25">

                                    <div class="form-group">
                                        <label>First Name</label>
                                        <?php
                                        if (!empty($user)) {
                                            ?>

                                            <input name="firstname" id="firstname" type="text" class="form-control" value="<?php
                                            $name = explode(" ", $user[0]->username);
                                            echo $name[0]; ?>">

                                        <?php }else{
                                        ?>
                                        <input name="firstname" id="firstname" type="text" class="form-control" placeholder="First name...">

                                        <?php } ?>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <?php
                                        if (!empty($user)) {
                                            ?>

                                            <input name="email" id="email" type="email" class="form-control"  value="<?php
                                            echo $user[0]->email; ?>">

                                        <?php }else{
                                            ?>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="user@email.com">

                                        <?php } ?>

                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" id="password" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4 padding-top-25">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <?php
                                        if (!empty($user)) {
                                            ?>

                                            <input name="lastname" id="lastname" type="text" class="form-control"  value="<?php
                                            $name = explode(" ", $user[0]->username);
                                            echo $name[1]; ?>">

                                        <?php }else{
                                            ?>
                                            <input name="lastname" id="lastname" type="text" class="form-control" placeholder="Last name...">

                                        <?php } ?>

                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <?php
                                        if (!empty($user)) {
                                            ?>

                                            <input name="phone" id="phone" type="text" class="form-control"  value="<?php
                                            echo $user[0]->phone; ?>">

                                        <?php }else{
                                            ?>
                                            <input name="phone" id="phone" type="text" class="form-control" placeholder="0700000000">

                                        <?php } ?>

                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Pasword</label>
                                        <input name="password_again" id="password_again" type="password" class="form-control">
                                    </div>

                                </div>
                                <div class="col-sm-4 col-sm-offset-3">
                                    <br>
                                    <input type='submit' class='btn btn-finish btn-primary' name='finish' value='Finish' />
                                </div>

                            </div>
                    </form>

                </div>
            </div><!-- end row -->

        </div>
    </div>

    <script>
         //var data = sessionStorage.getItem('isLogged');
         //   if(!data){
         //       window.location.replace("<?php //echo base_url();?>//");
         //   }
    </script>