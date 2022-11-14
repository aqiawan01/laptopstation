<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_specification_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('afa110_product_specification', $options);
		return $this->db->insert_id();
	}
	public function get_by($Product_specification_id)
	{
		$this->db->where('id', $Product_specification_id);
		$query = $this->db->get('afa110_product_specification');
		return $query->row();
	}
	public function update($Product_specification_id, $options)
	{
		$this->db->where('id', $Product_specification_id);
		$this->db->update('afa110_product_specification', $options);
		return $this->db->affected_rows();
	}


	public function get_specification_by($product_id)
	{
		$this->db->where('product_id', $product_id);
		$query = $this->db->get('afa110_product_specification');

		if ($query->num_rows() > 0 ) 
			return $query->row();
	}

}

/* End of file Product_specification_model.php */
/* Location: ./application/models/Product_specification_model.php */