<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$page = 'index';
		$data['title'] = ucfirst($page);

		$this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/nav', $data);
        $this->load->view('admin/'.$page, $data);
        $this->load->view('templates/admin/footer');
        $this->load->view('templates/admin/scripts');
	}

	public function gallery(){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$page = 'gallery';
		$data['title'] = ucfirst($page);

        $this->load->view('admin/'.$page, $data);
	}


	public function login(){
		$page = 'login';
		$data['title'] = ucfirst($page);

		$this->form_validation->set_error_delimiters('<script type="text/javascript">$(function(){toastr.error("', '")});</script>');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if($this->form_validation->run() === FALSE){
           	$this->load->view('templates/admin/header', $data);
	        $this->load->view('admin/'.$page, $data);
	        $this->load->view('templates/admin/scripts');

        } else {
            // Get input
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Login user
            $user_id = $this->admin_model->login($email, $password);

            if($user_id){
                // Create session
                $user_data = array(
                    'user_id' => $user_id['id'],
                    'email' => $email,
                    'firstname' => $user_id['firstname'],
                    'lastname' => $user_id['lastname'],
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);

                // Set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');

                redirect('admin');
            } else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Invalid Email/Password');

                redirect('login');
            }       
        }
	}

	// Log user out
	public function logout(){
        // Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');

        // Set message
        $this->session->set_flashdata('user_loggedout', 'You are now logged out');

        redirect('login');
	}

	public function articles(){
		$page = 'articles';
		$data['title'] = ucfirst($page);

		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

		$data['articles'] = $this->articles_model->get_articles();

		$this->form_validation->set_error_delimiters('<script type="text/javascript">$(function(){toastr.error("', '")});</script>');
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('content', 'content', 'required');

        if($this->form_validation->run() === FALSE){
			$this->load->view('templates/admin/header', $data);
	        $this->load->view('templates/admin/nav', $data);
	        $this->load->view('admin/'.$page, $data);
	        $this->load->view('templates/admin/footer');
	        $this->load->view('templates/admin/scripts');
		} else {
			// Upload Image
			$config['upload_path'] = './assets/img';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('banner')){
				$error = array('error' => $this->upload->display_errors());
	            $article_image = 'stock.jpeg';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$article_image = $_FILES['banner']['name'];
			}

			$this->articles_model->create_article($article_image);

			// Set message
			$this->session->set_flashdata('article_created', 'Your article has been created');

			redirect('admin/articles');
		}

	}

	public function update($id){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
		}

	    if (!empty($_FILES['editbanner']['name'])){
			// Upload Image
			$config['upload_path'] = './assets/img';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('editbanner')){
				$error = array('error' => $this->upload->display_errors());
	            $edit_article_image = 'stock.jpeg';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$edit_article_image = $_FILES['editbanner']['name'];
			}

			$this->articles_model->update_banner($id, $edit_article_image);
		}

		$this->articles_model->update_article($id);

		$this->session->set_flashdata('article_updated', 'Your article has been updated');

			redirect('admin/articles');
	}

}
