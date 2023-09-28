<?php
class register extends CI_Controller{
    public function index(){
        $this->load->view('home');
    }
    public function intern(){
        $mes['msg']='Data insertion page';
        $this->load->view('registration_form',$mes);
    }
    public function insertData(){
        /*
        $name=$this->input->post('name');
        $domain=$this->input->post('domain');
        $volunteer_name=$this->input->post('volunteer_name');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');

        we can rewrite the above code as ==> extract($_post)
        the above code get all feldname and make it to current page variables
        so we can use the previouse HTML input name as variable
        */
        extract($_POST);
        if($name&&$domain&&$volunteer_name&&$email&&$phone){
            $data=
            ['name'=>$name,
             'domain'=>$domain,
             'volunteer_name'=>$volunteer_name,
             'email'=>$email,
             'phone'=>$phone
        ];
       $this->load->model('insertModel');
       $result=$this->insertModel->dataInsert($data);
        if($result){
         redirect(base_url('register/intern'));
     }
     else{
         echo "Error while insert data";
     }
    }
    else{
        echo "Error while insert data";
    }
    }
    public function Redirect()
    {
        redirect(base_url());
    }
    public function Read(){
        $this->load->model('insertModel');
        $result['table']=$this->insertModel->getData();
        $this->load->view('display_records',$result);
    }
    public function edit($id){
        $this->load->model('insertModel');
        $result['data']=$this->insertModel->editData($id);
        $this->load->view('display_records',$result);
    }
    public function update(){
        extract($_POST);
        $Id=$id;
        $data=[
            'name'=>$name,
             'domain'=>$domain,
             'volunteer_name'=>$volunteer_name,
             'email'=>$email,
             'phone'=>$phone
        ];
         $this->load->model('insertModel');
         $this->insertModel->updateData($data,$Id);
    }
    public function delete($id){
        $this->load->model('insertModel');
        $this->insertModel->deleteData($id);
    }
}
?>
