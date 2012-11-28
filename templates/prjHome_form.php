<form action="prjHome.php" method="post">
</form>
<!DOCTYPE html>
<html>
    <head>
        <style>
            <div name = "header" id = "header" width = 100%>
            </div>
            <div name = "sidebar" id = "sidebar"> 
                {
                    list-style-type:none;
                    width:20%;
                    margin:0;
                    padding:0;
                }
                a:link,a:visited
                {
                    display:block;
                    font-weight:bold;
                    color:#FFFFFF;
                    background-color:#3a0303;
                    width:120px;
                    text-align:center;
                    padding:4px;
                    text-decoration:none;
                    text-transform:uppercase;
                }
                a:hover,a:active
                {
                    background-color:#000000;
                }
            </div>
            <div name = "main" id = "main"> 
                {
                    list-style-type:none;
                    width:auto;
                    margin:0;
                    padding:0;
                }
            </div>
        </style>
    </head>
    <body>
        <div>
            <img alt="CS50 Scrolls" src="img/prjScrollheader.gif"/> 
        </div>  
        Welcome to CS50 Scrolls TOP! This text should be next to the "Home" key to your left, but it is not. Yikes!     
        <div>
            <a href = 'prjHome.php'>HOME</a>
            <a href = 'prjImage.php'>IMAGE</a>
            <a href = 'prjRegister.php'>REGISTER</a>
        </div>
        <div>
        Welcome to CS50 Scrolls! This text should be next to the "Home" key to your left, but it is not. Yikes!
        </div>
        <?php
        print("
        <table border='1' align ='center'>
        <tr>
        <th>Image ID</th>
        <th>Image Name</th>
        <th>Image Path</th>      
        </tr>
        ");
        foreach ($imgrows as $imgrow)
        {
            print("<tr>");
            print("<td>{$imgrow["ImgID"]}</td>");
            print("<td>{$imgrow["ImgName"]}</td>");
            print("<td><img title='CS50Scrolls Image 1' src='{$imgrow["ImgPath"]}' width=100px /></td>");
            print("</tr>");
        }
        print("</table>");
    ?>
    <div>
    or add a <a href="prjTagging.php">Tag!</a>
    </div>
    </body>
</html>
