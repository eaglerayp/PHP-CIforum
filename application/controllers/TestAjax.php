<?php
class TestAjax extends CI_Controller {
function index() {
	$this->load->view('test');
  
}
function testPost() {
$data = array(
    "userid" => $this->input->post('UserID'),
    "reply" => $this->input->post('reply'),
    "postid" => $this->input->post('PostID'),
);
/*$data = array(
    "userid" => ($userid) ? $userid : NULL,
    "reply" => ($reply) ? $reply : NULL,
    "postid" => ($postid) ? $postid : NULL,
);*/
	echo ($data['reply']);
//echo "result=".$this->input->post('para');
}
 function testPara($strPara) {
 	//echo"PARA";
    $array = array(
      0 => array('id' => 1),
      1 => array('id' => 2)
    );

    $json = json_encode($array);
    echo $json;
}
}
?>