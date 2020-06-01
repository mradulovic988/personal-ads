<?php
//include realpath('../backend/register/register_form.php');

if (count($errors) > 0) { ?>
    <div class="alert alert-danger" role="alert">
        <?php foreach ($errors as $error) { ?>
            <p><?php echo $error ?></p>
        <?php } ?>
    </div>
<?php } ?>