<?php
    // configuration
    //require("../includes/functions.php");
    require("../includes/config.php");
    require("../includes/prjLinks.php");     
    
    //continue the session variables
    echo "userID = " . $_SESSION["id"];     
  
    //render("prjImage_form.php", ["title" => "Image"]);  
//if ($_SERVER["REQUEST_METHOD"] == "POST")
    

    $rows = query("SELECT userID, picID, commentDate, commentText FROM TblComments");
    /*
    foreach ($rows as $row)
    {
        print("<tr>");
        print("<td>{$row["userID"]}</td>");
        print("<td>{$row["picID"]}</td>");
        print("<td>{$row["commentDate"]}</td>");
        print("<td>{$row["commentText"]}</td>"); 
        print("</tr>");
    }
    */
    
    render("prjImage_form.php", ["rows" => $rows]);

/*
else
{
    // render portfolio
    render("prjImage_form.php", ["title" => "Comments"]);
}
*/     
    
?>
