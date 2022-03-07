<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli extends CI_Controller{


    public function __construct(){
        parent::__construct();
        $this->load->model("model_pembeli");
    }

    public function home(){
        $this->load->view('pembeli/template/v_header');
        $this->load->view('pembeli/v_home');
        // $this->load->view('pembeli/template/v_footer');
    }
    public function product(){
        $data['data'] = $this->model_pembeli->get_product();
        $this->load->view("pembeli/template/v_header.php");
        $this->load->view("pembeli/v_product.php", $data);
        $this->load->view("pembeli/template/v_footer.php");
    }

    public function product_detail($id_produk){
        // var_dump($id_produk);
        $data ['data'] = $this->model_pembeli->product_detail($id_produk);
        // var_dump($data);
        $this->load->view("pembeli/template/v_header.php");
        $this->load->view("pembeli/v_product_detail.php", $data);
        $this->load->view("pembeli/template/v_footer.php");
    }

    public function cart(){
        $id_user = $this->session->userdata('id_user');

        $data2['data'] = $this->model_pembeli->get_cart($id_user);
        $this->load->view("pembeli/template/v_header.php");
        $this->load->view("pembeli/v_cart.php", $data2);
        $this->load->view("pembeli/template/v_footer.php");
    }
    public function add_cart($id_user){

        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required' );
        if ($this->form_validation->run() == true) {
            $id_user = $this->session->userdata('id_user');
            
            $data['id_user'] = $this->session->userdata('id_user');
            $data['id_produk'] = $this->input->post('id_produk');
            $data['jumlah'] = $this->input->post('jumlah');
            $this->model_pembeli->add_cart($data, $id_user);
            
           redirect("pembeli/cart");
        }else{
            echo "gagal";
        }
    }

    public function delete_cart($id_produk){
        $this->model_pembeli->delete_cart($id_produk);
        redirect("pembeli/cart");
    }

    public function checkout(){
        $this->load->view("pembeli/template/v_header");
        $this->load->view("pembeli/v_checkout");
        $this->load->view("pembeli/template/v_footer");

    }


}
?>