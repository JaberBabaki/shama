<?php
class EncryptionController{
    
    public static function encryptCounselingCategoriesId($value){
        return ($value * 30) + 2;
    }

    public static function decryptCounselingCategoriesId($value){
        return ($value - 2) / 30;
    }

    public static function encryptSubTopicId($value){
        return ($value * 11) + 5;
    }

    public static function decryptSubTopicId($value){
        return ($value - 5) / 11;
    }

    public static function encryptTreatmentApproachId($value){
        return ($value * 41) + 9;
    }

    public static function decryptTreatmentApproachId($value){
        return ($value - 9) / 41;
    }

    public static function encryptAccessTypes($data)
    {
      $response = [];
      for ($i=0; $i<count($data); $i++){
        $response[$i]['value'] = $data[$i]['acessType_id'] * 9 + 3;
        $response[$i]['accessName'] = $data[$i]['name'];
      }
      return $response;
    }
  
    public static function decryptAccessTypes($value)
    {
      $value = ($value - 3) / 9;
      return $value;
    }
    
    public static function encriptText($text){
        // Store cipher method 
        // Store the cipher method 
        $ciphering = "AES-128-CTR"; 
          
        // Use OpenSSl Encryption method 
        $iv_length = openssl_cipher_iv_length($ciphering); 
        $options = 0; 
          
        // Non-NULL Initialization Vector for encryption 
        $encryption_iv = '4782587287628763'; 
          
        // Store the encryption key 
        $encryption_key = "xnQEENUD9WdMvGuj"; 
          
        // Use openssl_encrypt() function to encrypt the data 
        $encryption = openssl_encrypt($text, $ciphering, $encryption_key, $options, $encryption_iv); 
        return $encryption;
      }
      
      public static function decryptText($text){
        $ciphering = "AES-128-CTR"; 
        // Non-NULL Initialization Vector for decryption 
        $decryption_iv = '4782587287628763'; 
          
        // Store the decryption key 
        $decryption_key = "xnQEENUD9WdMvGuj"; 
        
        $options = 0; 
        // Use openssl_decrypt() function to decrypt the data 
        $decryption = openssl_decrypt ($text, $ciphering, $decryption_key, $options, $decryption_iv); 
        return $decryption;
      }
}
?>