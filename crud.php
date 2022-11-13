<?php

class crud{
    
        //private database object
        private $db;
        
        //constructor to initialize private variables to database connection
        function __construct($conn)
        {
            $this ->db = $conn;  
        }


        //finction to insert values to the database
        public function insert ($childname,$age,$parentname,$phonenumber,$emailid,$problem){
            try {
                //code...

                $sql = "INSERT into problem_form(child_names,ages,parent_names,phone_numbers,email,problems) VALUES (:childname,:age,:parentname,:phonenumber,:emailid,:problem)";
                $smtp  = $this->db->prepare($sql);
                $smtp->bindparam(':childname',$childname);
                $smtp->bindparam(':age',$age);
                $smtp->bindparam(':parentname',$parentname);
                $smtp->bindparam(':phonenumber',$phonenumber);
                $smtp->bindparam(':emailid',$emailid);
                $smtp->bindparam(':problem',$problem);
                $smtp->execute();
                return true;
            } catch (PDOException $th) {
                //throw $th;

                echo $th->getMessage();
                return false;
            }
        }
}


?>