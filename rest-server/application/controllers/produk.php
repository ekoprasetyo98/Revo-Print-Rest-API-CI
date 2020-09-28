<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Produk extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    //Menampilkan data produk
    function index_get($id=null) {
        // $id = $this->get('id_produk');
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.kategori_id');
        if ($id == '') {
            // query tersebut untuk menjoin/mengguakan 2 table dengan menggambil semua data
            $produk = $this->db->get()->result();
        } else {
            // query tersebut untuk menjoin/mengguakan 2 table dengan menggambil sesuai id
            // mengambil data spesifik sesuai id_produk yg dilempar parameter
            $this->db->where('id_produk', $id);
            $produk = $this->db->get()->row();
        }
        $this->response($produk, 200);
    }

    //Mengirim atau menambah data kontak baru
    function index_post() {
        $data = array(
        'kategori_id'      => $this->post('kategori_id'),
        'nama'    => $this->post('nama'),
        'keterangan'    => $this->post('keterangan'),
        'deskripsi'    => $this->post('deskripsi'),
        'jenis'    => $this->post('jenis'),
        'harga'   => $this->post('harga'),
        'gambar1'    => $this->post('gambar1'),
        'gambar2'    => $this->post('gambar2'),
        'gambar3'    => $this->post('gambar3')
                    
                );
                    // var_dump($data);
                    // die();
        $insert = $this->db->insert('produk', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

     //Memperbarui data kontak yang telah ada
    function index_put() {
        $id = $this->put('id_produk');
        // var_dump($id);
        // die();
        $data = array(
                    'kategori_id'      => $this->put('kategori_id'),
                    'nama'    => $this->put('nama'),
                    'keterangan'    => $this->put('keterangan'),
                    'deskripsi'    => $this->put('deskripsi'),
                    'jenis'    => $this->put('jenis'),
                    'harga'   => $this->put('harga'),
                    'gambar1'    => $this->put('gambar1'),
                    'gambar2'    => $this->put('gambar2'),
                    'gambar3'    => $this->put('gambar3')
                );
        // var_dump($data);
        // die();
        $this->db->where('id_produk', $id);
        $update = $this->db->update('produk', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id_produk');       
        $this->db->where('id_produk', $id);
        $delete = $this->db->delete('produk');
        if ($delete) {

            $this->response('sukses', 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}
?>