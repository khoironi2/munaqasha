<?php
	/**
	 * 
	 */
	class Post extends CI_Controller	{
		
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
          $this->load->view('beranda/Beranda', $data);
      }else{
          redirect('auth/logout');
      }
  	}

  	public function doPost() {
		

			date_default_timezone_set("ASIA/JAKARTA");
			$user_id = $this->session->userdata('user_id');
			$data = array('user_id'	=> $user_id,
						  'post_sentence'	=> $this->input->post('post'),
						  'post_datetime'	=>date('Y-m-d H:i:s'),
						  'post_location'	=> $this->input->post('post_location')
						);

			$this->Model_post->insertPost($data);

			$this->session->set_flashdata('sukses', 'Berhasil di Tambah');

			redirect(site_url('beranda/beranda'));


		
	}




	}
?>