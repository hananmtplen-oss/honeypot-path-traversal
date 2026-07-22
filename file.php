<?php
$file = $_GET['file'] ?? 'index.html';
$path = '/var/www/files/' . $file;
if (file_exists($path)) {
    readfile($path);
} else {
    http_response_code(404);
}
?>
