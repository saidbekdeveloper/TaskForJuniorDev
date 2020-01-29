<?php
include 'config/Database.php';
include 'models/Customer.php';
include_once 'views/includes/header.php';
?>
    <div class="wrapper">
        <div class="wrapper-header">
            <h3 class="wrapper-header-title">CREATE A NEW CUSTOMER</h3>
        </div>
        <div class="divider"></div>
        <div class="create-form">
            <form action="create.php" method="POST">
                <input type="text" name="firstname" required placeholder="First Name" value="<?php echo isset($_POST['firstname']) ? $_POST['firstname'] : '';?>">
                <input type="text" name="lastname"  required placeholder="Last Name">
                <input type="date" name="birthday"  required placeholder="Birthday">
                <input type="telephone" name="phone" required placeholder="Telephone number">
                <input type="submit" name="submit" value="SUBMIT">
            </form>
        </div>
    </div>
<?php
    if(isset($_POST['submit'])){
        $customerInstance = new Customer();
        
        if($customerInstance->store() === TRUE){
            echo "
                <script>
                    alert('You added a new customer');
                    window.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "
            ";
        }

    }

include_once 'views/includes/footer.php';
?>