<?php
class Customer extends Database{

    public function all(){

        $QUERY_STRING = "SELECT * FROM customers ORDER by ID DESC";
        return $this->queryMe($QUERY_STRING);
    }

    public function wherePhoneLike($phone){

        $QUERY_STRING = "SELECT * FROM customers WHERE phone LIKE '%".$phone."%'";
        return $this->queryMe($QUERY_STRING);
    }

    public function queryMe($query){

        $result = $this->connect()->query($query);
        
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }else{
            return null;
        }

    }

    public function store(){
        $firstname = addslashes($_POST['firstname']);
        $lastname =  addslashes($_POST['lastname']);
        $birthday =  addslashes($_POST['birthday']);
        $phone =  addslashes($_POST['phone']);  
        
        if($firstname == "" || $lastname == "" || $birthday == "" || $phone == ""){
            return false;
        }else{
            $QUERY_STRING = "INSERT INTO 
            customers (firstname, lastname, birthday, phone)
            VALUES ('$firstname', '$lastname', '$birthday', '$phone')";
            return $this->connect()->query($QUERY_STRING);
        }
    }
}