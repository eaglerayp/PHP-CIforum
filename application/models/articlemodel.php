    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
    class ArticleModel extends CI_Model {  
        function __construct()  
        {  
            parent::__construct();  
        }  
      
        function insert($author,$title,$content){  
            $this->db->insert("Post",   
                Array(  
                "Author" =>  $author,  
                "Title" => $title,  
                "Content" => $content,  
                //"Views" => 0,  
            ));       
            return $this->db->insert_id() ; //回傳剛新增的 Article ID  
        }

        function get($articleID){  
            $this->db->select("post.*,user.UserID");  
            $this->db->from('post');  
            $this->db->join('user', 'post.author = user.userID', 'left');  
            $this->db->where(Array("PostID" => $articleID));  
            $query = $this->db->get();  
      
            if ($query->num_rows() <= 0){  
                return null; //無資料時回傳 null  
            }  
      
            return $query->row();  //回傳第一筆  
        }        

        function updateViews($articleID,$views){
            $data = array(
            'views' => $views,
            );

            $this->db->where('PostID', $articleID);
            $this->db->update('post', $data);
        }
        function getNewArticles($count = 5){
            $this->db->select("post.*,user.UserID");
            $this->db->from('post');
            $this->db->join('user', 'post.author = user.userID', 'left');
            $this->db->limit($count, 0);//offset = 0
            $this->db->order_by("Timestamp","desc");//由大到小排序
            $query = $this->db->get();

            return $query->result();
        }
    }  