<?php
include 'config/Database.php';
include 'models/Customer.php';
include 'views/viewCustomers.php';
include_once 'views/includes/header.php';
?>
    <div class="wrapper">
        <div class="wrapper-header">
            <h3 class="wrapper-header-title">Customers</h3>
        </div>
        <div class="divider"></div>
        <a href="create.php" class="btn-add">Add new customer</a>
        <a href="/task/" class="btn-add">All</a>
        <form action="index.php" method="GET" class="search-box">
            <input type="text" name="phone" placeholder="Search by phone number">
            <input type="submit" name="submit" value="Search">
        </form>
        <table class="my-table">
            <thead>
                <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>BIRTHDAY</th>
                    <th>PHONE NUMBER</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $customers = new viewCustomer();
                    if(isset($_GET['phone'])){
                        $customers->showByPhone($_GET['phone']);
                        unset($_GET);
                    }
                    else{
                        $customers->showAll();
                    }                  
                ?>
            </tbody>
        </table>
    </div>
<?php
// This line includes Footer
include_once 'views/includes/footer.php';
?>