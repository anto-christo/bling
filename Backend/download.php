<?php
    header("Access-Control-Allow-Origin: *");

    $name= $_GET['name'];

    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($name));
    ob_clean();
    flush();
    readfile("http://bling-test.000webhostapp.com/upload/".$name); //showing the path to the server where the file is to be download
    exit;
?>