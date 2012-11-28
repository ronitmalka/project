<?php
    // configuration
    require("../includes/config.php"); 
    //require("../includes/prjLinks.php"); 
    
    $imgrows = query("SELECT * FROM TblImages WHERE ImgID = 1");
    //echo $row['ImgPath']; 

    render("prjHome_form.php", ["imgrows" => $imgrows]);
?>
