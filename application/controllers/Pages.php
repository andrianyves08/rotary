<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index($offset = 0){
		$page = 'index';
		$data['title'] = ucfirst($page);

		// Pagination Config	
		$config['base_url'] = base_url() . 'pages/index/';
		$config['total_rows'] = $this->db->count_all('articles');
		$config['per_page'] = 3;
		$config['uri_segment'] = 3;
		$config['attributes'] = array('class' => 'pagination-link');

		// Init Pagination
		$this->pagination->initialize($config);

		$data['articles'] = $this->articles_model->get_articles(FALSE, $config['per_page'], $offset);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/scripts');
        $this->load->view('templates/footer');
	}

	public function history(){
		$page = 'history';
		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/scripts');
        $this->load->view('templates/footer');
	}

	public function events(){
		$page = 'events';
		$data['title'] = ucfirst($page);

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/scripts');
        $this->load->view('templates/footer');
	}

	public function articles($slug = NULL){
		$page = 'articles';
		$data['title'] = ucfirst($page);

		$data['articles'] = $this->articles_model->get_articles($slug);
		$data['other_articles'] = $this->articles_model->get_other_articles();

		$this->load->view('templates/header', $data);
        $this->load->view('templates/nav', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/scripts');
        $this->load->view('templates/footer');
	}
}
