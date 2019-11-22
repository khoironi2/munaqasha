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
 
	
   	

  	public function read($post_id){
  		if ($this->session->userdata('level')==='2') {
  			
  		$user_id = $this->session->userdata('user_id');
		$data['datauser'] = $this->Model_user->getDataById($user_id);
		$data['sugest'] 	= $this->Model_user->getData();
		$data['postbyid'] 	= $this->Model_post->getDataById($post_id);      
        $data['commentars'] = $this->db->get_where('tbl_komentar_post', ['post_id' => $post_id])->result_array();
        $data['commentar']  = $this->db->get_where('tbl_komentar_post', ['post_id' => $post_id])->num_rows();
        $this->form_validation->set_rules('komentar_post', 'komentar_post', 'required');

        if ($this->form_validation->run() == false){
            $this->template->load('beranda/BerandaPost','beranda/data/post', $data);
        } else {
        	date_default_timezone_set("ASIA/JAKARTA");
            $nama_lengkap_post = $this->session->userdata('nama_lengkap');
			$user_ava_post = $this->session->userdata('user_ava');
            $data = [
                
                'user_id'	=> $user_id,
				'post_id'	=> $post_id,
				'komentar_post_sentence'	=> $this->input->post('komentar_post', true),
				'komentar_post_datetime'	=>date('Y-m-d H:i:s'),
				'nama_lengkap_post'	=> $nama_lengkap_post,
				'user_ava_post'	=> $user_ava_post
            ];

            $this->db->insert('tbl_komentar_post', $data);
            redirect('post/Post/read/' . $post_id);
        }
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