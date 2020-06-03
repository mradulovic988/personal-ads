<?php
if ($function->isAdmin()) {
    include realpath('src/templates/sidebars/sidebar-templates/be-sidebar-admin.php');
} else {
    include realpath('src/templates/sidebars/sidebar-templates/be-sidebar-customer.php');
}