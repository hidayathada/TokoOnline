<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pembeli extends CI_Model{

    public function get_product(){
        $this->db->select('*');
        $this->db->from('tbl_produk');   
        $query = $this->db->get()->result();
        return $query;        
    }

    public function product_detail($id_produk)
    {
        $this->db->select("*");
        $this->db->from("tbl_produk");
        $this->db->where("id_produk", $id_produk);
        $query = $this->db->get()->result();
        return $query;
        // return $this->db->get("tbl_produk", array("id_produk" => $id_produk));
    }

    public function get_cart($id_user){
        $this->db->select("*");
        $this->db->from("tbl_cart");
        $this->db->join('tbl_produk','tbl_cart.id_produk = tbl_produk.id_produk');      
        // $this->db->join('tbl_user','tbl_cart.id_user as id_cart_user = tbl_user.id_user');      
        $this->db->where("id_user", $id_user);
        $query = $this->db->get()->result();
        return $query;
    }

    public function add_cart($data, $id_user){
        return $this->db->insert('tbl_cart' , $data,  array('id_user' => $id_user));
    }

    public function delete_cart($id_produk){
        return $this->db->delete('tbl_cart', array('id_produk' => $id_produk));
    }

    
}