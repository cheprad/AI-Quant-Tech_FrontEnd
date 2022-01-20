<?php
    echo '<pre>';
    print_r($_FILES);
    echo '<pre>';
    $dir = "uploads/";
    $uniq = "this_datetime";
    $pathFileImage = $dir .$uniq.basename($_FILES["file"]["name"]);
    
    echo $pathFileImage;
    

    if(move_uploaded_file($_FILES["file"]["tmp_name"],$pathFileImage)){
        echo "ไฟล์ภภาพชื่อ ". basename($_FILES["file"]["name"])."อัพโหลลดเสร็จ"; 
    } else {
        echo "ควย";
    };

?>