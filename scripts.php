<?php

  if ($_SERVER["REAUEST_METHOD"]=== $POST){
     $name = $_POST["name"];
     $mail = $_POST["e_mail"];
     $txt = $_POST["text"];
     $vid_link = $_POST["video_link"];
    $to = "aztik77@gmail.com";
    $subject = "Submiting a Video";
    $t = "Name: ${name}\nHope u like ";
    $head = "From {$mail}\n{$txt} here is the video link hope u like it\n{$vid_link}";
   if (mail($to , $subject ,$t ,$head)){
    Echo "<h1>Success!!</h1>";
  }else{
    echo "<H1>Something went wrong :(</H1>";
  }
}
?>
