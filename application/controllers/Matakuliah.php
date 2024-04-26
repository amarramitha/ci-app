<?php  

class Matakuliah extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Matakuliah_model');
        $this->load->library('form_validation');
    }
    
    public function index() {
        $data['judul'] = 'Daftar Matakuliah';
        $data['matakuliah'] = $this->Matakuliah_model->getAllMatakuliah();
        $this->load->view('template/header', $data);
        $this->load->view('matakuliah/index', $data);
        $this->load->view('template/footer');
    }
    
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Matakuliah';
        // $this->form_validation->set_rules('id_matakuliah', 'ID Matakuliah', 'required');
        $this->form_validation->set_rules('nama_matakuliah', 'Nama Matakuliah', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('template/header', $data);
            $this->load->view('matakuliah/tambah');
            $this->load->view('template/footer');
        } else {
            $this->Matakuliah_model->tambahDataMatakuliah();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('matakuliah');
        }
    }
    
    public function hapus($id_matakuliah)
    {
        $this->Matakuliah_model->hapusDataMatakuliah($id_matakuliah);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('matakuliah');
    }
    

    public function edit($id_matakuliah)
    {
        $data['judul'] = 'Form Edit Data Matakuliah';
        $data['matakuliah'] = $this->Matakuliah_model->getMatakuliahById($id_matakuliah);

        // $this->form_validation->set_rules('id_matakuliah', 'ID Matakuliah', 'required');
        $this->form_validation->set_rules('nama_matakuliah', 'Nama', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('matakuliah/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->Matakuliah_model->editDataMatakuliah($id_matakuliah);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('matakuliah');
        }
    }

    
}

?>
