<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model', 'model');
	}
	public function index()
	{
		$title = 'Royal Orhcid Syariah - Login';
		$data = array(
			'title' => $title,
		);
		$this->load->view('login', $data);
	}
	function daftar()
	{
		$title = 'Royal Orhcid Syariah - Daftar';
		$id = $this->uri->segment(3);
		$data = array(
			'title' => $title,
			'id' => $id,
			'unit' => $this->model->tampildataunit($id)->result(),
		);
		$this->load->view('daftar', $data);
	}
	function home()
	{
		$title = 'Royal Orhcid Syariah - Home';
		$data = array(
			'title' => $title,
			'project' => $this->model->getAll()
		);
		$this->load->view('home', $data);
	}
	function get_harga()
	{
		// Ambil data ID Provinsi yang dikirim via ajax post
		$id_project = $this->input->post('id_project');
		$this->load->model('Home_model', 'model');
		$unit = $this->model->get_harga($id_project);

		// Buat variabel untuk menampung tag-tag option nya
		// Set defaultnya dengan tag option Pilih

		foreach ($unit as $data) {
			$lists = number_format($data->ref_dp, 0, ',', '.');
			$lists2 = number_format($data->ref_harga, 0, ',', '.'); // Tambahkan tag option ke variabel $lists
		}

		$callback = array('list_unit' => 'Rp. ' . $lists, 'list_unit2' => 'Rp. ' . $lists2); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota

		echo json_encode($callback); // konversi varibael $callback menjadi JSON
	}


	public function simpanDataPelanggan()
	{
		//radiobuttonvalue
		$tanya1	= $this->input->post('radio1');
		$tanya2	= $this->input->post('radio2');
		$tanya3	= $this->input->post('radio3');
		$tanya4	= $this->input->post('radio4');
		$tanya5	= $this->input->post('radio5');
		$tanya6	= $this->input->post('radio6');
		$tanya7	= $this->input->post('radio7');
		$tanya8	= $this->input->post('radio8');
		$tanya9	= $this->input->post('radio9');
		$tanya10	= $this->input->post('radio10');
		$tanya11	= $this->input->post('radio11');
		$tanya12	= $this->input->post('radio12');
		$tanya13	= $this->input->post('radio13');
		$tanya14	= $this->input->post('radio14');
		$tanya15	= $this->input->post('radio15');
		$tanya16	= $this->input->post('radio16');
		$tanya17	= $this->input->post('radio17');
		$tanya18	= $this->input->post('radio18');
		$tanya19	= $this->input->post('radio19');
		$tanya20	= $this->input->post('radio20');
		$tanya21	= $this->input->post('radio21');
		$tanya22	= $this->input->post('radio22');
		$tanya23	= $this->input->post('radio23');
		$tanya24	= $this->input->post('radio24');
		$tanya25	= $this->input->post('radio25');
		$tanya26	= $this->input->post('radio26');
		$tanya27	= $this->input->post('radio27');
		$tanya28	= $this->input->post('radio28');
		$tanya29	= $this->input->post('radio29');
		$tanya30	= $this->input->post('radio30');
		$tanya31	= $this->input->post('radio31');
		$tanya32	= $this->input->post('radio32');
		$tanya33	= $this->input->post('radio33');
		$tanya34	= $this->input->post('radio34');
		$tanya35	= $this->input->post('radio35');
		$tanya36	= $this->input->post('radio36');
		$tanya37	= $this->input->post('radio37');
		$tanya38	= $this->input->post('radio38');
		$tanya39	= $this->input->post('radio39');
		$tanya40	= $this->input->post('radio40');

		$scorenyapertama = $tanya2 + $tanya3 + $tanya4 + $tanya5 + $tanya6 + $tanya7 + $tanya8 + $tanya9 + $tanya10 + $tanya11 + $tanya12 + $tanya13 + $tanya14 + $tanya15 + $tanya16 + $tanya17 + $tanya18 + $tanya19 + $tanya20 + $tanya21 + $tanya22 + $tanya23 + $tanya24 + $tanya25 + $tanya26 + $tanya27 + $tanya28 + $tanya29 + $tanya30 + $tanya31 + $tanya32 + $tanya33 + $tanya34 + $tanya1;
		$scorenyakedua =  $tanya35 + $tanya36 + $tanya37 + $tanya38 + $tanya39 + $tanya40;

		if (intval($scorenyapertama) > 161) {
			$hasilpertama = 'Direkomendasikan';
		} elseif (intval($scorenyapertama) < 161 && intval($scorenyapertama) > 125) {
			$hasilpertama = 'Edukasi & Pembinaan';
		} elseif (intval($scorenyapertama) < 125) {
			$hasilpertama = 'Tidak Direkomendasikan';
		}

		if (intval($scorenyakedua) > 4) {
			$hasilkedua = 'Direkomendasikan';
		} else {
			$hasilkedua = 'Tidak Direkomendasikan';
		}
		$data = array(
			'no_ktp'					=> strip_tags($this->input->post('noktp')),
			'nama'						=> strip_tags($this->input->post('nama')),
			'pekerjaan_sesuai_ktp'		=> strip_tags($this->input->post('pekerjaan')),
			'tempat_tanggal_lahir'		=> strip_tags($this->input->post('ttl')),
			'status'					=> strip_tags($this->input->post('status')),
			'jumlah_tanggungan'			=> strip_tags($this->input->post('jmltanggungan')),
			'alamat'					=> strip_tags($this->input->post('alamat')),
			'no_telepon'				=> strip_tags($this->input->post('notlp')),
			'email'				=> strip_tags($this->input->post('email')),
			'status_rumah'				=> strip_tags($this->input->post('stsrumah')),
			'lama_menetap'				=> strip_tags($this->input->post('lmmenetap')),
			'pekerjaan'					=> strip_tags($this->input->post('pekerjaan')),
			'lama_bekerja'				=> strip_tags($this->input->post('lmbekerja')),
			'nama_tempat_bekerja'		=> strip_tags($this->input->post('nmtpbekerja')),
			'alamat_tempat_bekerja'		=> strip_tags($this->input->post('altpbekerja')),
			'income_bulanan'			=> strip_tags($this->input->post('inbulanan')),
			'income_bulanan_pasangan'	=> strip_tags($this->input->post('inblnpasangan')),
			'no_rekening'				=> strip_tags($this->input->post('norek')),
			'nama_kontak_darurat'		=> strip_tags($this->input->post('nmktdarurat')),
			'alamat_kontak_darurat'		=> strip_tags($this->input->post('alktdarurat')),
			'nomor_kontak_darurat'		=> strip_tags($this->input->post('noktdarurat')),
			'status_akad'				=> 0,
			'nilai_verifikasi_1'		=> $hasilpertama,
			'nilai_verifikasi_2'		=> $hasilkedua,
			'acc_keuangan'				=> 'Menunggu',
			'acc_bod'				=> 'Menunggu',
			'bod_note'					=> '',
			'rata_rata_saldo_akhir_bulanan' => '',
			'rata_rata_cashin_bulanan' => '',

		);
		$nama_angsuran = $this->input->post('nama_angsuran');
		$result = array();
		foreach ($nama_angsuran as $key => $val) {
			$result[] = array(
				"ID_angsuran_lain"  	=> random_string('alnum', 6),
				"no_ktp"				=> $_POST['noktp'],
				"nama_angsuran"			=> $_POST['nama_angsuran'][$key],
				"angsuranke"	 		=> $_POST['angsuranke'][$key],
				"jumlah"	 		=> $_POST['jumlah'][$key],
				"nominal_angsuran_lain" => $_POST['nominal_angsuran_lain'][$key]
			);
		}
		$this->form_validation->set_rules('noktp', 'noktp', 'required');
		$this->model->simpanDataPelanggan($data, $result);
		if ($this->form_validation->run() != false) {
			echo $this->session->set_flashdata('msg', 'success');
			redirect('Home', 'refresh');
		} else {
			echo $this->session->set_flashdata('msg', 'error-reset');
			redirect('Home', 'refresh');
		}
	}
}
