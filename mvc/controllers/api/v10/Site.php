<?php

use phpDocumentor\Reflection\Types\Null_;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Site extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('setting_m');
    }

    public function index_get()
    {
        $setting            = $this->setting_m->get_setting();
        $array = [];
        if ($setting != NULL) {
            $array['sitename']  = $setting->sname;
            $array['logo']      = $setting->photo;
            $array['phone']     = $setting->phone;
            $array['email']     = $setting->email;
            $array['address']   = $setting->address;
            $array['copyright'] = $setting->footer;
        }

        $this->response([
            'status'    => true,
            'message'   => 'Success',
            'data'      => (object) $array
        ], REST_Controller::HTTP_OK);
    }
}
