    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
      
    class Article extends MY_Controller {  
        public function view($articleID = null){  
            if($articleID == null){  
                show_404("Article not found !");  
                return true;  
            }  
  
            $this->load->model("ArticleModel");  
            //完成取資料動作  
            $article = $this->ArticleModel->get($articleID);   
  
            if($article == null){  
                show_404("Article not found !");  
                return true;      
            }  
            //更新文章計數
            $this->ArticleModel->updateViews($articleID,$article->Views +1 );

            $this->load->view('article_view',Array(  
            //設定網頁標題  
            "pageTitle" => "Post [".$article->Title."] ",   
            "Post" => $article  
            ));  
        }         


        /*public function author()  
        {  
            $this->load->view('article_author');  
        }  */
      
        public function post(){  
            if (!isset($_SESSION["user"])){//尚未登入時轉到登入頁  
                redirect(site_url("/user/login")); //轉回登入頁  
                return true;  
            }  
            $this->load->view('article_post',Array(  
                "pageTitle" => "Post"  
            ));   
        }  
      
        public function posting(){  
      
            if (!isset($_SESSION["user"])){//尚未登入時轉到登入頁  
                redirect(site_url("/user/login")); //轉回登入頁  
                return true;  
            }  
      
            $title = trim($this->input->post("title"));  
            $content= trim($this->input->post("content"));  
              
            if( $title =="" || $content =="" ){  
                $this->load->view('article_post',Array(  
                    "pageTitle" => "Posting",  
                    "errorMessage" => "Title or Content shouldn't be empty,please check!" ,  
                    "title" => $title,  
                    "content" => $content  
                ));  
                return false;  
            }  
      
            $this->load->model("ArticleModel");  
            $insertID = $this->ArticleModel->insert($_SESSION["user"]->UserID,$title,$content);  //完成新增動作;  //完成新增動作  
            redirect(site_url("article/postSuccess/".$insertID));  
        }     
        public function postSuccess($articleID){  
            redirect(site_url("article/view/".htmlspecialchars($articleID)));
            $this->load->view('article_success',Array(  
                    "pageTitle" => "Post successfully",  
                    "PostID" => $articleID  
            ));  
        }  
      
        public function edit(){  
            $this->load->view('article_edit');      
        }  
      
    }  