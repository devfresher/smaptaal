<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lmember extends Api_Controller 
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model("lmember_m");
        $this->load->model("studentrelation_m");
        $this->load->model('section_m');
        $this->load->model('classes_m');
    }

    public function index_get($id = null) 
    {
        $myProfile = false;
        if($this->session->userdata('usertypeID') == 3) {
            $id = $this->data['myclass'];
            if(!permissionChecker('lmember_view')) {
                $myProfile = true;
            }
        }

        if($this->session->userdata('usertypeID') == 3 && $myProfile) {
            $url = $id;
            $id = $this->session->userdata('loginuserID');
            $this->view_get($id, $url);
        } else {
            $schoolyearID = $this->session->userdata('defaultschoolyearID');
            if((int)$id) {
                $this->retdata['classesID'] = $id;
                $this->retdata['classes'] = $this->classes_m->get_classes();
                $fetchClass = pluck($this->retdata['classes'], 'classesID', 'classesID');
                if(isset($fetchClass[$id])) {
                    $retStudentArr = [];
                    $students      = $this->studentrelation_m->get_order_by_student(array('srclassesID' => $id, 'srschoolyearID' => $schoolyearID));
                    if(count($students)) {
                        foreach ($students as $student) {
                            if((int)$student->library) {
                                $retStudentArr[] = $student;
                            }
                        }
                    }
                    $this->retdata['students'] = $retStudentArr;
                } else {
                    $this->retdata['students'] = [];
                }

                $this->response([
                    'status'    => true,
                    'message'   => 'Success',
                    'data'      => $this->retdata
                ], REST_Controller::HTTP_OK);
            } else {
                $this->retdata['classesID'] = 0;
                $this->retdata['students'] = [];
                $this->retdata['classes'] = $this->classes_m->get_classes();
                
                $this->response([
                    'status'    => true,
                    'message'   => 'Success',
                    'data'      => $this->retdata
                ], REST_Controller::HTTP_OK);
            }
        }
    }

    public function view_get($id = null, $url = null) 
    {
        $schoolyearID = $this->session->userdata('defaultschoolyearID');
        if((int)$id && (int)$url) {
            $fetchClass = pluck($this->classes_m->get_classes(), 'classesID', 'classesID');
            if(isset($fetchClass[$url])) {
                $this->retdata['classesID'] = $url;
                $this->retdata['student'] = $this->studentrelation_m->get_single_student(array('srstudentID' => $id, 'srschoolyearID' => $schoolyearID), true);
                if(count($this->retdata['student'])) {
                    $this->retdata['usertypes'] = pluck($this->usertype_m->get_usertype(),'usertype','usertypeID');
                    $this->retdata["classes"] = $this->classes_m->get_classes($this->retdata['student']->srclassesID);
                    $this->retdata["section"] = $this->section_m->general_get_section($this->retdata['student']->srsectionID);
                    $this->retdata['lmember'] = $this->lmember_m->get_single_lmember(array('studentID' => $id));
                    
                    $this->response([
                        'status'    => true,
                        'message'   => 'Success',
                        'data'      => $this->retdata
                    ], REST_Controller::HTTP_OK);
                } else {
                    $this->response([
                        'status' => false,
                        'message' => 'Error 404',
                        'data' => []
                    ], REST_Controller::HTTP_NOT_FOUND);
                }   
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Error 404',
                    'data' => []
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'Error 404',
                'data' => []
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
