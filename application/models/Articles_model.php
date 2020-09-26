<?php
	class Articles_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

	public function get_articles($slug = FALSE, $limit = FALSE, $offset = FALSE){
		if($limit){
			$this->db->limit($limit, $offset);
		}
		if($slug === FALSE){
			$this->db->order_by("timestamp", "desc");
			$query = $this->db->get('articles');
			return $query->result_array();
		}

		$this->db->order_by("timestamp", "desc");
		$query = $this->db->get_where('articles', array('slug' => $slug));

		return $query->row_array();
	}

	public function get_other_articles(){
		$this->db->order_by('rand()');
		 $this->db->limit(3);
		$query = $this->db->get('articles');
		return $query->result_array();

		return $query->row_array();
	}


	public function create_article($article_image){
		$slug = url_title($this->input->post('title'));

		if (!empty($this->input->post('status'))){
		  $status = '1';
		} else {
	      $status = '2';
	    }

		$data = array(
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'image' => $article_image,
			'status' => $status,
			'slug' => $slug,
			'adminID' => $this->session->userdata('user_id')
		);

		return $this->db->insert('articles', $data);
	}

	public function update_article($id){
		$slug = url_title($this->input->post('edittitle'));

		if(!empty($this->input->post('editstatus'))){
	     	$editstatus = $this->input->post('editstatus');
	    } else {
	    	$editstatus = $this->input->post('editstat');
	    }

		$data = array(
			'title' => $this->input->post('edittitle'),
			'content' => $this->input->post('editcontent'),
			'status' => $editstatus,
			'slug' => $slug,
			'adminID' => $this->session->userdata('user_id')
		);

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('articles', $data);
	}

	public function update_banner($id, $edit_article_image){
		$data = array(
			'image' => $edit_article_image,
		);

		$this->db->where('id', $this->input->post('id'));
		return $this->db->update('articles', $data);
	}
}