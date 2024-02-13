<?php
$file = 'boykisser.zip'; // Replace with the actual path to your zip file
$filename = 'boykisser.zip'; // Replace with the desired filename

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename=' . $filename);
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    // File not found
    http_response_code(404);
    echo 'File not found.';
    exit;
}
?>
