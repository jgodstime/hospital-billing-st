<?php
 $msg = new \Mini\Libs\FlashMessages();
 use Mini\Model\Church;
 $Church = (new Church);

?>

<div class="container">
    <div class="row">
        <?php
        $Church->membershipRecord();
        ?>
    </div>
</div>