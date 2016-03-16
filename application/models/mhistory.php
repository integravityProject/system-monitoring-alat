<?php

class Mhistory extends CI_model
{
	public function insert($data = null)
	{
		$this->db->insert('history', $data);
	}
	
	public function update($data = null, $id = null)
	{
		$this->db->where('id_history', $id);
		$this->db->update('history', $data);
	}

	public function delete($id)
	{
		$this->db->where('id_history', $id);
		$this->db->delete('history');
	}
	public function gethistory($id) {
		$this->db->select('*');
		$this->db->where('id',$id);
		return $this->db->get('t_history')->result();
	}

	public function datahistory() {
		$a = $this->db->query("select * from t_history order by updated_at desc");
		return $a->result();
	}

}
