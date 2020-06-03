<?php

if (count($errors) > 0) { ?>
    <div class="alert alert-danger" role="alert">
        <?php foreach ($errors as $error) { ?>
            <small>- <?php echo $error ?></small><br>
        <?php } ?>
    </div>
<?php } ?>