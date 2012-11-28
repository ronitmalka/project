
<img src="img/example.jpg" alt="Example picture"/>
<form action="prjImage.php" method="post">
</form>

<?php
    echo "userID = " . $_SESSION["id"]; 
    print("
        <table border='1' align ='center'>
        <tr>
        <th>User</th>
        <th>Image</th>
        <th>Date</th>
        <th>Comment</th>        
        </tr>
        ");
    
    foreach ($rows as $row)
    {
        print("<tr>");
        print("<td>{$row["userID"]}</td>");
        print("<td>{$row["picID"]}</td>");
        print("<td>{$row["commentDate"]}</td>");
        print("<td>{$row["commentText"]}</td>"); 
        print("</tr>");
    }
    print("</table>");
?>
<div>
    or add a <a href="prjComment.php">comment</a>
</div>


