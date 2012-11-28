<?php
    // configuration
    //require("../includes/functions.php");
    require("../includes/config.php");  
    
    //continue the session variables
    echo "userID = " . $_SESSION["id"];     
   
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    //Get SYMBOL
    $comment = $_POST["comment"];
    
    //check that symbol is not NULL        
    if ($comment === NULL)
    {
        apologize("please write a comment");
    }
    else if ($_POST["comment"] === false)
    {
        apologize("please write a comment"); 
    }
    else
    {   
        //Find userID  
        $uID = $_SESSION["id"];     
        //$uID = query("SELECT * FROM TblUsers WHERE userID = ?", $_SESSION["id"]); 
        //$userID = 1;
        
        
        //Find picID
        $picID = 1;

        //Add a comment to the user's database
        $status = query("INSERT INTO TblComments (userID, picID, commentDate, commentText) VALUES('$uID', '$picID', NOW(), '$comment')");

        //$rows = query("SELECT userID, picID, commentDate, commentText FROM TblComments WHERE id = ?",$_SESSION["id"]);
        /*$rows = query("SELECT userID, picID, commentDate, commentText FROM TblComments");
        ?>
        <div>
        <table class = "table table-striped">
        <?php
        foreach ($rows as $row)
        {
            print("<tr>");
            print("<td>{$row["userID"]}</td>");
            print("<td>{$row["picID"]}</td>");
            print("<td>{$row["commentDate"]}</td>");
            print("<td>{$row["commentText"]}</td>"); 
            print("</tr>");
        }
        ?>
        </table>
        </div>
        <?php */
        
        //update history in account
        //query("INSERT INTO History (id, b_or_s, time, symbol_purchase, shares_purchase, cost) VALUES('$id', '1', NOW(), '$symbol', '$shares', '$cost')");
        redirect("prjImage.php");
    }
} 

else
{
    // render portfolio
    render("prjComment_form.php", ["title" => "Comments"]);
}       
?>
