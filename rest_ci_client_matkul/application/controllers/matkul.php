<?php
Class matkul extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_ci/index.php/matkul";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    // menampilkan data matkul
    function index(){
        $data['datamatkul'] = json_decode($this->curl->simple_get($this->API.'/matkul'));
        $this->load->view('matkul/list',$data);
    }
    
    // insert data matkul
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'                =>  $this->input->post('id'),
                'kd_matkul'         =>  $this->input->post('kd_matkul'),
                'nama'              =>  $this->input->post('nama'),
                'dosen'             =>  $this->input->post('dosen'),
                'kelas'             =>  $this->input->post('kelas'));
            $insert =  $this->curl->simple_post($this->API.'/matkul', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('matkul');
        }else{
            $this->load->view('matkul/create');
        }
    }
    
    // edit data matkul
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'                =>  $this->input->post('id'),
                'kd_matkul'         =>  $this->input->post('kd_matkul'),
                'nama'              =>  $this->input->post('nama'),
                'dosen'             =>  $this->input->post('dosen'),
                'kelas'             =>  $this->input->post('kelas'));
            $update =  $this->curl->simple_put($this->API.'/matkul', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('matkul');
        }else{
            $params = array('id'=>  $this->uri->segment(3));
            $data['datamatkul'] = json_decode($this->curl->simple_get($this->API.'/matkul',$params));
            $this->load->view('matkul/edit',$data);
        }
    }
    
    // delete data matkul
    function delete($id){
        if(empty($id)){
            redirect('matkul');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/matkul', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('matkul');
        }
    }
}
