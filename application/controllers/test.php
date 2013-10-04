<?php
class testAjax extends CI_Controller {
function index() {
}
function testPost() {
echo "POST";
echo "result=".$this->input->post('para');
}
 function testPara($strPara) {
 	echo"PARA";
    /*$array = array(
      0 => array('id' => 1),
      1 => array('id' => 2)
    );

    $json = json_encode($array);
    echo $json;*/
}
}
?>