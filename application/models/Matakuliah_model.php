<?php  

class Matakuliah_model extends CI_Model{
    public function getAllMatakuliah()
    {
        return $this->db->get('matakuliah')->result_array();
    }

    public function getMatakuliahById($id_matakuliah)
    {
        return $this->db->get_where('matakuliah', ['id_matakuliah' => $id_matakuliah])->row_array();
    }
    public function tambahDataMatakuliah()
    {
        $data = [
            "id_matakuliah" => $this->input->post('id_matakuliah'),
            "nama_matakuliah" => $this->input->post('nama_matakuliah'),
        ];
        $this->db->insert('matakuliah', $data);
    }
    public function hapusDataMatakuliah($id_matakuliah)
    {
        $this->db->where('id_matakuliah', $id_matakuliah);
        $this->db->delete('matakuliah');
    }
    public function editDataMatakuliah($id_matakuliah)
{
    $data = [
        "nama_matakuliah" => $this->input->post('nama_matakuliah')
    ];
    $this->db->where('id_matakuliah', $id_matakuliah);
    $this->db->update('matakuliah', $data);
}

}

?>