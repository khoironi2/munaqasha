<?php
	/**
	 * 
	 */
	class Beranda extends CI_Controller	{
		
		public function __construct() {
		parent::__construct();
		
		
		 if($this->session->userdata('logged_in') !== TRUE){
     	 redirect();
    	}    
	}

	
   	public function index(){
   		if($this->session->userdata('level')==='2'){
   		  $user_id = $this->session->userdata('user_id');
		  $data['datauser'] = $this->Model_user->getDataById($user_id);
		  $data['sugest'] 	= $this->Model_user->getData();
		  $data['post'] 	= $this->Model_post->getData();
		 
          $this->template->load('beranda/Beranda','beranda/data/Beranda', $data);
      }else{
          redirect('auth/logout');
      }
  	}

  	public function LoadPost(){
   		if($this->session->userdata('level')==='2'){
   		  $user_id = $this->session->userdata('user_id');
		  $data['datauser'] = $this->Model_user->getDataById($user_id);
		  $data['sugest'] 	= $this->Model_user->getData();
		  $data['post'] 	= $this->Model_post->getData();
		  // $data['komen'] 	= $this->Model_post->getDataKomentar();
          $this->load->view('beranda/data/LoadPost', $data);
      }else{
          redirect('auth/logout');
      }
  	}



	}
?>