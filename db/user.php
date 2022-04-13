<?php 

    class user{
        // private database object\
        private $db;
        
        //constructor to initialize private variable to the database connection
        function __construct($conn){
            $this->db = $conn;
        }


    //login
    public function getuser($username,$password){
     
        try{
          $sql=  "SELECT *  FROM `userprofile` WHERE `emailaddress`='$username' and `password`='$password'";
          $stmt =$this->db->prepare($sql);
          $stmt->execute();
          $result =$stmt->fetch();
          return $result;
         }
         catch (PDOException $e) {
          echo $e->getMessage();
          return false;
         }
         }  


    public function insertuser($username,$password){
            try {
                $result = $this->getuserbyusername($username);
                if($result['num'] > 0){
                    return false;
                } else{
                    $new_password = md5($password.$username);
           
                    $sql = "INSERT INTO userprofile WHERE `emailaddress`='$username' and `password`='$password'";
                   
                    $stmt = $this->db->prepare($sql);
              
                    $stmt->bindparam($username,$username);
                    $stmt->bindparam($password,$new_password);
                    
                  
                    $stmt->execute();
                    return true;
                }
                
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getUserbyusername($username){
            try{
                $sql = "select count(*) as num from userprofile where  `emailaddress`='$username'";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam('$username',$username);
                
                $stmt->execute();
                $result = $stmt->fetch();
                return $result;
            }catch (PDOException $e) {
                    echo $e->getMessage();
                    return false;
            }
        }
}
?>
