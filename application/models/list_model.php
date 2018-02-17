<?php 
class List_model extends CI_Model{
		public function get_lists(){
				$query = $this->db->get('lists');
				return $query->result();
		}

		public function get_list($id) {
				$query = $this->db->get('lists');
				$this->db->where('id',$id);
				return $query->row();
		}

		public function create_list($data){
				$insert = $this->db->insert('lists',$data);
				return $insert;
		}

		public function edit_list($list_id, $data){
				$this->db->where('id', $list_id);
				$this->db->update('lists', $data);
				return TRUE;
		}

		public function get_list_data($list_id){
				$this->db->where('id', $list_id);
				$query = $this->db->get('lists');
				return $query->row();
		}
}