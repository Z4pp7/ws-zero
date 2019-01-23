<?php
class Cliente_model extends CI_Model{
	public function __construct(){
	}



  public function getClientes(){
    $query = $this->db->query("select c.id_cl,c.cedula_cl,c.nombres_cl,c.apellidos_cl,c.fecha_nacimiento_cl,c.telefono_cl,c.correo_cl, u.codigo_postal_ub, u.pais_ub, u.provincia_ub,u.ciudad_ub,u.calle_uno_ub,u.calle_dos_ub,u.referencia_ub,u.numero_casa_ub
	 from tbl_cliente as c
	 join tbl_ubicacion  as u on c.id_cl=u.id_cl");
		if($query->num_rows() > 0){
			return $query->result_array();
		}
		return null;
	}



}
?>
