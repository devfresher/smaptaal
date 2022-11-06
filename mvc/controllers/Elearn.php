<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


Class Elearn Extends Admin_Controller{



function __construct(){


    parent::__construct();
	$this->load->model("subject_m");
		$this->load->model("media_m");

		$this->load->model("media_category_m");

		$this->load->model("classes_m");

		$this->load->model("student_m");

		$this->load->model("media_share_m");

		$this->load->model('usertype_m');
		$this->load->model('elearn_m');

		$language = $this->session->userdata('lang');

		$this->lang->load('elearn', $language);

		$this->load->helper("file");


}

function index(){


    $schoolyearID = $this->session->userdata('defaultschoolyearID');

		$allUserTypes = $this->usertype_m->get_usertype();

		$this->data['allusertype'] = pluck($allUserTypes, 'usertype', 'usertypeID');

		$this->data['usertypeID'] = $this->session->userdata('usertypeID');

		$this->data['userID'] = $this->session->userdata('loginuserID');
		if($this->data['usertypeID']==3){
		$student = $this->studentrelation_m->get_single_student(array('srstudentID'=>$this->data['userID'],'srschoolyearID'=>$schoolyearID));
		$classID = $student->srclassesID;
		$classes = $this->classes_m->get_single_classes(array('classesID' => $classID));}


		

		$share_table = $this->media_share_m->get_media_share();
		if($this->session->userdata('usertypeID') == 3) {
			

			$id = $this->data['myclass'];
			$this->data['classes']=$classes;

		} else {
				
			$id = htmlentities(escapeString($this->uri->segment(3)));
			$this->data['classes'] = $this->student_m->get_classes();
			
		}


		if($this->data['usertypeID'] == 1) {

			$this->data['folders'] = $this->media_category_m->get_media_category();

			$this->data['files']   = $this->media_m->get_order_by_media(array('mcategoryID'=>0));
			$this->data['classes'] = $this->student_m->get_classes();

			$this->data['subjects'] = $this->subject_m->general_get_order_by_subject(array('classesID' => $id));
		} else {

			$this->data['folders'] = $this->media_category_m->get_order_by_mcategory(array('userID'=> $this->data['userID'], 'usertypeID'=>$this->data['usertypeID']));

			$this->data['files'] = $this->media_m->get_order_by_media(array('userID'=> $this->data['userID'], 'usertypeID'=>$this->data['usertypeID'], 'mcategoryID'=>0));

		}

		

		foreach ($share_table as $key => $item) {

			if ($item->public) {

				if (!$item->file_or_folder) {

					array_push($this->data['files'], $this->media_m->get_media($item->item_id));

				} else {

					array_push($this->data['folders'], $this->media_category_m->get_media_category($item->item_id));

				}

			} else {

				$classID = 0;

				if ($this->data['usertypeID'] == 3) {

					$student = $this->studentrelation_m->get_single_student(array('srstudentID'=>$this->data['userID'],'srschoolyearID'=>$schoolyearID));

					$classID = $student->srclassesID;



					if($item->classesID == $classID) {

						if (!$item->file_or_folder) {

							array_push($this->data['files'], $this->media_m->get_media($item->item_id));

						} else {

							array_push($this->data['folders'], $this->media_category_m->get_media_category($item->item_id));

						}

					}

				}

			}

		}



		$usernameArray = getAllUserObjectWithStudentRelation($schoolyearID);



		foreach ($this->data['files'] as $key => $share) {

			if($share->usertypeID == 3) {

				$query = isset($usernameArray[$share->usertypeID][$share->userID]) ? $usernameArray[$share->usertypeID][$share->userID]->srname :'' ;

			} else {

				$query = isset($usernameArray[$share->usertypeID][$share->userID]) ? $usernameArray[$share->usertypeID][$share->userID]->name :'' ;

			}

			$this->data['files'][$key] = (object) array_merge( (array)$share, array( 'shared_by' => $query));

		}



		foreach ($this->data['folders'] as $key => $share_folder) {

			if($share_folder->usertypeID == 3) {

				$query = isset($usernameArray[$share_folder->usertypeID][$share_folder->userID]) ? $usernameArray[$share_folder->usertypeID][$share_folder->userID]->srname : '';

			} else {

				$query = isset($usernameArray[$share_folder->usertypeID][$share_folder->userID]) ? $usernameArray[$share_folder->usertypeID][$share_folder->userID]->name : '';

			}

			$this->data['folders'][$key] = (object) array_merge( (array)$share_folder, array( 'shared_by' => $query));

		}



		$this->data['folders'] = array_map("unserialize", array_unique(array_map("serialize", $this->data['folders'])));

		$this->data['files'] = array_map("unserialize", array_unique(array_map("serialize", $this->data['files'])));
	$this->data["subview"] = "elearn/index";

		$this->load->view('_layout_main', $this->data);



}


protected function rules() {

	$rules = array(

		array(

			'field' => 'subject', 

			'label' => $this->lang->line("subject_name"), 

			'rules' => 'trim|required|xss_clean|max_length[60]|xss_clean',

		), 


		array(

			'field' => 'class', 

			'label' => $this->lang->line("class"),

			'rules' => 'trim|required|max_length[10]|xss_clean',

		), 


		array(

			'field' => 'topic', 

			'label' => $this->lang->line("subject_topic"),

			'rules' => 'trim|required|max_length[60]|xss_clean',

		), 

		array(

			'field' => 'url', 

			'label' => $this->lang->line("subject_url"), 

			'rules' => 'trim|required|max_length[200]|xss_clean',

		),
		array(

			'field' => 'sub_topic', 

			'label' => $this->lang->line("sub_topic"), 

			'rules' => 'trim|required|max_length[200]|xss_clean',

		)

	);

	return $rules;

}

function add(){
	if($_POST) {



		$rules = $this->rules();
		$check=$this->input->post('url');

		$this->form_validation->set_rules($rules);

		if(isset($_SESSION['status'])){
			unset($_SESSION['status']);
		}

		if (($this->form_validation->run() == FALSE)||strpos($check,'you')==false) {
			$this->session->set_flashdata('status', 'Invalid youtube link');
			$this->data['form_validation'] = validation_errors(); 
			$this->data['classes'] = $this->student_m->get_classes();
			

			$this->data["subview"] = "elearn/add";


			$this->load->view('_layout_main', $this->data);			

		} else {
			
			
			
			$check=$this->input->post('url');
			
			
			

				$film1=explode("/", $check);
				$film2=end($film1);
				$film3=explode("?v=", $film2);
				$film4=end($film3);
				$film5=explode("&", $film4);
				$movi=$film5[0];
		$movie='https://www.youtube.com/embed/'.$movi.'?controls=1';
		
				
			$array = array(

				"term" => $this->input->post("term"),
				'class'=>$this->input->post('class'),
				'subject'=>$this->input->post('subject'),

				"topic" =>$this->input->post("topic"),
				'sub_topic' =>$this->input->post('sub_topic'),

				"youtube_url" => $movie,

			);


			
			$this->elearn_m->insert_elearn($array);

			$this->session->set_flashdata('success', $this->lang->line('menu_success'));
			$this->data['classes'] = $this->student_m->get_classes();

			$this->data["subview"] = "elearn/index";

		$this->load->view('_layout_main', $this->data);

		}

	} else {
		if(isset($_SESSION['success'])){
			unset($_SESSION['success']);
		}
		
		$this->data['classes'] = $this->student_m->get_classes();


		$this->data["subview"] = "elearn/add";

		$this->load->view('_layout_main', $this->data);

	}

}


function process(){
	if($_POST){
		if(isset($_POST['edit'])){
			
			$info=$this->input->post('edit');
			
			$gh=explode(" ",$info);
		
			
			$get_id=explode(':',$gh[0]);
			$get_clz =explode(':',$gh[1]);
			$get_tam =explode(':',$gh[2]);
			
			$id=$get_id[1];//question id
			$clz=$get_clz[1];
			$tam =$get_tam[1];
			$data =array('id'=>$id,'class'=>$clz,'term'=>$tam);
			$this->data['hide']=$data;
		
			$this->data["subview"] = "elearn/edit";

		$this->load->view('_layout_main', $this->data);

			
		}else if(isset($_POST['delete'])){
		$info=$this->input->post('delete');
		$this->delete($info);
		
				
		}


	}
	
	
}
 

function edit(){
	
	$rules = array(

	array(	'field' => 'topic', 

		'label' => $this->lang->line("subject_topic"),

		'rules' => 'trim|required|max_length[60]|xss_clean',

	), 

	array(

		'field' => 'url', 

		'label' => $this->lang->line("subject_url"), 

		'rules' => 'trim|required|max_length[200]|xss_clean',

	),
	array(

		'field' => 'sub_topic', 

		'label' => $this->lang->line("sub_topic"), 

		'rules' => 'trim|required|max_length[200]|xss_clean',

	)

);







	$this->form_validation->set_rules($rules);
	if($this->form_validation->run() == FALSE) {
		

		$this->data['form_validation'] = validation_errors(); 
		$this->data['classes'] = $this->student_m->get_classes();
		

		$this->data["subview"] = "elearn/add";


		$this->load->view('_layout_main', $this->data);			

	} else {
		
	$e_learn=$this->input->post('elearn_id');
	$class=$this->input->post('class_id');
	$term=$this->input->post('term');
	$topic=$this->input->post('topic');
	$sub_topic=$this->input->post('sub_topic');
	$check=$this->input->post('url');
			



				$film1=explode("/", $check);
				$film2=end($film1);
				$film3=explode("?v=", $film2);
				$film4=end($film3);
				$film5=explode("&", $film4);
				$movi=$film5[0];
		$movie='https://www.youtube.com/embed/'.$movi.'?controls=1';

	$array =array('elearn_id'=>$e_learn,'class'=>$class,'term'=>$term,'topic'=>$topic,'sub_topic'=>$sub_topic,'url'=>$movie);
	
	$update=$this->elearn_m->change($array);
	if($update=='TRUE'){
		$this->session->set_flashdata('success', $this->lang->line('menu_success'));
		$this->data['classes'] = $this->student_m->get_classes();
		$this->data["subview"] = "elearn/index";

		$this->load->view('_layout_main', $this->data);

	}

}
}

function delete($id){
$delete=$this->elearn_m->delete($id);
if($delete=='TRUE'){
	$this->session->set_flashdata('success', $this->lang->line('menu_success'));
		$this->data['classes'] = $this->student_m->get_classes();
		$this->data["subview"] = "elearn/index";

		$this->load->view('_layout_main', $this->data);

}

}





function pk(){
	if($_POST){
		$id=$this->input->post('id');
		$subj= $this->subject_m->general_get_order_by_subject(array('classesID' => $id));
		echo "<option value=''>Select Subject</option>";
	    foreach($subj as $sub){
			echo "<option value=$sub->subjectID>$sub->subject</option>";

		}
	
	}else{
		
		

	}


}

function view(){

	if($_POST){

		$subject=$this->input->post('id');

		$term =$this->input->post('term');

	    $hi   =	$this->elearn_m->view_elearn($term,$subject);
	    echo $hi;
	
	}
}

}


?>