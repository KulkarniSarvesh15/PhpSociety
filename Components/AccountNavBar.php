<!-- Account page navigation-->
<nav class="nav nav-borders">

    <?php
        if($Content=="AccountProfile"){
    ?>
    <a class="nav-link active ms-0 font-weight-bold" href="AccountProfile.php">Profile</a>
    <?php
        }
        else{
    ?>
    <a class="nav-link ms-0 font-weight-bold" href="AccountProfile.php">Profile</a>
    <?php
        }
        if($Content=="BillingDetails"){
    ?>
    <a class="nav-link active font-weight-bold" href="BillingDetails.php">Billing</a>
    <?php
        }
        else{
    ?>
    <a class="nav-link font-weight-bold" href="BillingDetails.php">Billing</a>
    <?php
        }
        if($Content=="AccountSecurity"){
    ?>
    <a class="nav-link active font-weight-bold" href="AccountSecurity.php">Security</a>
    <?php
        }
        else{
    ?>
    <a class="nav-link font-weight-bold" href="AccountSecurity.php">Security</a>
    <?php
        }
    ?>


</nav>
<hr class="mt-0 mb-4" />