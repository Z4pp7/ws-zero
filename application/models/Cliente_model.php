<?php
class Cliente_model extends CI_Model{
	public function __construct(){
	}



  public function get(){
    $query = $this->db->query("select*from tbl_cliente");
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		return null;
	}


}
?>
