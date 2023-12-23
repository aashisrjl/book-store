<?php 
if(isset($_GET['errmsg'])){ ?>

<div class="alert alert-danger">
    <?php echo $_GET['errmsg']; ?>
</div>

<?php } ?>