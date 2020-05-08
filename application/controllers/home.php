<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index(){
        $data['product'] = $this->modelsData->getProduct();
        $this->load->view('header');
        $this->load->view('view_home',$data);
        $this->load->view('footer');
    }

    public function katalog(){
        $data['product'] = $this->modelsData->getProduct();
        $this->load->view('header');
        $this->load->view('katalog',$data);
        $this->load->view('footer');
    }

    public function about(){
        $this->load->view('header');
        $this->load->view('about');
        $this->load->view('footer');
    }

    public function contact() {
        $this->load->view('header');
        $this->load->view('contact');
        $this->load->view('footer');
    }

    public function testimoni() {
        $this->load->view('header');
        $this->load->view('testimoni');
        $this->load->view('footer');
    }

    public function cart($id) {
        //$data['cart'] = $this->modelsData->getCart($id);
        $data['product'] = $this->modelsData->getProductCart($id);
        $this->load->view('header');
        $this->load->view('cart',$data);
        $this->load->view('footer');
    }

    public function detail($id){
        $data['product'] = $this->modelsData->getDetailProduct($id);
        $this->load->view('header');
        $this->load->view('detail',$data);
        $this->load->view('footer');   
    }

    public function profile($id){
        $data['profile'] = $this->modelsData->getProfile($id);
        $this->load->view('header');
        $this->load->view('profile',$data);
        $this->load->view('footer');   
    }

    public function updateProfile(){
        $id = $this->uri->segment(3);
        $datap['profile'] = $this->modelsData->getProfile($id);

        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 2048;

        $this->load->library('upload',$config);
  
        if(!$this->upload->do_upload('pic')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
            $this->load->view('header');
            $this->load->view('profile',$datap);
            $this->load->view('footer');
        } else {
            $result=$this->upload->data();
            $uploaded=array('picture'=>$result);
        $data=array(
            'namaCust'=>$this->input->post('name'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'noHP'=>$this->input->post('phone'),
            'alamatCust'=>$this->input->post('alamat'),
            'bankCust'=>$this->input->post('bank'),
            'rekening'=>$this->input->post('rekening'),
            'foto'=>$uploaded['picture']['file_name']
        );
        $query = $this->modelsData->update_profile($id,$data);
        if($query){
            echo "<script>  
                alert('Update Failed!');
             </script>";
        } else {
            echo "<script> 
                window.location.href='".base_url("home/profile/$id")."'; 
                alert('Update Success!');
             </script>";
        }
    }
}
        public function addToCart(){
            $id = $this->uri->segment(3);
            $data=array(
                'id_cust'=>$this->session->userdata('id'),
                'id_product'=>$id,
                'tanggalPesan'=>date('Y-m-d H:i:s'),
                'jumlah'=>$this->input->post('num-product')
            );
            $this->modelsData->tambah_data($data);
            redirect(base_url("home/cart/$id"));
        }
}