<?php 

class Postad_create_services extends CI_Controller{
        public function __construct(){
                parent::__construct();
                  $this->load->model("category_model");
                  $this->load->model("postad_model");
                  $this->load->helper('url');
                
        }
        public function index(){
            if ($this->input->post("post_create_ad")) {
                   $this->postad_model->postad_creat();
                // if (true) {
                    
                        // redirect('postad');
                // }
            }
            

        	 $data = array(
                    "services_sub_prof"     =>  $this->category_model->services_sub_prof(),
                    "services_sub_pop"     =>  $this->category_model->services_sub_pop(),
                                "title"     =>  "Classifieds",
                                "content"   =>  "postad_create_services"
                        );

             $cat = $this->input->post('services_cat');
             $sub_cat = $this->input->post('services_sub');
             $sub_sub_cat = $this->input->post('services_sub_sub');

             $sub_name = @mysql_result(mysql_query("SELECT * FROM `sub_category` WHERE sub_category_id = '$sub_cat'"), 0, 'sub_category_name');
             $sub_sub_name = @mysql_result(mysql_query("SELECT * FROM `sub_subcategory` WHERE `sub_subcategory_id` = '$sub_sub_cat'"), 0, 'sub_subcategory_name');


            if($sub_name == ''){
                redirect('postad');
            }
             $data['cat'] = $cat;   
             $data['sub_name'] = $sub_name;
             $data['sub_sub_name'] = $sub_sub_name;

             /*id for category*/
              $data['sub_id'] = $sub_cat;
             $data['sub_sub_id'] = $sub_sub_cat;
             $data['login_id'] = $this->session->userdata("login_id");

	            $this->load->view("classified_layout/inner_template",$data);
        }

        public function get_details(){
            $lid = $this->input->post('log_id');
            $ad_type = $this->input->post('ad_type');
            $res = $this->db->query("SELECT * FROM login, signup WHERE login.`login_id`= '$lid' AND signup.`signup_type` = '$ad_type'
            GROUP BY login.`login_id`");
            foreach ($res->result_array() as $row) {
                $data = array('busname' => $row['bus_name'],
                                'cont_name'=>$row['first_name']."".$row['lastname'],
                                'email'=>$row['login_email'],
                                'mobile'=>$row['mobile'],
                                'vat_number'=>$row['vat_number'] );
            }
            echo json_encode($data);
        }
    }

 ?>