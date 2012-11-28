<?php
    // configuration
    require("../includes/config.php");
    
    // if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty ($_POST["username"]))
        {
            apologize("Cannot leave username field blank");
        }
        if (empty ($_POST["password"]))
        {
            apologize("Cannot leave password field blank");
        }
        if ($_POST["password"] != $_POST["confirmation"])
        {
            apologize("password is not confirmed");
        }
        $result = query("INSERT INTO TblUsers (username, hash) VALUES(?, ?)", $_POST["username"], crypt($_POST["password"]));
        
        if ($result === false)
        {
            apologize("username already exists, sorry!");
        }
       
            $rows = query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            $_SESSION["id"] = $id;
            redirect("prjImage.php");
    }
    else
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }
?>
