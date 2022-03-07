<?php
class Livesearch_model extends CI_Model
{
  public function siswa($query)
  {
    if ($query != '')
    {
        $this->db->select('*');
        $this->db->from('tbl_produk');
        $this->db->like('nama_produk');
        $query = $this->db->get();
        return $query;
    }
  }
}