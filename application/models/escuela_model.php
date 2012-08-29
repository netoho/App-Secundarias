<?php
class Escuela_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	function getData(){
		$query = $this->db->get('Escuelas');
		if($query->num_rows() > 0) {
			return $query->result();
		} else {
			echo "Database is empty";
		}
	}
}
?>