<?php
class insertModel extends CI_Model{
    public function dataInsert($data){
        $this->load->database();
        $data=$this->db->insert('senchola',$data);
        if($data){
            echo '<h3>Data added successfully!</h3><br>';
            $click="click here";
            echo '<a href="http://localhost/crud/register/Redirect">'.$click.'</a>';
        }
        else{
            echo "Error while insert data";
        }
        // public function back(){
        //     return;
        // }

        //print_r($data);
        //echo "you accesed";
    }
    public function getData(){
        $this->load->database();
        // echo "you accesed";
        //$result=$this->db->select('name')->get('senchola')->result();
        // the above code is used to fetch a particular data data from database
        return $this->db->get('senchola')->result();
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
        
    }
    public function editData($id){
        $this->load->database();
        return $this->db->where('id',$id)->get('senchola')->result();
        // echo '<pre>';
        // print_r($result);
        // echo '</pre>';
    }
    public function updateData($data,$Id){

        $this->load->database();
        //print_r($data);
        // $name=$data['name'];
        // $domain=$data['domain'];
        // $volunteer_name=$data['volunteer_name'];
        // $email=$data['email'];
        // $phone=$data['phone'];
        $suc=$this->db->where('id',$Id)->update('senchola',$data);
       // $suc=$this->db->query("update senchola SET name='$name',domain='$domain',volunteer_name='$volunteer_name',email='$email',phone='$phone' where id='$Id'");
        if($suc){
            echo '<h3>Updated successfully!</h3><br>';
            $click="Go to home";
            echo '<a href="http://localhost/crud/register/Redirect">'.$click.'</a>';
        }
        else{
            echo "Error while update data";
        }
    }
    public function deleteData($id){
        $this->load->database();
        $this->db->where("id", $id);
        $suc=$this->db->delete("senchola");
        //$this->db->query();
        if($suc){
            echo '<h3>Deleted successfully!</h3><br>';
            $click="Go to home";
            echo '<a href="http://localhost/crud/register/Redirect">'.$click.'</a>';
        }
        else{
            echo "Error while delete data";
        }
    }
}