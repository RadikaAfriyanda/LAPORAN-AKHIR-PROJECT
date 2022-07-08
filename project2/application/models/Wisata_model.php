<?php
class wisata_model extends CI_model{
    public $nama, $tempat, $harga;

    public function getAll(){
        // Menampilkan seluruh data yang ada pada tempat wisata menggunakan query builder
        $query = $this->db->get('wisata');
        return $query->result();
    }
    public function getById($id){
        // Menampilkan data berdasarkan id
        $query = $this->db->get_where('wisata', ['id' => $id]);
        return $query->row();
    }
    public function simpan($data){
        $sql = "INSERT INTO wisata (nama, tempat, harga) VALUES (?,?,?)";

        $this->db->query($sql, $data);
        $insert_id = $this->db->insert_id();
        return $this->getById($insert_id);
    }
    public function update($data){
        $sql = "UPDATE wisata SET nama=?,tempat=?,kode=? WHERE id=?";
        $this->db->query($sql,$data);
    }
    public function delete($data){
        // hapus data matakuliah
        $sql = "DELETE FROM wisata WHERE id=?";
        $this->db->query($sql,$data);
    }
}
?>
