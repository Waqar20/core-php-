<?php
session_start();

require 'function_login.php';

if (isset($_REQUEST['email'])) {
    $user_email = $_REQUEST['email'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => apidir('forget_password_api.php'),
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "action=forget_password&email=$user_email",
      CURLOPT_HTTPHEADER => array(),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      $arr_response = json_decode($response);

      $_SESSION['msg'] = $arr_response->message;
      $_SESSION['status'] = $arr_response->status==true?'1':'0';

      if ($arr_response->status) {
        $_SESSION['msg_type'] = 'success';
        header('location: '.$_SERVER['HTTP_REFERER']);
      }
    }
} else {
  echo 'something is wrong';
}