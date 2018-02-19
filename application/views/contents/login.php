 
        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249); margin:0px;">
            <div class="container">


                <div class="col-md-8">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks" id="login">
                            <h2>Login : </h2> 
                            <form action="#" method="#">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default" onclick="loginnow()"> Log in</button>
                                </div>
                            </form>
                            <br>
                                  <div id="ken">
                                      <p style="text-align: center; "><a href="<?php echo site_url('Heavenlink/register');?>">Need an account? Register now.</a></p>
                                 </div>
                            
                            <!--<h2>Social login :  </h2> 
                            
                            <p>
                            <a class="login-social" href="#"><i class="fa fa-facebook"></i>&nbsp;Facebook</a> 
                            <a class="login-social" href="#"><i class="fa fa-google-plus"></i>&nbsp;Gmail</a> 
                            <a class="login-social" href="#"><i class="fa fa-twitter"></i>&nbsp;Twitter</a>  
                            </p> -->
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>      

        <script>
            function loginnow() {
        url = "<?php echo base_url('Heavenlink/dologin'); ?>" ;
        // url = "http://localhost/restate/Heavenlink/dologin";
        data = { "email": $('#email').val(), "password": $('#password').val() };
        axios.post(url, data)
            .then(function (response) {
                toastr.success("Welcome "+response.data.username);
                console.log(response.data.username);
                
            })
            .catch(function (error) {
                toastr.error(error);
            });

    }
        </script>
       <?php  $this->load->view('/templates/js'); ?>

       