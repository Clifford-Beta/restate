 
        
        
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Home New account / Sign in </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
 

        <!-- register-area -->
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                <div class="col-md-6">
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>New account : </h2> 
                            <form action="" method="post" id="regform">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name1">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email1">
                                </div>
                                <div class="form-group">
                                    <label for="password">Phone</label>
                                    <input type="phone" class="form-control" id="phone1">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password1">
                                </div>
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default" id="regit" >Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box-for overflow">                         
                        <div class="col-md-12 col-xs-12 login-blocks">
                            <h2>Login : </h2> 
                            <form action="#" method="post" id="loginform">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-default" id="logit"> Log in</button>
                                </div>
                            </form>
                            <br>
                             <div id="ken">
                                      <p style="text-align: center; "><a href="#">Need an account? Register now.</a></p>
                                 </div>
                            
                           
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>      
   

        <script>
<<<<<<< HEAD
<<<<<<< HEAD
            function loginnow() {
        url = "<?php echo base_url('Heavenlink/dologin')?>";

=======
=======
var data = sessionStorage.getItem('isLogged');
            if(data){
                window.location.replace("<?php echo base_url('Heavenlink/submit_property');?>");
            }

>>>>>>> local
            $( "#logit" ).click(function( event ) {
  event.preventDefault();
  url = "<?php echo base_url('Heavenlink/dologin'); ?>" ;
        // url = "http://localhost/restate/Heavenlink/dologin";
>>>>>>> local
        data = { "email": $('#email').val(), "password": $('#password').val() };
        // data = $("#loginform").serialize()
        axios.post(url, data)
            .then(function (response) {
                toastr.success("Welcome "+response.data.username);
                ss = {'name':response.data.username,'email':response.data.email,'isLogged':true,'id':response.data.id};
                setSess(ss);
                console.log(response.data.username);
                
            })
            .catch(function (error) {
                toastr.error(error);
            });
});
          $( "#regit" ).click(function( event ) {
  event.preventDefault();
  url = "<?php echo base_url('Heavenlink/doregister'); ?>" ;
        // url = "http://localhost/restate/Heavenlink/dologin";
        data = { "email": $('#email1').val(), "password": $('#password1').val(),"name": $('#name1').val(),"phone": $('#phone1').val() };
        // data = $("#regform").serializeArray()
        axios.post(url, data)
            .then(function (response) {
                toastr.success("Welcome "+data['name']);

                console.log(response.data);
                ss = {'name':data['name'],'email':data['email'],'isLogged':true,'id':response.data.inserted_id};
                setSess(ss);

                
            })
            .catch(function (error) {
                toastr.error(error);
            });
});

function setSess(params) {
    sessionStorage.User = params.name;
    sessionStorage.Email = params.email;
    sessionStorage.isLogged = params.isLogged;
    sessionStorage.Id = params.id;
    window.location.replace("<?php echo base_url('Heavenlink/submit_property');?>");
    
}
        </script>
       <?php  $this->load->view('/templates/js'); ?>

       