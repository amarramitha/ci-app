<?php  

class Mahasiswa_model extends CI_Model{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function getMahasiswaById($nim)
    {
        return $this->db->get_where('mahasiswa', ['nim' => $nim])->row_array();
    }
    public function tambahDataMahasiswa()
    {
        $data = [
            "nim" => $this->input->post('nim'),
            "nama" => $this->input->post('nama'),
            "tanggal_lahir" => $this->input->post('tanggal_lahir'),
            "alamat" => $this->input->post('alamat')
        ];
        $this->db->insert('mahasiswa', $data);
    }
    public function hapusDataMahasiswa($nim)
    {
        $this->db->where('nim', $nim);
        $this->db->delete('mahasiswa');
    }
    public function editDataMahasiswa($nim)
{
    $data = [
        "nama" => $this->input->post('nama'),
        "tanggal_lahir" => $this->input->post('tanggal_lahir'),
        "alamat" => $this->input->post('alamat')
    ];
    $this->db->where('nim', $nim);
    $this->db->update('mahasiswa', $data);
}

}

?>