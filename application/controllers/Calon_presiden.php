<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Calon_presiden
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Calon_presiden extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Capres_model');
  }

  public function index()
  {
    $data['judul'] = "Halaman Calon Presiden";
    $data['calon_presiden'] = $this->Capres_model->get();
    $this->load->view("layout/header");
    $this->load->view("vw_capres", $data);
    $this->load->view("layout/footer");
    // 
  }

  function tambah()
  {
    $data['judul'] = "Halaman Tambah Calon Presiden";
    $this->load->view("layout/header");
    $this->load->view("vw_tambah_capres", $data);
    $this->load->view("layout/footer");
  }

  function upload()
  {
    $data = [
      'nama_lengkap' => $this->input->post('nama_lengkap'),
      'nik' => $this->input->post('nik'),
      'asal' => $this->input->post('asal'),
      'partai_pendukung' => $this->input->post('partai_pendukung'),
      'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
      'umur' => $this->input->post('umur'),
    ];
    $this->Capres_model->insert($data);
    redirect('Calon_presiden');
  }

  function detail($id)
    {
        $data['judul'] = "Halaman Detail Mahasiswa";
        $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
        $this->load->view("layout/footer");
    }

    function edit($id)
    {
        $data['judul'] = "Halaman Edit Calon Presiden";
        $data['calon_presiden'] = $this->Capres_model->getById($id);
        $this->load->view("layout/header", $data);
        $this->load->view("vw_ubah_capres", $data);
        $this->load->view("layout/footer");
    }

    function update(){
      $data = [
        'nama_lengkap' => $this->input->post('nama_lengkap'),
        'nik' => $this->input->post('nik'),
        'asal' => $this->input->post('asal'),
        'partai_pendukung' => $this->input->post('partai_pendukung'),
        'riwayat_pekerjaan' => $this->input->post('riwayat_pekerjaan'),
        'umur' => $this->input->post('umur'),
      ];
      $id = $this->input->post('id');
      $this->Capres_model->update(['id' => $id], $data);
      redirect('Calon_presiden');
  }

  function hapus($id){
    $this->Capres_model->delete($id);
    redirect('Calon_presiden');
  }
}



/* End of file Calon_presiden.php */
/* Location: ./application/controllers/Calon_presiden.php */