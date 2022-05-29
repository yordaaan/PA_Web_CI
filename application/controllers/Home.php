<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Produk');
	}

	public function index()
	{
		$data['queryAllProduk'] = $this->M_Produk->getDataProduk();
		$this->load->view('index',$data);
	}

	public function halaman_cart()
	{
		$this->load->view('cart');
	}

	public function halaman_checkout()
	{
		$this->load->view('checkout');
	}

	public function halaman_produk($id_produk)
	{	
		$queryDetailProduk = $this->M_Produk->getDetailDataProduk($id_produk);
		$data = array('queryDetailProduk' => $queryDetailProduk);
		$this->load->view('product', $data);
	}
}
