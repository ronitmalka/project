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
        <?php
