<?php
class Komentar_model extends CI_Model{ 
    // public $id, $tanggal, $isi, $users_id, $wisata_id, $nilai_rating_id;

    private $table = "komentar";

    public function getALL(){
        // menampilkan seluruh data yang ada di table komentar menggunakan query builder
        $query = $this->db->get($this->table);
        return $query->result();
    }
    public function getById($id){
        // menampilkan data berdasarkan id
        $this->db->where("id", $id);
        $query = $this->db->get($this->table);
        return $query->row();
    }
    public function save($data){
        $sql = "INSERT INTO komentar(tanggal, isi, users_id, wisata_id, nilai_rating_id) VALUES (now(),?,?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
}
?>