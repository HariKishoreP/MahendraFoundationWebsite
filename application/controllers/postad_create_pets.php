<?php 
class Postad_create_pets extends CI_Controller{

	public function __construct(){
                parent::__construct();
                  $this->load->model('category_model');
                  $this->load->model('postad_pets_model');
                }
        public function index(){

            if($this->session->userdata("login_id") == ''){
                redirect("login");
            }

            if($this->input->post('post_create_ad_pets')){
                // echo "<pre>"; print_r($this->input->post()); exit;
                $this->postad_pets_model->postad_creat();
            }
        	 $data = array(
		                    "pets_sub_cat"     =>  $this->category_model->pets_sub_cat(),
		                    "pets_big_animal"     =>  $this->category_model->pets_big_animal(),
			        	 	"pets_small_animal"     =>  $this->category_model->pets_small_animal(),
			        	 	"pets_accessories"     =>  $this->category_model->pets_accessories(),
                                "title"     =>  "Classifieds",
                                "content"   =>  "postad_create_pets"
                        );

             $cat = $this->input->post('pets_cat');
             $sub_cat = $this->input->post('pets_sub');
             $sub_sub_cat = $this->input->post('pets_sub_sub');
             $sub_name = @mysql_result(mysql_query("SELECT * FROM `sub_category` WHERE sub_category_id = '$sub_cat'"), 0, 'sub_category_name');
             if ($sub_sub_cat != '') {
             $sub_sub_name = @mysql_result(mysql_query("SELECT * FROM `sub_subcategory` WHERE `sub_subcategory_id` = '$sub_sub_cat'"), 0, 'sub_subcategory_name');
             }
             else{
             $sub_sub_name = ''	;
             }
             


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

}
 ?>