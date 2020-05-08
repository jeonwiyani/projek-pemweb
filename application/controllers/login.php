<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
public function index(){
    $this->load->view('login');
}
public function do_login(){
    if ($this->modelsData->getCustomer($this->input->POST('email'),$this->input->POST('pass')) == true){
        $id = $this->modelsData->getIdCustomer($this->input->POST('email'));
             $this->session->set_userdata("login", TRUE);
             $this->session->set_userdata("id", $id);
             echo "<script>
                     window.location.href='".base_url()."';
                     alert('Login Success!');
                 </script>";
    }else{
        echo "<script>
                     window.location.href='".base_url('login/')."';
                     alert('Login Failed! Cek kembali email dan password!!');
                 </script>";
    }
    }
    public function do_logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function daftar(){
        $this->load->view('signup');
    }

    public function signup(){
        $nama = $this->input->POST('name');
        $email = $this->input->POST('email');
        $password = $this->input->POST('pass');
        $repass = $this->input->POST('re_pass');
        if($password==$repass){
        $data = array(
            'namaCust'=>$nama,
            'email' =>$email,
            'password' =>$password
        );
        $this->modelsData->register($data);
        echo "<script>
                     window.location.href='".base_url('login/')."';
                     alert('Register Success!');
                 </script>";
    } else {
        echo "<script>
        window.location.href='".base_url('login/daftar')."';
        alert('Register Failed! Password tidak cocok!');
    </script>";
    }
    }
}