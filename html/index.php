<?php

    // configuration
    require("../includes/config.php"); 
    
    /*//links to other pages
    print("<a href = 'buy.php'>BUY STOCKS</a><br>");
    print("<a href = 'sell.php'>SELL STOCKS</a><br>");
    print("<a href = 'history.php'>HISTORY</a><br>");
    print("<a href = 'register.php'>REGISTER</a><br>");
    print("<a href = 'password.php'>CHANGE PASSWORD</a><br>");
    print("<a href = 'quote.php'>GET QUOTES</a><br>");  */
    
    require("../includes/links.php");                  

    // render portfolio
    render("portfolio.php", ["title" => "Portfolio"]);

?>

