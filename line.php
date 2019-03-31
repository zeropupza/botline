 <?php
  

function send_LINE($msg){
$access_token = 'tBgA6nCVJGCK9IN2LMZJPuQUR8ipuHZeNTtPaR2fvuz+ZoAMCdSAI2SPjr7TwTWEbbjAMivEr7vMV75JU3larwWufDiWHo+Ppkj6jOYuSQHFjdz+K0aQZyM5Y6LneNl0oj5Ajrotd/xPElACC1a/GgdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'U72d80c3a0b839360afdc0cd393b459cd',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
