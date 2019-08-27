<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Register;
 $Register = (new Register);

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <?php
        $Register->patientReport();
        ?>
        </div>
       
    </div>

    <div class="row">
        <div class="col-md-12">
        <hr>
        <?php
        $Register->billingReport();
        ?>
        </div>
       
    </div>
</div>