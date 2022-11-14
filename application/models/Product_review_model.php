<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_review_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('afa110_product_reviews', $options);
		return $this->db->insert_id();
	}
	public function get_all($limit = NULL, $offset = NULL)
	{
		$query = $this->db->get('afa110_product_reviews', $limit, $offset);
		return $query->result();
	}

	public function count_all()
	{
		$query = $this->db->get('afa110_product_reviews');
		return $query->num_rows();
	}
	public function get_by($product_reviews_id)
	{
		$this->db->where('id', $product_reviews_id);
		$query = $this->db->get('afa110_product_reviews');
		return $query->row();
	}

	public function update($product_reviews_id, $options)
	{
		$this->db->where('id', $product_reviews_id);
		$this->db->update('afa110_product_reviews', $options);
		return $this->db->affected_rows();
	}

	public function remove($product_reviews_id)
	{
		$this->db->where('id', $product_reviews_id);
		$this->db->delete('afa110_product_reviews');
		return $this->db->affected_rows();
	}

	/*      */

	public function show_all($product_id)
	{
		$this->db->where('product_id', $product_id);
		$this->db->where('status', 'ACTIVE');
		$this->db->limit(2);
		$query = $this->db->get('afa110_product_reviews');
		return $query->result();
	}

}

/* End of file Product_review_model.php */
/* Location: ./application/models/Product_review_model.php */