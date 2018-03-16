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
                                            <img src="assets/img/avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                            <input type="file" id="wizard-picture">
                                        </div>
                                        <h6>Choose Picture</h6>
                                    </div>
                                </div>

                                <div class="col-sm-4 padding-top-25">

                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input name="firstname" id="firstname" type="text" class="form-control" placeholder="First name...">
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="user@email.com">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" id="password" class="form-control">
                                    </div>
                                </div>

                                <div class="col-sm-4 padding-top-25">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input name="lastname" id="lastname" type="text" class="form-control" placeholder="Last name...">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input name="phone" id="phone" type="text" class="form-control" placeholder="0700000000">
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