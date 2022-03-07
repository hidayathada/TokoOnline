<?php

// function admin_login(){
//     $ci =& get_instance();
//     $user = $ci->session->userdata('role_id');
//     if ($user) {
//         if ($ci->session->userdata('role_id') != '1') {
//             if ($ci->session->userdata('role_id') == '2') {
//                 redirect('user');
//             }
//             $ci->session->sess_destroy();
//             redirect('login');
//         }
//     }else {
//         redirect('login');
//     }
// }

function admin_login(){
    $ci =& get_instance();
    $user = $ci->session->userdata('role_id');
    if ($user) {
        if ($ci->session->userdata('role_id') != '1') {
            if ($ci->session->userdata('role_id') == '2') {
                redirect('user');
            }
            $ci->session->sess_destroy();
            redirect('auth');
        }
    }else {
        redirect('auth');
    }
}

function user_login(){
    $ci =& get_instance();
    $user = $ci->session->userdata('role_id');
    if ($user) {
        if ($ci->session->userdata('role_id') != '2') {
            if ($ci->session->userdata('role_id') == '1') {
                redirect('admin');
            }
            $ci->session->sess_destroy();
            redirect('auth');
        }
    }else {
        redirect('auth');
    }
}



function sudah_login()
{
    $ci =& get_instance();
    $user = $ci->session->userdata('role_id');
    if ($user) {
        if ($ci->session->userdata('role_id') == '2' ) {
            redirect('user');
        }elseif($ci->session->userdata('role_id') == '1') {
            redirect('admin');
        }
    }
    
}

function belum_login()
{
    $ci =& get_instance();
    $user = $ci->session->userdata('id');
    if (!$user) {
        redirect('auth');
    }
}