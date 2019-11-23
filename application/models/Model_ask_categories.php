<?php 

class Model_ask_categories extends CI_Model {

	public function insertPost($data) {
		$this->db->insert('tbl_post', $data);

		if($this->db->affected_rows() > 0) 
			return true;
		else
			return false;
	}

	public function Get() {
		$this->db->select('*');
		$this->db->from('tbl_ask_categories');
		// // $this->db->where('tbl_komentar_post.post_id=tbl_post.post_id');

		// $this->db->join('tbl_user','tbl_user.user_id=tbl_post.user_id');
		// // $this->db->join('tbl_komentar_post','tbl_komentar_post.post_id=tbl_post.post_id');
		
	
		// $this->db->order_by('tbl_post.post_id','desc');
		
		$result = $this->db->get();

		return $result->result();
	}
	public function getDataKomentar() {
		$this->db->select('*');
		$this->db->from('tbl_komentar_post');
		$this->db->where('tbl_post.post_id=tbl_komentar_post.post_id');
		$this->db->join('tbl_user','tbl_user.user_id=tbl_komentar_post.userpost_id');
		$this->db->join('tbl_post','tbl_post.post_id=tbl_komentar_post.post_id');
		$this->db->group_by('tbl_komentar_post.post_id');
		$result = $this->db->get();
		return $result->result();
	}

	public function CountDataKomentar() {
		$this->db->select('tbl_user.nama_lengkap, tbl_user.user_ava, tbl_user.user_id,
			tbl_post.post_id, tbl_post.post_sentence, 
			count(tbl_komentar_post.komentar_post_id) as totalkomen ');
		$this->db->from('tbl_komentar_post');
		$this->db->where('tbl_post.post_id=tbl_komentar_post.post_id');
		$this->db->join('tbl_user','tbl_user.user_id=tbl_komentar_post.userpost_id');
		$this->db->join('tbl_post','tbl_post.post_id=tbl_komentar_post.post_id');
		$this->db->group_by('tbl_komentar_post.post_id');
		$result = $this->db->get();
		return $result->result();
	}

	function getDataById($post_id) {
		$this->db->select('*');
		$this->db->from('tbl_post');
		$this->db->where('tbl_post.post_id', $post_id);
		// $this->db->where(array('tbl_post.post_id' 		=> $post_id, 
		// 					   'tbl_user.user_id' 	=> $user_id));
		$this->db->join('tbl_user','tbl_user.user_id=tbl_post.user_id');
		$this->db->join('tbl_komentar_post','tbl_komentar_post.post_id=tbl_post.post_id','left');
		
		$result = $this->db->get();

		return $result->row();
	}
	function getDataPostUser($user_id) {
		$this->db->select('*');
		$this->db->from('tbl_post');
		$this->db->where('tbl_user.user_id', $user_id);
		// $this->db->where(array('tbl_post.post_id' 		=> $post_id, 
		// 					   'tbl_user.user_id' 	=> $user_id));
		$this->db->join('tbl_user','tbl_user.user_id=tbl_post.user_id');
		// $this->db->join('tbl_post','tbl_post.user_id=tbl_user.user_id');
		
		$result = $this->db->get();

		return $result->row();
	}
	function getDataByUser($user) {
		$this->db->select('*');
		$this->db->from('tbl_post');
		$this->db->where('tbl_user.user_id', $user);
		// $this->db->where(array('tbl_post.post_id' 		=> $post_id, 
		// 					   'tbl_user.user_id' 	=> $user_id));
		$this->db->join('tbl_user','tbl_user.user_id=tbl_post.user_id');
		// $this->db->join('tbl_post','tbl_post.user_id=tbl_user.user_id');
		
		$result = $this->db->get();

		return $result->row();
	}

	function getDataUserById($user) {
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('user_id', $user);

		$result = $this->db->get();

		return $result->row();
	}



	function getLogin($email, $password) {
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where(array('email' => $email, 'password' => $password));

		$result = $this->db->get();

		return $result->row();
	}

	 public function logout($data, $email)  {
        $this->db->where('email', $email);
        $this->db->update('tbl_user', $data);
    }
    
    function updateData($user_id, $data) {
		$this->db->where('user_id', $user_id);
		$this->db->update('tbl_user', $data);
	}

	

	public function deleteData($id) {
		$this->db->where('id', $id);
		$this->db->delete('tbl_user');

		if($this->db->affected_rows() > 0)
			return true;
		else
			return false;
	}


	

	


}