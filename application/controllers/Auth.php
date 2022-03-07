<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library("session");
        $this->load->model('model_login');
    }
    public function index(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');
        if($this->form_validation->run() == false){
            $this->load->view('auth/v_login');
        }
        else{
            $this->login();
        }
    }

    public function login(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
        
        $user = $this->db->get_where('tbl_user', ['username' => $username])->row_array();
		$cek = $this->db->get_where("tbl_user",$where)->num_rows();
        if($this->form_validation->run() == true){
            if($user){
                if($cek > 0){
                    if($user['role_id']==1){
                        $data = [
                            'id_user' => $user['id_user'],
                            'username' => $user['username'],
                            'role_id' => $user['role_id'],
                        ];
                        $this->session->set_userdata($data);
                        redirect('admin');
                        // print_r($this->session->userdata());
                    }elseif($user['role_id']==2){
                        $data = [
                            'id_user' => $user['id_user'],
                            'username' => $user['username'],
                            'role_id' => $user['role_id'],
                        ];
                        $this->session->set_userdata($data);
                        redirect('home'); 
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><strong>Password salah</strong></div>');
                    redirect('auth'); 
                }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><strong>Akun tidak terdaftar!</strong></div>');
                redirect('auth'); 
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><strong>Silahkan Isi Username dan Password terlebih dahulu!</strong></div>');
            redirect('auth'); 
        }
	}

    public function registration(){
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]');
        // $this->form_validation->set_rules('nip', 'Nip', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        
        if  ($this->form_validation->run() == false){
            $data['title'] = "Sistem Monitoring Rest Room";
            $this->load->view('auth/v_registration',$data);

        } else{
            $data = [
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                // 'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'role_id' => 1
            ];
            $this->db->insert('tbl_admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun sudah terdaftar</div>');
            redirect('auth');
            //$this->load->model('m_login', $data);
        }
    }

    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->sess_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda sudah logout</div>');
        redirect('home');
    }
}
?>
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 4000);

  window.setTimeout(function() {
    $(".alert2").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove(); 
    });
  }, 2000);
</script>