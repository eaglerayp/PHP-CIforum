    <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
      
    class User extends MY_Controller {  
        public function register()  {  
            $this->load->view('register',Array(   
            "pageTitle" => "Sign up"
            )); 
        }  
      
        public function login(){  
            if(isset($_SESSION["user"]) && $_SESSION["user"] != null){ //已經登入的話直接回首頁  
            redirect(site_url("/")); //轉回首頁  
            return true;  
            }  

            $this->load->view('login',Array(  
            "pageTitle" => "Login"
            ));  
        }  

        public function logining(){
            if(isset($_SESSION["user"]) && $_SESSION["user"] != null){ //已經登入的話直接回首頁
                redirect(site_url("/")); //轉回首頁
                return true;
            }
 
            $account = trim($this->input->post("UserID"));
            $password = trim($this->input->post("password"));
 
            $this->load->model("UserModel");
            $user = $this->UserModel->getUser($account,$password);
 
            if($user == null){
            $this->load->view(
            "login",
            Array( "pageTitle" => "Logining" ,
            "UserID" => $account,
            "errorMessage" => "ID or password wrong"
            ));  
            return true;
            }

            $_SESSION["user"] = $user;
            redirect(site_url("/")); //轉回首頁
            }
 
        public function logout(){
            session_destroy();
            redirect(site_url("/")); //轉回
        }

        public function registering(){  
            $account = $this->input->post("account");  
            $account = htmlspecialchars($account);
            $password= $this->input->post("password");  
            $passwordrt= $this->input->post("passwordrt");  
          
            if( trim($password) =="" || trim($account) =="" ){  
                $this->load->view('register',Array(  
                "errorMessage" => "Account or Password shouldn't be empty,please check!" ,  
                "account" => $account  
                ));  
                return false;  
            }  
      
      
        $this->load->model("UserModel");  
        if($this->UserModel->checkUserExist(trim($account))){ //檢查帳號是否重複  
            $this->load->view('register',Array(  
            "errorMessage" => "This account is already in used." ,  
            "account" => $account  
        ));  
        return false;  
        }

        $this->UserModel->insert(trim($account),trim($password)); //完成新增動作  
        $this->load->view('login',Array(  
        "UserID" => $account  ,
        "pageTitle" => "Sign up successfully! Login."
        )); 
        }  
    }  