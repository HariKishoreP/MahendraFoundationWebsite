<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Signup extends CI_Controller{
        public function __construct(){
                parent::__construct();
                $this->load->model("signup_model");
               }
        public function index(){
                $data   =   array(
                        "title"     =>  "Classifieds",
                        "content"   =>  "signup"
                );
                if($this->input->post("submit")){
                        $already = $this->signup_model->already();
                            if($already == 1){
               $this->session->set_flashdata("err","Email id Already Exist");
                                    redirect('signup');                 
                            }
                            else{
                                    $this->signup_model->create();
                                    $this->session->set_flashdata("msg","Successfully Registered!! Please Check your mail and activate your account.");
                                    redirect('signup');
                                }
                        // }
                }
                $this->load->view("classified_layout/inner_template",$data);
        }
}

