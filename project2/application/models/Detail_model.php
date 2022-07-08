<?php
    class Detail_model extends CI_Model {
        private $table = "tempat_wisata";
        public function getALL(){
            // menampilkan seluruh data yang ada di table tempat wisata menggunakan query builder
            $query = $this->db->get('tempat_wisata');
            return $query->result();
        }
        public function getById($id){
            // menampilkan data berdasarkan id
            $query = $this->db->get_where('tempat_wisata', ['id' => $id]);
            return $query->row();
        }
    }
