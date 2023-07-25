<?php
// Replace this with your secret key (the same one used for encryption in Node.js)
$secretKey = 'trill';

// Get the encrypted string from the URL query parameter
$encryptedText = $_GET['id'];

// Function to decrypt the encrypted text using AES decryption
function decrypt($encryptedText, $secretKey) {
  $ivSize = openssl_cipher_iv_length('aes-256-cbc');
  $iv = substr($encryptedText, 0, $ivSize);
  $encryptedText = substr($encryptedText, $ivSize);
  return openssl_decrypt($encryptedText, 'aes-256-cbc', $secretKey, OPENSSL_RAW_DATA, $iv);
}

// Decrypt the encrypted string
$decryptedText = decrypt(urldecode($encryptedText), $secretKey);
$anchor = base64_encode($decryptedText);

header('Location: /#'.$anchor);
//echo 'Decrypted Text: ' . $decryptedText;
?>
