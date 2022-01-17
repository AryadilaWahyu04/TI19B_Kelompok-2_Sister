<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class mahasiswa extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

    function index_get() {
        $id = $this->get('id');
        if ($id == '') {
            $mahasiswa = $this->db->get('mahasiswa_client')->result();
        } else {
            $this->db->where('id', $id);
            $mahasiswa = $this->db->get('mahasiswa_client')->result();
        }
        $this->response($mahasiswa, 200);
    }

    function index_post() {
        $data = array(
                    'id'           => $this->post('id'),
                    'nim'          => $this->post('nim'),
                    'nama'         => $this->post('nama'),
                    'nomor'        => $this->post('nomor'),
                    'alamat'       => $this->post('alamat'));
        $insert = $this->db->insert('mahasiswa_client', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $id = $this->put('id');
        $data = array(
                    'id'           => $this->put('id'),
                    'nim'          => $this->put('nim'),
                    'nama'         => $this->put('nama'),
                    'nomor'        => $this->put('nomor'),
                    'alamat'       => $this->put('alamat'));
        $this->db->where('id', $id);
        $update = $this->db->update('mahasiswa_client', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id');
        $this->db->where('id', $id);
        $delete = $this->db->delete('mahasiswa_client');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

	}
?>
