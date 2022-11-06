<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    require APPPATH . '/libraries/REST_Controller.php';

    class User extends REST_Controller {
        /*
        | -----------------------------------------------------
        | PRODUCT NAME: 	limpids SCHOOL MANAGEMENT SYSTEM
        | -----------------------------------------------------
        | AUTHOR:			limpids TEAM
        | -----------------------------------------------------
        | EMAIL:			info@limpids.net
        | -----------------------------------------------------
        | COPYRIGHT:		RESERVED BY limpids IT
        | -----------------------------------------------------
        | WEBSITE:			http://limpids.net
        | -----------------------------------------------------
        */
        public $output_data = "";

        function __construct() {
            parent::__construct();
            $this->load->model("user_m");
            $this->load->model('usertype_m');
            $language = $this->session->userdata('lang');
            $this->lang->load('user', $language);

            $this->output_data = $this->jwt_decode($this->jwt_token());

            $this->usertype_m->setBranch($this->output_data['userdata']->schoolID);
            $this->user_m->setBranch($this->output_data['userdata']->schoolID);
        }

        public function index_get() {
            // $this->data['users'] = $this->user_m->get_user_by_usertype();
            // if ($this->data['users'])
            // {
            //     // Set the response and exit
            //     $this->response($this->data['users'], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            // }
            // else
            // {
            //     // Set the response and exit
            //     $this->response([
            //         'status' => FALSE,
            //         'message' => 'No users were found'
            //     ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            // }

            return "hello...";
        }

        public function view_get($id) {

            if ((int)$id) {
                $this->data["user"] = $this->user_m->get_user_by_usertype($id);
                if ($this->data['user'])
                {
                    // Set the response and exit
                    $this->response($this->data['user'], REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
                }
                else
                {
                    // Set the response and exit
                    $this->response([
                        'status' => FALSE,
                        'message' => 'No users were found'
                    ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
                }
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }
    }

    /* End of file user.php */
    /* Location: .//D/xampp/htdocs/school/mvc/controllers/user.php */
