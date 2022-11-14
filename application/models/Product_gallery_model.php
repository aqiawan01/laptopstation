<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_gallery_model extends CI_Model {

  public function create($options)
  {
  	$this->db->insert('afa110_product_gallery', $options);
  	return $this->db->insert_id();
   }
   public function get_by($product_gallery_id)
	{
		$this->db->where('id', $product_gallery_id);
		$query = $this->db->get('afa110_product_gallery');
		return $query->row();
	}

	public function update($product_gallery_id, $options)
	{
		$this->db->where('id', $product_gallery_id);
		$this->db->update('afa110_product_gallery', $options);
		return $this->db->affected_rows();
	}
    

     /**** FRONTEND DEVELOPMENT ****/
   
   public function get_galleries_by($product_id)
   {
   	  $this->db->where('product_id', $product_id);
   	  $this->db->limit(4);
   	  $query = $this->db->get('afa110_product_gallery');
   	  return $query->result();
   }
	

}

/* End of file Product_gallery_model.php */
/* Location: ./application/models/Product_gallery_model.php */