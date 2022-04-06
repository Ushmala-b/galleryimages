<?php 
    class crud{
        
        private $db;
        
        function __construct($conn){
            $this->db = $conn;
        }
        
        public function insertuserprofile($fname, $lname, $dob, $email,$password,$contact,$profile_photo,$user_type){
            try {
              
                $sql = "INSERT INTO userprofile (firstname,lastname,dateofbirth,emailaddress,password,contactnumber,profile_photo,user_type) 
                VALUES (:fname,:lname,:dob,:email,:password,:contact,:profile_photo,:user_type)";
            
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':fname',$fname);
                $stmt->bindparam(':lname',$lname);
                $stmt->bindparam(':dob',$dob);
                $stmt->bindparam(':email',$email);
                $stmt->bindparam(':password',$password);
                $stmt->bindparam(':contact',$contact);
                $stmt->bindparam(':profile_photo',$profile_photo);
                $stmt->bindparam(':user_type',$user_type);
               // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }



        public function edituserprofile($fname, $lname, $dob, $email,$password,$contact,$profile_photo,$user_type){
            try{ 
                 $sql = "UPDATE `userprofile` SET `firstname`=:fname,`lastname`=:lname,
                 `dateofbirth`=:dob,`emailaddress`=:email,`password`=:password,`contactnumber`=:contact,`profile_photo`:profile_photo,`user_type`:user_type";
                 
                 $stmt = $this->db->prepare($sql);
                 // bind all placeholders to the actual values
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':fname',$fname);
                 $stmt->bindparam(':lname',$lname);
                 $stmt->bindparam(':dob',$dob);
                 $stmt->bindparam(':email',$email);
                 $stmt->bindparam(':password',$password);
                 $stmt->bindparam(':contact',$contact);
                 $stmt->bindparam(':profile_photo',$profile_photo);
                 $stmt->bindparam('user_type',$user_type);
 
                 // execute statement
                 $stmt->execute();
                 return true;
            }catch (PDOException $e) {
             echo $e->getMessage();
             return false;
            }
             



        }




        public function getuserprofile(){
            try{
                $sql = "SELECT * FROM userprofile";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        public function getuserprofiledetails($id){
            try{
                 $sql = "select * from userprofile";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':id', $id);
                 $stmt->execute();
                 $result = $stmt->fetch();
                 return $result;
            }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
             }
         }
         public function insertcategory($cat_name){
            try {
              
                $sql = "INSERT INTO`category`(`cat_name`) VALUES (:cat_name)";
                $stmt = $this->db->prepare($sql);
              
                $stmt->bindparam(':cat_name',$cat_name);

                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

         public function getcategory(){
            try{
                $sql = "SELECT * FROM category";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }
     public function insertimgdata($cat_image,$image_title,$image_desc,$cat_id){
            try {
              
                $sql = "INSERT INTO `imgdata`(`cat_image`, `image_title`, `image_desc`,`cat_id`) VALUES (:cat_image,:image_title,:image_desc,:cat_id)";
                $stmt = $this->db->prepare($sql);
              
                $stmt->bindparam(':cat_image',$cat_image);
                $stmt->bindparam(':image_title',$image_title);
                $stmt->bindparam(':image_desc',$image_desc);
                $stmt->bindparam(':cat_id',$cat_id);

                // execute statement
                $stmt->execute();
                return true;
        
            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

         public function getimgdata(){
            try{
                $sql = "SELECT * FROM imgdata";
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }


        public function getimgdatas($cat_id = NULL){
            try{
                $sql = "SELECT * FROM imgdata";
                if($cat_id != NULL) {
                    $sql .= " WHERE cat_id = ".$cat_id;
                }
                $result = $this->db->query($sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }

        
        public function getimgdata1(){
            try{
               $sql =" SELECT * FROM `imgdata` WHERE cat_id=1";
                $result = $this->db->query(  $sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }
        public function getimgdata2(){
            try{
               $sql =" SELECT * FROM `imgdata` WHERE cat_id=2";
                $result = $this->db->query(  $sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }
        public function getimgdata3(){
            try{
               $sql =" SELECT * FROM `imgdata` WHERE cat_id=3";
                $result = $this->db->query(  $sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }
        public function getimgdata4(){
            try{
               $sql =" SELECT * FROM `imgdata` WHERE cat_id=4";
                $result = $this->db->query(  $sql);
                return $result;
            }catch (PDOException $e) {
                echo $e->getMessage();
                return false;
           }
           
        }



        public function getimgdataDetails($id){
            try{
                 $sql = "select * from imgdata a inner join category s on a.cat_id = s.cat_id 
                 where image_id = :id";
                 $stmt = $this->db->prepare($sql);
                 $stmt->bindparam(':id', $id);
                 $stmt->execute();
                 $result = $stmt->fetch();
                 return $result;
            }catch (PDOException $e) {
                 echo $e->getMessage();
                 return false;
             }
         }
 
        
        public function getcategorybyId($id){
            try{
                $sql = "SELECT * FROM category  where cat_id= :id";
                $stmt = $this->db->prepare($sql);
                $stmt->bindparam(':id', $id);
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