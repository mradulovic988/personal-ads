<?php
include realpath('src/templates/headers/be-header.php');

if ($function->isAdmin()) :
    include realpath('src/templates/profile-templates/admin-profile.php');
else :
    include realpath('src/templates/profile-templates/customer-profile.php');
endif;

include realpath('src/templates/footers/be-footer.php');