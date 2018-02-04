<?php
 include_once 'dbconfig.php';
 include_once 'headers.php'; 

class Crud extends DbConfig
{
    public function __construct(){
        parent::__construct();
    }
    
    public function getData($query){        
        $result = $this->connection->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }
        
    public function execute($query){
        $result = $this->connection->query($query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }

   public function login($email, $password){  
            $res = mysqli_query($this->connection,"SELECT * FROM users WHERE email = '".$email."' AND password = '".md5($password)."'");  
            $user_data = mysqli_fetch_array($res);  
            //print_r($user_data);  
            $no_rows = mysqli_num_rows($res);  
              
            if ($no_rows == 1)   
            {  
           
                $_SESSION['login'] = true;  
                $_SESSION['user_id'] = $user_data['user_id'];  
                $_SESSION['email'] = $user_data['email'];
                $_SESSION['firstname'] = $user_data['firstname'];  
                $_SESSION['surname'] = $user_data['surname'];
                $_SESSION['privelege'] = $user_data['privelege'];

                

                return TRUE;  
            }  
            else  
            {  
                return FALSE;  
            }  
               
                   
        }   
    
    public function sanitize($value){
        return $this->connection->real_escape_string($value);
    }
}
?>