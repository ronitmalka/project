<form action="prjHome.php" method="post">
</form>
<!DOCTYPE html>
<html>
    <head>
        <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
        <title>JSbin</title>
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
        Welcome to CS50 Scrolls Tagging function. In megabeta.... :)   
        <div>
            <a href = 'prjHome.php'>HOME</a>
            <a href = 'prjImage.php'>IMAGE</a>
            <a href = 'prjRegister.php'>REGISTER</a>
        </div class="container">
        <img title='CS50Scrolls Image 1' style="width: 200px; height: 200px" src='img/example.jpg' width=100px />
        </div>
        <p>Click to see the position!</p>
        <p id="position"></p>
        <div>
        <script>
        $(document).ready(function() {
          $('.container').click(function(e) {
            var offset = $(this).offset();
            $('#position').text((e.clientX - offset.left) + ", " + (e.clientY - offset.top));
          });
        });
        </script>

        </script>
        or add a <a href="prjTagging.php">Tag!</a>
        </div>
    </body>
</html>


