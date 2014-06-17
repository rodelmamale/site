<?php

	class Site extends CI_Controller{

		function index (){

			$data = array();

		//	$this->load->view('options_view');

			if($query = $this->site_model->get_records())
			{

				$data['records'] = $query;
			}

			$this->load->view('options_view', $data);
		}

		function create(){

			$data = array(
				'bname'	=> $this->input->post('bname'),
				'content' => $this->input->post('content'),
				'location' => $this->input->post('location'),
				'contact' => $this->input->post('contact')
				);

			$this->site_model->add_record($data);
			$this->index();
		}	

		function delete(){

			$this->site_model->delete_row();
			$this->index();

		}

		function update(){
			$data = array(
				'bname'	=> $this->input->post('bname'),
				'content' => $this->input->post('content'),
				'location' => $this->input->post('location'),
				'contact' => $this->input->post('contact')
				);

			$this->site_model->update_record($data);
			$this->index();

		}

		function get(){

			$this->load->model('site_model');
			$data['$query'] = $this->site_model->get_branch($id);
			$this->load->view('branch_view', $data);

		}


	}

