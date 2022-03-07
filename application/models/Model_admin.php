<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_Model
{

    public function getAll()
    {
        return $this->db->get("tbl_produk")->result();
    }

    public function tambah($data)
    {
        return $this->db->insert("tbl_produk", $data);
    }

    public function delete_product($id)
    {
        return $this->db->delete("tbl_produk", array("id_produk" => $id));
    }

    public function edit_product($data,$id)
    {
        return $this->db->update("tbl_produk", $data, array('id_produk' => $id));
    }

    public function get_transaksi(){
        $this->db->select("*");
        $this->db->from("tbl_cart");
        $this->db->join("tbl_user", "tbl_cart.id_user = tbl_user.id_user");
        $this->db->join("tbl_produk", "tbl_produk.id_produk = tbl_cart.id_produk");
        $query = $this->db->get()->result();
        return $query;
    }

    // USERS
    public function get_users()
    {
        return $this->db->get("tbl_user")->result();
    }

}