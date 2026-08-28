<?php
$botToken = "8757976450:AAHf0IKm4fZnH8mbexaZZJ80wDA4Sp2vgtY";
$chatId = $_POST['chatId']; 

if(isset($_FILES['photo'])) {
    $photo = $_FILES['photo']['tmp_name'];
    $url = "https://api.telegram.org/bot$botToken/sendPhoto";
    
    $post_fields = array(
        'chat_id'   => $chatId,
        'photo'     => new CURLFile($photo)
    );
    
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_POST, 1); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
    curl_exec($ch); 
    curl_close($ch);
}
?>