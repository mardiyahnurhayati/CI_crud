<?php

class Crud extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('p_data');
		$this->load->helper('url');
	}
	function index(){
		$data['anggota']=$this->p_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
	function tambah(){
		$this->load->view('v_input');
	}
	function tambah_aksi(){
		$no_anggota= $this->input->post('no_anggota');
		$nim= $this->input->post('nim');
		$nama= $this->input->post('nama');
		$alamat= $this->input->post('alamat');
		$prodi= $this->input->post('prodi');

		$data=array(
			'no_anggota'=>$no_anggota,
			'nim'=> $nim,
			'nama'=> $nama,
			'alamat'=> $alamat,
			'prodi'=> $prodi
			);
		var_dump($data);
		$this->p_data->input_data($data,'anggota');
		redirect('crud/index');
	}
	function hapus($no_anggota){
		$where=array('no_anggota'=>$no_anggota);
		$this->p_data->hapus_data($where,'anggota');
		redirect('crud/index');
	}
	function edit($no_anggota){
		$where=array('no_anggota'=>$no_anggota);
		$data['anggota']=$this->p_data->edit_data($where,'anggota')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
		$no_anggota=$this->input->post('no_anggota');
		$nim=$this->input->post('nim');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$prodi=$this->input->post('prodi');

		$data=array(
			'nim'=>$nim,
			'nama'=>$nama,
			'alamat'=>$alamat,
			'prodi'=>$prodi
			);

		$where=array(
			'no_anggota'=>$no_anggota
			);

		$this->p_data->update_data($where,$data,'anggota');
		redirect('crud/index');
	}
}
?>