<?php

class viewCustomer extends Customer{
    
    public function showAll(){

        $this->echoRows($this->all());

    }

    public function showByPhone($phone){
        
        $this->echoRows($this->wherePhoneLike($phone));
   
    }

    public function echoRows($data){
        if($data != null){
            foreach ($data as $customer) {
                echo "
                    <tr>
                        <td>".$customer['firstname']."</td>
                        <td>".$customer['lastname']."</td>
                        <td>".$customer['birthday']."</td>
                        <td>".$customer['phone']."</td>
                    </tr>
                "; 
            }
        }
        else{
            echo "<h1>NO DATA FOUND!</h1>";
        }
    }

    public function create(){
        echo "
            <div class='create-form'>
                <form action='store' method='POST'>
                    <input type='text' name='firstname' required placeholder='First Name'>
                    <input type='text' name='lastname'  required placeholder='Last Name'>
                    <input type='date' name='birthday'  required placeholder='Birthday'>
                    <input type='telephone' name='phone' required placeholder='Telephone number'>
                    <input type='submit' name='submit' value='SUBMIT'>
                </form>
            </div>
        ";
    }
    
}