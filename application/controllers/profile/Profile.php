<?php
	/**
	 * 
	 */
	class Profile extends CI_Controller	{
		
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
				$data['pos2'] = $this->Model_post->getDataPostUser($user_id);
	   		    $data['post'] = $this->db->get_where('tbl_post', ['user_id' => $user_id])->result_array();
				$this->load->view('profile/Profile',$data);
			}else{
				redirect('auth/logout');
			}
		}

		public function preview($user) {
	      $user_id = $this->session->userdata('user_id');
	      $data['datauser'] = $this->Model_user->getDataById($user_id);
	      $data['preview'] = $this->Model_user->getDataUserById($user);
	      $data['pos2'] = $this->Model_post->getDataByUser($user);
	      $data['post'] = $this->db->get_where('tbl_post', ['user_id' => $user])->result_array();
       	  // $data['post2']  = $this->db->get_where('tbl_user', ['user_id' => $user])->num_rows();
	      $this->load->view('profile/Preview', $data);
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