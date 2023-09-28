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
    }
    public function getData(){
        $this->load->database();
        //$result=$this->db->select('name')->get('senchola')->result();
        // the above code is used to fetch a particular data data from database
        return $this->db->get('senchola')->result();
    }
    public function editData($id){
        $this->load->database();
        return $this->db->where('id',$id)->get('senchola')->result();
    }
    public function updateData($data,$Id){
        $this->load->database();
        $suc=$this->db->where('id',$Id)->update('senchola',$data);
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
