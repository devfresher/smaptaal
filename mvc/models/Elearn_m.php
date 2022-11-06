<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



require_once 'Teacherclasses_m.php';

require_once 'Studentparentclasses_m.php';
require_once 'Subject_m.php';


class Elearn_m extends MY_Model {



	protected $_table_name = 'e-learn';

	protected $_primary_key = 'id';

	protected $_primary_filter = 'intval';

	protected $_order_by = "id asc";



	function __construct() {

		parent::__construct();

    }



    public function insert_elearn($array) {
    
    $term =$array['term'];
    $class=$array['class'];
    $subject= $array['subject'];
    $topic =$array['topic'];
    $subtopic=$array['sub_topic'];
    $youtube =$array['youtube_url'];

        $query="insert into e_learn (term,classes_id,subject_id,topic,sub_topic,youtube_url) values('$term','$class','$subject','$topic','$subtopic','$youtube')";
      $status=  $this->db->query($query);
    if($status==1){
        return true;
    }else{
        return false;
    }
        
    

		

    }


     public function check(){


     }


    public function view_elearn($term,$subject){
     $this->db->select('e_learn.id');
     $this->db->select('e_learn.youtube_url');
     $this->db->select('e_learn.topic');
     $this->db->select('e_learn.sub_topic');
     $this->db->select('e_learn.subject_id');
     $this->db->select('e_learn.term');
     $this->db->select('e_learn.classes_id');
     $this->db->select('subject.subject');
     $this->db->from('e_learn');
     $this->db->where('e_learn.term',$term);
     $this->db->where('e_learn.subject_id',$subject);
     $this->db->join('subject','subject.subjectID=e_learn.subject_id');
     $query=$this->db->get();
     $uche= $query->result();
     $i =0;
     
      




     foreach($uche as $h){
       $i++;
     
      echo'<tr>';
      echo"<td>$i</td>";
      echo"<td>$h->subject</td>";
      echo"<td>$h->topic</td>";
      echo"<td>$h->sub_topic</td>";
      echo"<td>$h->youtube_url</td>";
      echo"<td>";
      echo"<a href='#' class='fa fa-eye'  >";
      echo "<button class='btn btn-link' type='button' name='url' value=$h->youtube_url id='el' onclick=jav(this.value)>check</button>";
      
      
      
     echo '</a>';
     echo"</td>";
      if($this->session->userdata('usertypeID') == 1||$this->session->userdata('usertypeID')==2){
        echo "<td>";
       
       
      echo form_open('elearn/process');   
     echo"<button class='btn btn-link' type='submit' name='edit' value='info:$h->id clz:$h->classes_id tam:$h->term'><span class='glyphicon glyphicon-pencil btn btn-warning btn-sm  btn-circle mrg' aria-hidden='true' type=></span></button>";
     echo"<button class='btn btn-link' type='submit' name='delete' value=$h->id><span class='glyphicon glyphicon-remove btn btn-danger btn-sm  btn-circle mrg' aria-hidden='true'type='submit'></span>";
     echo form_close();
            echo"</td>";
    }
      echo'</tr>';
      
     }
     
    }
    public function change($array){
      $updateData=array("status"=>"Paid");
      $id=$array['elearn_id'];
      $class=$array['class'];
      $term =$array['term'];
      $topic=$array['topic'];
      $sub_topic = $array['sub_topic'];
      $url = $array['url'];


      $this->db->set('topic',$topic);
      $this->db->set('sub_topic',$sub_topic);
      $this->db->set('youtube_url',$url);
      $this->db->where('id',$id);
      $this->db->where('term',$term);
      $this->db->where('classes_id',$class);
    
     $hi=$this->db->update('e_learn');
    if($hi==true){
     return 'TRUE';
    }else{
      return 'FALSE';
    }

     

     
    }

    public function delete($id){
      $this->db->where('id',$id);
      $status=$this->db->delete('e_learn');
     if($status==true){
       return 'TRUE';
     }
    }
}
?>
  