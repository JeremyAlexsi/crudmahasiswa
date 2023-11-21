<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Game
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

class Game extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Game_model');
	}

	public function index()
	{
		$data['judul'] = "Halaman Game";
		$data['game'] = $this->Game_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("game/vw_game", $data);
		$this->load->view("layout/footer", $data);
		// 
	}

	function tambah_game()
	{
		$data['judul'] = "Halaman Tambah Game";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama Game', 'required', [
			'required' => 'Nama Game Wajib di isi'
		]);
		$this->form_validation->set_rules('pengembang', 'Pengembang', 'required', [
			'required' => 'Pengembang Game Wajib di isi'
		]);
		$this->form_validation->set_rules('penerbit', 'Penerbit', 'required', [
			'required' => 'Penerbit Game Wajib di isi'
		]);
		$this->form_validation->set_rules('franchise', 'Franchise', 'required', [
			'required' => 'Franchise Game Wajib di isi'
		]);
		$this->form_validation->set_rules('genre', 'Genre', 'required', [
			'required' => 'Genre Wajib di isi'
		]);
		$this->form_validation->set_rules('tahun_rilis', 'Tahun Rilis', 'required|integer', [
			'required' => 'Tahun Rilis Game Wajib di isi',
			'integer' => 'Tahun Rilis harus Angka'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("game/vw_tambah_game", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'pengembang' => $this->input->post('pengembang'),
				'penerbit' => $this->input->post('penerbit'),
				'franchise' => $this->input->post('franchise'),
				'genre' => $this->input->post('genre'),
				'tahun_rilis' => $this->input->post('tahun_rilis')
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/images/game/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$this->Game_model->insert($data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Game Berhasil Ditambah!</div>');
			redirect('Game');
		}
	}

	public function hapus($id)
	{
		$this->Game_model->delete($id);
		$error = $this->db->error();
		if ($error['code'] != 0) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon
fas fa-info-circle"></i>Data Game tidak dapat dihapus (sudah berelasi)!</div>');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i
class="icon fas fa-check-circle"></i>Data Game Berhasil Dihapus!</div>');
		}
		redirect('Game');
	}

	function edit($id)
	{
		$data['judul'] = "Halaman Edit Game";
		$data['game'] = $this->Game_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules('nama', 'Nama Game', 'required', [
			'required' => 'Nama Game Wajib di isi'
		]);
		$this->form_validation->set_rules('pengembang', 'Pengembang', 'required', [
			'required' => 'Pengembang Game Wajib di isi'
		]);
		$this->form_validation->set_rules('penerbit', 'Penerbit', 'required', [
			'required' => 'Penerbit Game Wajib di isi'
		]);
		$this->form_validation->set_rules('franchise', 'Franchise', 'required', [
			'required' => 'Franchise Game Wajib di isi'
		]);
		$this->form_validation->set_rules('genre', 'Genre', 'required', [
			'required' => 'Genre Wajib di isi'
		]);
		$this->form_validation->set_rules('tahun_rilis', 'Tahun Rilis', 'required|integer', [
			'required' => 'Tahun Rilis Game Wajib di isi',
			'integer' => 'Tahun Rilis harus Angka'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view("layout/header", $data);
			$this->load->view("game/vw_ubah_game", $data);
			$this->load->view("layout/footer");
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'pengembang' => $this->input->post('pengembang'),
				'penerbit' => $this->input->post('penerbit'),
				'franchise' => $this->input->post('franchise'),
				'genre' => $this->input->post('genre'),
				'tahun_rilis' => $this->input->post('tahun_rilis')
			];
			$upload_image = $_FILES['gambar']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/images/game/';
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('gambar')) {
					$old_image = $data['game']['gambar'];
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/images/game/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('gambar', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}
			$id = $this->input->post('id');
			$this->Game_model->update(['id' => $id], $data, $upload_image);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Game Berhasil DiUbah!</div>');
			redirect('Game');
		}
	}
}


/* End of file Game.php */
/* Location: ./application/controllers/Game.php */
