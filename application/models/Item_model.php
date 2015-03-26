<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

	public function get_all_items()
	{
        $query = $this->db->get('item');
        return $query->result();
	}

    public function get_top_items()
	{
        $query = $this->db->get('item', 3);
        return $query->result();
	}

    public function get_one_item($id)
	{
		$query = $this->db->get_where('item', array('id' => $id));
		return $query->row();
	}

}
