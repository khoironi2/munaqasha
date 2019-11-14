<?php 

class Model_post extends CI_Model {

	public function insertPost($data) {
		$this->db->insert('tbl_post', $data);

		if($this->db->affected_rows() > 0) 
			return true;
		else
			return false;
	}

	public function getData() {
		$this->db->select('*');
		$this->db->from('tbl_post');
		$this->db->join('tbl_user','tbl_user.user_id=tbl_post.user_id');
		$this->db->join('tbl_komentar_post','tbl_komentar_post.post_id=tbl_post.post_id','left');
		$this->db->group_by('tbl_komentar_post.post_id');
		
		$result = $this->db->get();

		return $result->result();
	}
	public function getDataKomentar() {
		$this->db->select('*');
		$this->db->from('tbl_komentar_post');
		$this->db->join('tbl_user','tbl_user.user_id=tbl_komentar_post.user_id','right');
		$this->db->join('tbl_post','tbl_post.post_id=tbl_komentar_post.post_id','right');
		$result = $this->db->get();
		return $result->result();
	}

	function getDataById($user_id) {
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('user_id', $user_id);

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