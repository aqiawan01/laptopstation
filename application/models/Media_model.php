<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Media_model extends CI_Model {

	public function create($options)
	{
		$this->db->insert('afa110_media', $options); 
		return $this->db->insert_id();
	}
	
	public function get_all($limit = NULL, $offset = NULL)
	{
		$query = $this->db->get('afa110_media', $limit, $offset); 
		return $query->result();
	}
	public function count_all()
	{
		$query = $this->db->get('afa110_media');
		return $query->num_rows(); 
	}
	public function get_by($media_id)
	{
		$this->db->where('id', $media_id);
		$query = $this->db->get('afa110_media');
		return $query->row();
	}

	public function update($media_id, $options)
	{
		$this->db->where('id', $media_id);
		$this->db->update('afa110_media', $options);
		return $this->db->affected_rows();
	}

	public function remove($media_id)
	{
		$this->db->where('id', $media_id);
		$this->db->delete('afa110_media');
		return $this->db->affected_rows();
	}	


	/**** Frontend Devolpememt ****/
  
  public function show_all($media_type)
  {
  	 $this->db->where('status', 'ACTIVE');
  	 $this->db->where('media_type', $media_type);
  	 $query = $this->db->get('afa110_media');
  	 return  $query->result();
  }
}


/* End of file Media_model.php */
/* Location: ./application/models/Media_model.php */