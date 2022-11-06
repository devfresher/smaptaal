<?php
 
class Liveclass extends Admin_Controller{

	

	public function __construct() {

		parent::__construct();

		$this->load->model('book_m');

		$language = $this->session->userdata('lang');

		$this->lang->load('live', $language);
		$this->data['headerassets'] = array(

        'css' => array(

            'assets/datepicker/datepicker.css',

            'assets/select2/css/select2.css',

            'assets/select2/css/select2-bootstrap.css'

        ),

        'js' => array(

            'assets/datepicker/datepicker.js',

            'assets/select2/select2.js'

        )
);
include_once(APPPATH.'controllers/api/ZoomAPIWrapper.php');
}
	



public function index() {



	//s$this->data['classes'] = $this->student_m->get_classes();
	$this->load->model("Lclass_m");
	$this->data['lives'] = $this->Lclass_m->get_lives();
   //var_dump($this->data['lives']); exit;
    $this->data["subview"] = "live/index";

    $this->load->view('_layout_main', $this->data);

}
	function add(){
		
		$this->data["subview"] = "live/add";

    $this->load->view('_layout_main', $this->data);
	
	
	
	}
				

		function create(){

			$this->load->model("Lclass_m");
			if($_POST){
				
				
				$rules =array(
							array(
							'field' => 'topic',
							'label' => $this->lang->line("topic"),
							'rules' => 'trim|required|max_length[60]|xss_clean'
								),
			array(
				'field' => 'st_date',
				'label' => $this->lang->line("st_date"),
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'st_time',
				'label' => $this->lang->line("st_time"),
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'hour',
				'label' => $this->lang->line("hour"),
				'rules' => 'trim|required|xss_clean'
			),
			array(
				'field' => 'Objectives',
				'label' => $this->lang->line("obj"),
				'rules' => 'trim|required|xss_clean'
			),);
			
					$settings=array(
						"approval_type"=>"1",
    "host_video"=>true,
    "participant_video"=>true,
    "join_before_host"=>false,
    "mute_upon_entry"=>true,
    "watermark"=>false,
    "use_pmi"=>false,
    "registration_type"=>"2",
    "audio"=>"both",
    "auto_recording"=>"cloud",
	"alternative_hosts" => "",
	"close_registration" => true,
    "meeting_authentication" => false,
	"authentication_domains" => "",
	"allow_multiple_devices" => false,
	"waiting_room" => true,
  );


				date_default_timezone_set('Africa/Lagos');
					
				$rec=array(
				"type"=> $this->input->post('type'),
				"repeat_interval"=> "",
				"weekly_days"=> "",
				"monthly_day" =>"",
				"monthly_week"=> "",
				"monthly_week_day"=>"",
				"end_times"=>"",
				"end_date_time"=>"");

//				$data=array('topic'=>$this->input->post('topic'),
//				'type'=>$this->input->post('type'),
//				'start_time'=>$this->input->post('st_date').'T'.chop($this->input->post('st_time','PM')).'Z',
//				'duration'=>($this->input->post('hour')*60)+$this->input->post('min'),
//
//				"schedule_for"=>'',
//				"timezone"=> date_default_timezone_set('Africa/Lagos'),
//				  "password"=>substr(md5(uniqid(rand(1,6))),0,10),
//				  "agenda"=>$this->input->post('objectives'),
//					'recurrence'=>$rec,
//					'settings'=>$settings,
//
//				);
				$data=array('topic'=>$this->input->post('topic'),
					'type'=>$this->input->post('type'),
					'start_time'=>$this->input->post('st_date').'T'.chop($this->input->post('st_time','PM')).'Z',
					'duration'=>($this->input->post('hour')*60)+$this->input->post('min'),
					"timezone"=> 'Africa/Lagos',
					"agenda"=>$this->input->post('objectives'),
					'recurrence'=>$rec,
					'settings'=>$settings,

				);
				$data2send= json_encode($data);
			
                    $this->form_validation->set_rules($rules);
                    if ($this->form_validation->run() == FALSE) {
                        $this->data["subview"] = "live/add";
					$this->load->view('_layout_main', $this->data);
					}else{

                    	$zoomAPI = new ZoomAPIWrapper('sndE1KNXR06Y3mK2IpeRmw','mPJHzyGuh4n4e69Ab0naJRgzBkz2Y6REj1hq');
						$response = $zoomAPI->doRequest('POST','/users/ikmarv@gmail.com/meetings',[],[],$data2send);

                           if($response && $response['code'] == 201)
						   {

						   	$array = array(
						   		'topic' => $response['data']['topic'],
							    'meeting_type' => 2,
								'duration' => $response['data']['duration'],
								'status' => 0,
								 'start_url' => $response['data']['start_url'],
								'join_url' => $response['data']['join_url'],
                                 'start_time' => $response['data']['start_time'],
								'created_at' => $response['data']['created_at'],
								'meeting_id' => $response['data']['id']

							);
						   //	var_dump($array); exit;
							   $this->Lclass_m->insert_lives($array);
							  // echo '<pre>';
//				var_dump($response);
//				echo '</pre>'; exit;
							   $this->session->set_flashdata('success', $this->lang->line('menu_success'));
							   redirect(base_url("liveclass/index"));

						   }else{
                           	var_dump($response); exit;
						   }





//				echo '<pre>';
//				var_dump($data);
//				echo '</pre>';

						//echo print_r($data); exit;
                    }
			}
		}

		function view()
		{
			$this->load->model("Lclass_m");
			$this->data["subview"] = "live/view";

			$id = htmlentities(escapeString($this->uri->segment(3)));

			$data = $this->Lclass_m->get_single_lives(array('id'=>$id));


			$zoomAPI = new ZoomAPIWrapper('sndE1KNXR06Y3mK2IpeRmw','mPJHzyGuh4n4e69Ab0naJRgzBkz2Y6REj1hq');
			$response = $zoomAPI->doRequest('GET','/meetings/'.$data->meeting_id,[],[],[]);
			if(!empty($response['data']))
			{

				$this->data['status'] = $response['data']['status'];
				$this->data['join_url'] = $response['data']['join_url'];
				$this->data['start_url'] = $response['data']['start_url'];
//			$data = $this->Lclass_m->get_single_lives(array('id'=>$id));
//            var_dump($data); exit;
				$this->load->view('_layout_main', $this->data);

			}


		}
		
		function lecture(){}
	}




?>



