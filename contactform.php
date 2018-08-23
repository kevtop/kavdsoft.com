<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $comments = $_POST['comments'];
    $from = $_POST["mail"];
    $developer = $_POST['developer'];
    $subject = "Test";

    $mailTo ="kvelasco@kavdsoft.com";
    $headers = "From: ".$from;
    $txt = "You have received an e-mail from ".$name.".\n\n".$comments."\n\ndeveloper: ".$developer;

    $bool = mail($mailTo,$subject,$txt,$headers);
    
    if($bool){
        echo "mensaje enviado";
        header("Location: index.php?mailsend");
    }
    else{
        echo "mensajo no enviado";
        
    }
}

?>