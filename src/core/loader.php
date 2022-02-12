<?php
define('APP_NAME', 'Source Code Viewer');
$button = $_POST['check_codes'];
$query = $_POST['site_to_view'];


if(isset($button)):
    if($query && substr($query, 0, 7) || substr($query, 0, 8)):
        $sourceCode = htmlentities(file_get_contents($query));
        $status = '<div class="alert alert-success">Codes are being showed</div>';
    else:
        $status = '<div class="alert alert-danger">Unable to process your request..</div>';
    endif;
endif;