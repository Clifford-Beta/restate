<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Heavenlink extends CI_Controller 
{

	 function __construct()
    {
    	parent::__construct();
        $this->load->helper('url');
        $this->output->cache(0);

    }
    public function index()
    {
    	$data['title']='Inkarealtors | Home';
       $data['houses']=$this->main_model->get_many_hse(NULL,8);
        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/index');
        $this->load->view('/templates/footer',$data);
    } 
   public function properties()
    {
    	$data['title']='Inkarealtors | Properties';
        $data['houses']=$this->main_model->get_many_hse(NULL,NULL);
        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/properties');
        $this->load->view('/templates/footer',$data);
    }
    public function property($type, $id)
    {
        $data['title']='Inkarealtors | Properties';
        if($type=='l'){
            $data['house']=$this->main_model->get_many_lnd(array('land_id'=>$id));
        }else if($type=='s'){
           $data['house']=$this->main_model->get_many_spc(array('idspace'=>$id));
        }else{
        $data['house']=$this->main_model->get_many_hse(array('idhouse'=>$id));
    }
        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/single',$data);
        $this->load->view('/templates/footer',$data);
    }
     public function propertyb()
    {
        $data['title']='Inkarealtors | Properties';

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/propertyb');
        $this->load->view('/templates/footer',$data);
    }

     public function propertiesc()
    {
        $data['title']='Inkarealtors | Properties';

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/propertiesc');
        $this->load->view('/templates/footer',$data);
    }
    public function profile()
    {
        $data['title']='Inkarealtors | Profile';

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/profile');
        $this->load->view('/templates/footer',$data);
        $this->load->view('/contents/form_validation');
    }

    public function profiler()
    {
        $data = array();
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        parse_str($stream_clean, $data);
        $datea = array();
        $datea['username'] = $data['firstname'].' '.$data['lastname'];
        $datea['phone'] = $data['phone'];
        $datea['profile'] = $data['image'];
        if(!empty($data['password'])){
            $datea['password'] =sha1($data['password']);
        }
        $res = $this->main_model->update("user",$datea,array('email'=>$data["email"]));
        if($res != FALSE){
            $this->Success("Update successful");
        }
        $this->Failed("Failed to  update user");
    }


    public function user_properties()
      {
        $data['title']='Inkarealtors | User Property';
        $usr = $this->session->userdata('user');
        if($usr != NULL){
            $id=$usr->id;
        }else{
            $id=1;
        }
          $data['houses']=$this->main_model->get_many_hse(array('house_owner'=>$id),NULL);
          $data['lands']=$this->main_model->get_many_lnd(array('land_owner'=>$id),NULL);
          $data['spaces']=$this->main_model->get_many_spc(array('space_owner'=>$id),NULL);
          $this->load->view('/templates/head',$data);
          $this->load->view('/templates/nav',$data);
          $this->load->view('/contents/user_properties',$data);
          $this->load->view('/templates/footer',$data);
    }
    public function land()
    {
    	$data['title']='Inkarealtors | Land';
        $data['houses']=$this->main_model->get_many_lnd(NULL,NULL);
        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/land');
        $this->load->view('/templates/footer',$data);
    }

    public function cmc()
    {
        $data['title']='Inkarealtors | Commercial Space';
        $data['houses']=$this->main_model->get_many_spc(NULL,NULL);
        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/cmc');
        $this->load->view('/templates/footer',$data);
    }



    private function addland($data){
        // $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        // $data = json_decode($stream_clean,true);
        
        $this->form_validation->set_data($data);
    if($this->form_validation->run('land')!=false){
        $datea = array();
        foreach ($data as $key => $value){
                $datea['land_'.$key] = $value;
        }
        $datea['status'] = 1;
        $res = $this->main_model->insert("land",$datea,'land_id');
        
        if($res != FALSE){
           $this->Success("Done");
        }
       $this->Failed("Failed to add land");
    }
       $this->ValidationFailed(validation_errors());
    
    }
    private function addspace($data){
        // $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        // $data = json_decode($stream_clean,true);
//            var_dump("Am here");
        $this->form_validation->set_data($data);
        if($this->form_validation->run('space')!=false){
            $datea = array();
            foreach ($data as $key => $value){
                $datea['space_'.$key] = $value;
            }
            $datea['status'] = 1;
            $res = $this->main_model->insert("space",$datea,'idspace');

            if($res != FALSE){
                $this->Success("Done");
            }
            $this->Failed("Failed to add commercial space");
        }
        $this->ValidationFailed(validation_errors());

    }

    public function editland($data){
        $this->form_validation->set_data($data);
        if($this->form_validation->run('editland')!=false){
            $datea = array();
            foreach ($data as $key => $value){
                if(!empty($value) && $value != "" && $value != '[]'){
                    $datea['land_'.$key] = $value;
                }

            }
            $res = $this->main_model->update("land",$datea,array('land_id'=>$data["id"]));


            if($res != FALSE){
                $this->Success("Done");
            }
            $this->Failed("Failed to edit land");
        }
//        echo "validation failed";
        $this->ValidationFailed(validation_errors());

    }




    

     private function addhouse($data){
        // $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        // $data = json_decode($stream_clean,true);
        
        $this->form_validation->set_data($data);
    if($this->form_validation->run('house')!=false){
        $datea = array();
        foreach ($data as $key => $value){

                $datea['house_'.$key] = $value;
        }
        $datea['status'] = 1;
        $res = $this->main_model->insert("house",$datea,'idhouse');
        
        if($res != FALSE){
            $this->Success("Done");
        }
       
        $this->Failed('Failed to add property');
    }
       $this->ValidationFailed(validation_errors());
    }

    public function edithouse($data){
        $this->form_validation->set_data($data);
        if($this->form_validation->run('edithouse')!=false){
            $datea = array();
            foreach ($data as $key => $value){
                if(!empty($value) && $value != ""){
                    $datea['house_'.$key] = $value;
                }

            }
            unset($datea['house_id']);
            $res = $this->main_model->update("house",$datea,array('idhouse'=>$data["id"]));


            if($res != FALSE){
                $this->Success("Done");
            }
            $this->Failed("Failed to edit house");
        }
        $this->ValidationFailed(validation_errors());

    }

    public function editspace($data){
        $this->form_validation->set_data($data);
        if($this->form_validation->run('editspace')!=false){
            $datea = array();
            foreach ($data as $key => $value){
                if(!empty($value) && $value != ""){
                    $datea['space_'.$key] = $value;
                }

            }
            unset($datea['space_id']);
            $res = $this->main_model->update("space",$datea,array('idspace'=>$data["id"]));


            if($res != FALSE){
                $this->Success("Done");
            }
            $this->Failed("Failed to edit space");
        }
        $this->ValidationFailed(validation_errors());

    }


    public function contact()
    {
    	$data['title']='Inkarealtors | Contact Us';
        
        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/contact');
        $this->load->view('/templates/footer',$data);
    }
     public function login()
    {
        $data['title']='Inkarealtors | Login';
        

        $this->load->view('/templates/head',$data);
        $this->load->view('/contents/login');
    }

    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect('/');

    }

    public function dologin(){
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $data = json_decode($stream_clean,true);
        $this->form_validation->set_data($data);
    if($this->form_validation->run('login')!=false){
         $res = $this->main_model->fast_login($data['email'],$data['password']);
        
        if($res != NULL){
            // header('Content-Type: application/json');
             $this->session->set_userdata('user',$res[0]);
        $this->Success($res[0]);
        }
        $this->Failed(FALSE);
        
    }else{
        $this->ValidationFailed(validation_errors());
    }

        
    }

     public function register()
    {
        $data['title']='Inkarealtors | Sign Up';

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/register');
        $this->load->view('/templates/footer',$data);
    }

     public function doregister(){
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $data = json_decode($stream_clean,true);
        $this->form_validation->set_data($data);
    if($this->form_validation->run('register')!=false){
        $form_data = array('username' => $data['name'],
    'email' => $data['email'],
    'password' => sha1($data['password'])
    );
        $res = $this->main_model->insert("user",$form_data,'id');
        
        if($res != FALSE){
            $this->Success($res);
        }
        $this->Failed($res);
    }
   $this->ValidationFailed(validation_errors());
        
    }
    public function submit_property()
    {
        $data['title']='Inkarealtors | Submit Property';
        $data['error']='';
        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/submit-property');
        $this->load->view('/templates/footer',$data);
    }

    public function edit_property($type,$id)
    {
        $data['title']='Inkarealtors | Edit Property';
        $data['error']='';
        $data['id'] = $id;
        if($type=='l'){
                 $data['prop']=$this->main_model->get_many_lnd(array('land_id'=>$id))[0];
            $data['prop']['type']=$type;
             }else if($type=='s'){
                 $data['prop']=$this->main_model->get_many_spc(array('idspace'=>$id))[0];
            $data['prop']['type']=$type;
             }else{

                 $data['prop']=$this->main_model->get_many_hse(array('idhouse'=>$id))[0];
            $data['prop']['type']='h';
             }

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/edit-property',$data);
        $this->load->view('/templates/footer',$data);
    }
    public function dosubmit_property()
    {
        $data = array();
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        parse_str($stream_clean, $data);
        if(strtolower($data['type'])=='land'){
            unset($data['type']);
            $data['lr']=$data['name'];
             unset($data['name']);
            unset($data['bath']);
             unset($data['bedroom']);
            unset($data['status']);
            $this->addland($data);
        }else if(strtolower($data['type'])=='space'){
            unset($data['type']);
            unset($data['bath']);
            unset($data['bedroom']);
            unset($data['status']);
            $this->addspace($data);
        }
        else{
            unset($data['type']);
            // unset($data['lr']);
            $this->addhouse($data);
        }
    }
    public function active()
    {
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $data = json_decode($stream_clean,true);
        if(strtolower($data['type'])=='l'){
           $this->main_model->update('land',array('status'=>$data['status']),array('land_id'=>$data['id']));
        }else if(strtolower($data['type'])=='s'){
            $this->main_model->update('space',array('status'=>$data['status']),array('idspace'=>$data['id']));
        }
        else{
            $this->main_model->update('house',array('status'=>$data['status']),array('idhouse'=>$data['id']));
        }
        $this->Success("Done");
    }

    public function suggest()
    {
        $suggestions = $this->main_model->suggestions();
        $rps=array();
        if($suggestions != NULL){
                foreach ($suggestions as $key => $value){
                    array_push($rps,$value->name);
                }
        }

        $this->Success($rps);

    }
    public function search()
    {
        $stream_clean = $this->security->xss_clean($this->input->post());
//        $this->Success($stream_clean);
        $rules = array();
        if(array_key_exists('kwarg',$stream_clean)){
            $rules['house_name'] = $stream_clean['kwarg'];
        }
        if(array_key_exists('location',$stream_clean)){
            $rules['house_location'] = $stream_clean['location'];

        }
        if(array_key_exists('status',$stream_clean)){
            $rules['house_status'] = $stream_clean['status'];
        }
        $res = $this->main_model->get_sr_hse($rules,NULL);
        if($res != NULL){
            $data['title']='Inkarealtors | Properties';
            $data['houses']=$res;
            $this->load->view('/templates/head',$data);
            $this->load->view('/templates/nav',$data);
            $this->load->view('/contents/properties');
            $this->load->view('/templates/footer',$data);

        }else{
            redirect('/');
        }

    }
    public function doedit_property()
    {

        $data = array();
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        parse_str($stream_clean, $data);
//        var_dump($data);
        $imgs = json_decode($data['image'],true);
        if(empty($imgs)){
            unset($data['image']);
        }
        if(strtolower($data['type'])=='land'){
            unset($data['type']);
            $data['lr']=$data['name'];
            unset($data['name']);
            unset($data['bath']);
            unset($data['bedroom']);
            unset($data['status']);
            $this->editland($data);
        }else if(strtolower($data['type'])=='space'){
            unset($data['type']);
            unset($data['bath']);
            unset($data['bedroom']);
            unset($data['status']);
            $this->editspace($data);
        }
        else{
            unset($data['type']);
//             unset($data['lr']);
            $this->edithouse($data);
        }
    }

    public function populate_search()
    {
        $sgs = $this->main_model->suggestions();
        if($sgs != NULL){
            echo json_encode($sgs);
        }else{
            $this->Failed("No data found");
        }
    }


    public function do_upload(){
    
        // Detect form submission.
        // $datea = $this->input->post();
        // if($this->input->post()){
        
            $path = './uploads/';
            $this->load->library('upload');
            // $this->load->library('my_upload');
            
            /**
             * Refer to https://ellislab.com/codeigniter/user-guide/libraries/file_uploading.html 
             * for full argument documentation.
             *
             */
             
            // Define file rules
            $this->upload->initialize(array(
                "upload_path"       =>  $path,
                "allowed_types"     =>  "gif|jpg|png",
                "max_size"          =>  '10000000',
                "max_width"         =>  '10240',
                "max_height"        =>  '7680'
            ));

            $uploadData = array();
            $filesCount = count($_FILES['file']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['file']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['file']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['file']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['file']['size'][$i];

                $uploadPath = 'uploads/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                    $this->editarFotoMini($fileData['full_path']);
                    array_push($uploadData,$fileData);

                }
            }
            if(!empty($uploadData)){
                $dta = array('msg'=>count($uploadData) . 'File(s) successfully uploaded.',
            'dta'=>$uploadData
            );
                $this->Success($dta);
            }
            $errors = array('error' => "File upload failed");               
            
                $this->Failed($errors);

            

    }

private function editarFotoMini($src) {
        $config['image_library'] = 'gd2';
        $config['source_image'] = $src;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 750;
        $config['height'] = 400;

        $this -> load -> library('image_lib', $config); 
        // var_dump($config);
        // echo json_encode($config);    
        if(!$this -> image_lib -> resize()){
            // var_dump($this->image_lib->display_errors());
        }
        $this->image_lib->clear();

    }

    private function Success($data){
            $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
        
}

private function ValidationFailed($data){
    $this->output
        ->set_status_header(400)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
}

private function Failed($data){
     $this->output
        ->set_status_header(403)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
}

}


