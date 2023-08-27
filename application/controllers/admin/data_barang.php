<?php
class Data_barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata(
				'pesan',
				'<div class="alert alert-danger alert-dismissible fade show" role="alert">
				Anda Belum Login
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>'
			);
			redirect('auth/login');
		}
	}
	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/data_barang', $data);
		$this->load->view('template_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_barang = $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$gambar = $_FILES['gambar'];

		if ($gambar = '') {
		} else {
			$new_name = time() . $FILES["gambar_barang"]['name'];
			$config['upload_path'] = './upload';
			$config['encrypt_name'] =true ;
			$config['file_name'] = $new_name;
			$config['max_size'] = 3024;
			$config['allowed_types'] = 'jpg|jpeg|png|webp';

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('gambar')) {
				echo 'gambar gagal di upload';
			} else {
				$gambar = $this->upload->data('file_name');
			}
			$data = array(
				'nama_barang' => $nama_barang,
				'keterangan' => $keterangan,
				'kategori' => $kategori,
				'harga' => $harga,
				'stok' => $stok,
				'gambar' => $gambar,

			);
			$this->model_barang->tambah_barang($data, 'tb_barang');
			redirect('admin/data_barang/index');
		}
	}
	public function edit($id)
	{
		$where = array('id_brg' => $id);
		$data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/edit_barang', $data);
		$this->load->view('template_admin/footer');
	}
	public function update()
	{
		$id = $this->input->post('id_brg');
		$nama_barang = $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');

		$data = array(
			'nama_barang' => $nama_barang,
			'keterangan' => $keterangan,
			'kategori' => $kategori,
			'harga' => $harga,
			'stok' => $stok
		);
		$where = array(
			'id_brg' => $id
		);
		$this->model_barang->update_data($where, $data, 'tb_barang');
		redirect('admin/data_barang/index');
	}
	public function hapus($id)
	{
		$where = array('id_brg' => $id);
		$this->model_barang->hapus_data($where, 'tb_barang');
		redirect('admin/data_barang/index');
	}
	public function detail($id_brg){
		//ambil data dari model berdasarkan id yang dipilih
		$data['barang']=$this->model_barang->detail_brg($id_brg);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/detail_barang_admin', $data);
		$this->load->view('template_admin/footer');
	}
}
