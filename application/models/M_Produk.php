<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Produk extends CI_Model
{
    function getDataProduk()
	{
		$query = $this->db->get('produk');
		return $query->result();
	}

    function getDetailDataProduk($id_produk)
	{
		$this->db->where('id_produk', $id_produk);
		$query = $this->db->get('produk');
		return $query->row();
	}
}