<?php

class Site_model extends CI_Model{

	function get_records(){

		$query = $this->db->get('ci_series');
		return $query->result();
	}

	function add_record($data){

		$this->db->insert('ci_series', $data);
		return;
	}

	
	function update_record($data){

		$this->db->where('id');
		$this->db->update('ci_series', $data);
	}

	function delete_row(){

		$this->db->where('id', $this->uri->segment(3));
		$this->db->delete('ci_series');
	}

	function get_branch($id){

			$this->load->database();
			$query = $this->db->getwhere('name', array('id=>$id'));
			return $query->row_array();
			
		}	
}

