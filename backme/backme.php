<?php

foreach ($_FILES["file_part"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["file_part"]["tmp_name"][$key];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($_FILES["file_part"]["name"][$key]);
        move_uploaded_file($tmp_name, "uploads/$name");
    }
}

//header("refresh:3; url=testfile.html");
?>
