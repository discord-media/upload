<?php
$api_key = '94158a4f71ded2eadc9e44b7423165e6';
$image_path = $_FILES['image']['tmp_name'];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.imgbb.com/1/upload?key=' . $api_key);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, array('image' => base64_encode(file_get_contents($image_path))));
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>
