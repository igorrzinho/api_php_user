<?php
class user{
    private $con;
    public function __construct($con){
        $this->con = $con;
    }
    public function getAllUsers(){
        $sql = "select * from data";
        $result = mysqli_query($this->con,$sql);
        $users = [];
        while($row = mysqli_fetch_array($result)){
            $users[] = $row;
        }
        return $users;
    }

    public function addUser($data){
        $sql = "INSERT INTO ";
    }
}
?>