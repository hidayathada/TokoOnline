<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Admin extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model("model_admin");
        if($this->session->userdata("role_id" == 1)){
            $this->index();
        }else{
            redirect('home');
        }
    }

    public function index(){
        $this->load->view("admin/template/v_header");
        $this->load->view("admin/template/v_sidebar");
        $this->load->view("admin/template/v_navbar");
        $this->load->view("admin/v_admin");
        $this->load->view("admin/template/v_footer");
    }

    // PRODUCT
    public function product(){
        $data = $this->model_admin->getAll();
		$a ['data'] = $data;
        $this->load->view("admin/template/v_header");
        $this->load->view("admin/template/v_sidebar");
        $this->load->view("admin/template/v_navbar");
        $this->load->view("admin/v_product", $a);
        $this->load->view("admin/template/v_footer");
    }

    public function add_product()
    {
        $config['upload_path']          = './image/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['width']                = 500;
        // $config['height']               = 500;
        $config['overwrite']            = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('image'))
        {
            $data['data'] = $this->model_admin->getAll();
            $this->session->set_flashdata('gagal_foto', '<div class="small text-danger" role="alert">Foto tidak sesuai</div>');
            redirect('admin/product', $data);
        }
        else
        {
            $this->form_validation->set_rules('nama_produk','Nama_produk','required');
		    $this->form_validation->set_rules('kode_produk','Kode_produk','required');
		    $this->form_validation->set_rules('harga','harga','required');
		    $this->form_validation->set_rules('stock','Stock','required');
		    $this->form_validation->set_rules('deskripsi','Deskripsi','required');
		        if ($this->form_validation->run()==true)
                {
                    $data['nama_produk'] = $this->input->post('nama_produk');
                    $data['kode_produk'] = $this->input->post('kode_produk');
                    $data['harga'] = $this->input->post('harga');
                    $data['stock'] = $this->input->post('stock');
                    $data['deskripsi'] = $this->input->post('deskripsi');
                    $data['foto'] = $this->upload->data("file_name");
                    $this->model_admin->tambah($data);
                    redirect("admin/product");
		        }else{
                    $data['data'] = $this->model_profile->getAll();
                    $this->load->view('admin/product', $data);
                }
        }
    }
    
    
    public function edit_product()
    {
        $config['upload_path']          = './image/';
        $config['allowed_types']        = 'gif|jpg|png';
        // $config['width']                = 500;
        // $config['height']               = 500;
        $config['overwrite']            = true;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload('foto_produk'))
        {
            $data['data'] = $this->model_admin->getAll();
            $this->session->set_flashdata('gagal_foto', '<div class="small text-danger" role="alert">Foto tidak sesuai</div>');
            // redirect('admin/product', $data);
            echo "gagal";
        }
        else
        {
            $this->form_validation->set_rules('nama_produk','Nama_produk','required');
		    $this->form_validation->set_rules('kode_produk','Kode_produk','required');
		    $this->form_validation->set_rules('harga','harga','required');
		    $this->form_validation->set_rules('stock','Stock','required');
		    $this->form_validation->set_rules('deskripsi','Deskripsi','required');
		        if ($this->form_validation->run()==true)
                {
                    $id = $this->input->post('id_produk');
                    $data['nama_produk'] = $this->input->post('nama_produk');
                    $data['kode_produk'] = $this->input->post('kode_produk');
                    $data['harga'] = $this->input->post('harga');
                    $data['stock'] = $this->input->post('stock');
                    $data['deskripsi'] = $this->input->post('deskripsi');
                    $data['foto'] = $this->upload->data("file_name");
                    $this->model_admin->edit_product($data, $id);
                    // var_dump($data);
                    redirect("admin/product");
		        }else{
                    echo "gagal";
                }
        }
    }


    public function delete_product($id){
        $this->model_admin->delete_product($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
        redirect("admin/product");
    }

    // TRANSAKSI 

    public function transaksi(){
        $data['data'] = $this->model_admin->get_transaksi();
        $this->load->view("admin/template/v_header");
        $this->load->view("admin/template/v_sidebar");
        $this->load->view("admin/template/v_navbar");
        $this->load->view("admin/v_transaksi", $data);
        $this->load->view("admin/template/v_footer");
    }



    // USERS
    public function users(){
        $data['data'] = $this->model_admin->get_users();
        $this->load->view("admin/template/v_header");
        $this->load->view("admin/template/v_sidebar");
        $this->load->view("admin/template/v_navbar");
        $this->load->view("admin/v_users", $data);
        $this->load->view("admin/template/v_footer");
    }
    
}


?>