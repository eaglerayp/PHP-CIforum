    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
    class ReplyModel extends CI_Model {  
        function __construct()  
        {  
            parent::__construct();  
        }  
 		function insert($UserID,$Reply,$PostID){  
        	$this->db->insert("Reply",   
            Array(  
            "Author" =>  $UserID,  
            "Content" => $Reply,
            "PostID" => $PostID  
        ));  
            $insertID = $this->db->insert_id() ; //回傳剛新增的 Reply ID 

            $this->db->select("*");  
            $this->db->from('reply');   
            $this->db->where(Array("ReplyID" => $insertID));  
            $query = $this->db->get();  
      
            if ($query->num_rows() <= 0){  
                return null; //無資料時回傳 null  
            }  
             //回傳第一筆  
            $json = json_encode($query->row());
            echo $json;
  	    } 

        public function get($ReplyID){  
            $this->db->select("*");  
            $this->db->from('reply');   
            $this->db->where(Array("ReplyID" => $ReplyID));  
            $query = $this->db->get();  
      
            if ($query->num_rows() <= 0){  
                return null; //無資料時回傳 null  
            }  
      
            return $query->row();  //回傳第一筆  
        }       
    }  