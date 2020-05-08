<?php
class ModelsData extends CI_Model{
    public function getProduct(){
        $query = $this->db->get('product');
        return $query->result_array();
    }

    public function getDetailProduct($id){
        $query = $this->db->get_where('product', array('id'=>$id))->result_array();
        return $query;
    }

    public function getProfile($id){
        $query = $this->db->get_where('customer', array('id'=>$id))->result_array();
        return $query;
    }

    public function update_profile($id,$data){
        $this->db->where('id',$id);
        $this->db->update('customer',$data);
    }

    public function getIdCustomer($email){
        $query = $this->db->get_where('customer', array('email'=>$email))->result_array();
        foreach ($query as $row)
        {
            $id = $row['id'];
        }
        return $id;
    }

    public function getCustomer($email,$password){
        $param = array('email'=> $email, 'password' => $password);
        $row = $this->db->select('*')->from('customer')->where($param);
        $hasil =  $this->db->get();
            if($hasil->num_rows()==1){
                return true;
            } else {
                return false;
            }
    }

    public function getProductCart($id){
        $query = "SELECT * from cart as c join product as p WHERE c.id_product = p.id AND c.id_cust = ?";
        $result = $this->db->query($query, array($id))->result_array();
        return $result;
    }

    public function register($data){
        $this->db->insert('customer',$data);
    }

    public function tambah_data($data){
        $this->db->insert('cart',$data);
    }
}
?>