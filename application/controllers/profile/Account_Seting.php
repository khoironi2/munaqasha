<?php
	/**
	 * 
	 */
	class Account_Seting extends CI_Controller	{
		
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
				$this->load->view('profile/Account_Seting',$data);
			}else{
				redirect('auth/logout');
			}
		}


		public function updateAva() {
		//CONFIGURASI UPLOAD IMAGE
		$config['upload_path'] 		= './assets/images/upload/profile';
		$config['allowed_types'] 	= 'jpg|png|svg';
		$config['max_size'] 		= '12000';
		$this->upload->initialize($config);
		$this->load->library('upload', $config);

		//PROSES UPLOAD IMAGE
		if(! $this->upload->do_upload('avapelamar')) {
			$data['errors'] 	= $this->upload->display_errors();
			print_r($data);
		} else {

			$upload_data = array('uploads' =>$this->upload->data());

			$data = array('user_ava' => $upload_data['uploads']['file_name']);

			$user_id = $this->session->userdata('user_id');

			$this->Model_user->updateData($user_id, $data);

			redirect(site_url('profile/Profile'));

		}
	}




	}
?>