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


		public function update() {
		
		$data = array('user_id' 				=> $this->session->userdata('user_id'),
					  'nama_lengkap'			=> $this->input->post('nama_lengkap'),
					  'city'					=> $this->input->post('city'));

		$user_id = $this->session->userdata('user_id');
		$this->Model_user->updateData($user_id, $data);
		$this->session->set_flashdata('sukses', 'Berhasil Mengubah Data');
		redirect(site_url('profile/Account_Seting'));
	}




	}
?>