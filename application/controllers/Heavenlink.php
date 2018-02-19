<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Heavenlink extends CI_Controller 
{

	 function __construct()
    {
    	parent::__construct();
    	$this->load->helper('url');
    }
    public function index()
    {
    	$data['title']='Heavenlink Properties | Home';
       
        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/index');
        $this->load->view('/templates/footer',$data);
    } 
   public function properties()
    {
    	$data['title']='Heavenlink Properties | Properties';

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/properties');
        $this->load->view('/templates/footer',$data);
    }
    /*public function propertya()
    {
        $data['title']='Heavenlink Properties | Properties';

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/propertya');
        $this->load->view('/templates/footer',$data);
    }
     public function propertyb()
    {
        $data['title']='Heavenlink Properties | Properties';

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/propertyb');
        $this->load->view('/templates/footer',$data);
    }
     public function propertiesc()
    {
        $data['title']='Heavenlink Properties | Properties';

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/propertyc');
        $this->load->view('/templates/footer',$data);
    }*/
    public function land()
    {
    	$data['title']='Heavenlink Properties | Land';

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/land');
        $this->load->view('/templates/footer',$data);
    }



    public function addland(){
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $data = json_decode($stream_clean,true);
        
        $this->form_validation->set_data($data);
    if($this->form_validation->run('land')!=false){
        $datea = array();
        foreach ($data as $key => $value){
                $datea['land_'.$key] = $value;
        }
        $res = $this->main_model->insert("land",$datea,'land_id');
        
        if($res != FALSE){
            $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($res, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
        }
        $this->output
        ->set_status_header(403)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode(FALSE, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
    }
    $this->output
        ->set_status_header(400)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode(validation_errors(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
    }

    public function editland(){
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $data = json_decode($stream_clean,true);
        
        $this->form_validation->set_data($data);
    if($this->form_validation->run('land')!=false){
        $datea = array();
        foreach ($data as $key => $value){
                $datea['land_'.$key] = $value;
        }
        $res = $this->main_model->update("editland",$datea,array('land_id'=>$datea["id"]));
        
        if($res != FALSE){
            $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($res, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
        }
        $this->output
        ->set_status_header(403)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode(FALSE, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
    }
    $this->output
        ->set_status_header(400)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode(validation_errors(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
    }

    

     public function addhouse(){
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $data = json_decode($stream_clean,true);
        
        $this->form_validation->set_data($data);
    if($this->form_validation->run('house')!=false){
        $datea = array();
        foreach ($data as $key => $value){
                $datea['house_'.$key] = $value;
        }
        $res = $this->main_model->insert("house",$datea,'idhouse');
        
        if($res != FALSE){
            $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($res, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
        }
        $this->output
        ->set_status_header(403)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode(FALSE, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
    }
    $this->output
        ->set_status_header(400)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode(validation_errors(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
    }

    public function edithouse(){
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $data = json_decode($stream_clean,true);
        
        $this->form_validation->set_data($data);
    if($this->form_validation->run('house')!=false){
        $datea = array();
        foreach ($data as $key => $value){
                $datea['house_'.$key] = $value;
        }
        $res = $this->main_model->update("edithouse",$datea,array('idhouse'=>$datea["id"]));
        
        if($res != FALSE){
            $this->output
        ->set_status_header(200)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode($res, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
        }
        $this->output
        ->set_status_header(403)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode(FALSE, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
    }
    $this->output
        ->set_status_header(400)
        ->set_content_type('application/json', 'utf-8')
        ->set_output(json_encode(validation_errors(), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
    }


    public function contact()
    {
    	$data['title']='Heavenlink Properties | Contact Us';
        
        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/contact');
        $this->load->view('/templates/footer',$data);
    }
     public function login()
    {
        $data['title']='Heavenlink Properties | Login';
        

        $this->load->view('/templates/head',$data);
        $this->load->view('/contents/login');
    }
    public function dologin(){
        $stream_clean = $this->security->xss_clean($this->input->raw_input_stream);
        $data = json_decode($stream_clean,true);
        $this->form_validation->set_data($data);
    if($this->form_validation->run('login')!=false){
         $res = $this->main_model->fast_login($data['email'],$data['password']);
        
        if($res != NULL){
            // header('Content-Type: application/json');
            
        $this->Success($res);
        }
        $this->Failed(FALSE);
        
    }else{
        $this->ValidationFailed(validation_errors());
    }

        
    }

     public function register()
    {
        $data['title']='Heavenlink Properties | Sign Up';

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
   $this->ValidationFailed(valdation_errors());
        
    }
    public function submit_property()
    {
        $data['title']='Heavenlink Properties | Submit Property';

        $this->load->view('/templates/head',$data);
        $this->load->view('/templates/nav',$data);
        $this->load->view('/contents/submit-property');
        $this->load->view('/templates/footer',$data);
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
        ->set_output(json_encode(FALSE, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
        ->_display();
        exit;
}

}

