<?php
error_reporting(0);
 $first_input = 'input';
 $input = $_POST["input"];
 $hash_type = $_POST["hash_type"];
if ($hash_type != ''){$first_input = $hash_type; }

   echo  '<div style="text-align: center;"><big><big style="color: white;">Encode/decode</big></big><br><br>';

   if ($hash_type=='MD5 - encode') {
      $result = md5($input);
      } elseif ($hash_type=='MD4 - encode') {
      $result = hash('md4', $input);
      }
      elseif ($hash_type=='SHA1 - encode') {
      $result = sha1($input);
      }
       elseif ($hash_type=='SHA256 - encode') {
      $result = hash('sha256', $input);
      }
       elseif ($hash_type=='SHA384 - encode') {
      $result = hash('sha384', $input);
      }
       elseif ($hash_type=='SHA512 - encode') {
      $result = hash('sha512', $input);
      }
       elseif ($hash_type=='ripemd128 - encode') {
      $result = hash('ripemd128', $input);
      }
       elseif ($hash_type=='ripemd160 - encode') {
      $result = hash('ripemd160', $input);
      }
       elseif ($hash_type=='ripemd256 - encode') {
      $result = hash('ripemd256', $input);
      }
       elseif ($hash_type=='ripemd320 - encode') {
      $result = hash('ripemd320', $input);
      }
         elseif ($hash_type=='whirlpool - encode') {
      $result = hash('whirlpool', $input);
      }
         elseif ($hash_type=='tiger128,3 - encode') {
      $result = hash('tiger128,3', $input);
      }
         elseif ($hash_type=='tiger160,3 - encode') {
      $result = hash('tiger160,3', $input);
      }
         elseif ($hash_type=='tiger192,3 - encode') {
      $result = hash('tiger192,3', $input);
      }
         elseif ($hash_type=='tiger128,4 - encode') {
      $result = hash('tiger128,4', $input);
      }
         elseif ($hash_type=='tiger160,4 - encode') {
      $result = hash('tiger160,4', $input);
      }
         elseif ($hash_type=='tiger192,4 - encode') {
      $result = hash('tiger192,4', $input);
      }
         elseif ($hash_type=='snefru - encode') {
      $result = hash('snefru', $input);
      }      elseif ($hash_type=='gost - encode') {
      $result = hash('gost', $input);
      }
         elseif ($hash_type=='adler32 - encode') {
      $result = hash('adler32', $input);
      }     elseif ($hash_type=='crc32 - encode') {
      $result = hash('crc32', $input);
      }
         elseif ($hash_type=='crc32b - encode') {
      $result = hash('crc32b', $input);
      }     elseif ($hash_type=='haval128,3 - encode') {
      $result = hash('haval128,3', $input);
      }
         elseif ($hash_type=='haval160,3 - encode') {
      $result = hash('haval160,3', $input);
      }
           elseif ($hash_type=='haval192,3 - encode') {
      $result = hash('haval192,3', $input);
      }
         elseif ($hash_type=='haval224,3 - encode') {
      $result = hash('haval224,3', $input);
      }     elseif ($hash_type=='haval256,3 - encode') {
      $result = hash('haval256,3', $input);
      }
         elseif ($hash_type=='haval128,4 - encode') {
      $result = hash('haval128,4', $input);
      }       elseif ($hash_type=='haval160,4 - encode') {
      $result = hash('haval160,4', $input);
      }
         elseif ($hash_type=='haval192,4 - encode') {
      $result = hash('haval192,4', $input);
      }     elseif ($hash_type=='haval224,4 - encode') {
      $result = hash('haval224,4', $input);
      }
         elseif ($hash_type=='haval256,4 - encode') {
      $result = hash('haval256,4', $input);
      }
       elseif ($hash_type=='haval128,5 - encode') {
      $result = hash('haval128,5', $input);
      }
         elseif ($hash_type=='haval160,5 - encode') {
      $result = hash('haval160,5', $input);
      }
           elseif ($hash_type=='haval192,5 - encode') {
      $result = hash('haval192,5', $input);
      }
         elseif ($hash_type=='haval224,5 - encode') {
      $result = hash('haval224,5', $input);
      }     elseif ($hash_type=='haval256,5 - encode') {
      $result = hash('haval256,5', $input);
     }
     elseif ($hash_type=='Base64 - encode') {
      $result = base64_encode($input);
      }
      elseif ($hash_type=='Base64 - decode') {
      $result = base64_decode($input);
      }
       elseif ($hash_type=='URL - encode') {
      $result = rawurlencode($input);
      }
      elseif ($hash_type=='URL - decode') {
      $result = rawurldecode($input);
      }
      echo '<FORM METHOD="POST" NAME="Abhik" ACTION=""><span style="font-weight: bold;">'.$first_input.':</span><br><textarea cols=70 rows=5 NAME="input" style="color: #FF0000; font-weight: bold; border: 1px dashed #333333; background-color: #000000">'.$result.'</textarea><br><select name="hash_type" style="color: #FF0000; font-weight: bold; border: 1px dashed #333333; background-color: #000000"><option selected>MD5 - encode</option><option>Base64 - encode</option><option>Base64 - decode</option><option>URL - encode</option><option>URL - decode</option><option>MD4 - encode</option><option>SHA1 - encode</option><option>SHA256 - encode</option><option>SHA384 - encode</option><option>SHA512 - encode</option><option>ripemd128 - encode</option><option>ripemd160 - encode</option><option>ripemd256 - encode</option><option>ripemd320 - encode</option><option>whirlpool - encode</option><option>tiger128,3 - encode</option><option>tiger160,3 - encode</option><option>tiger192,3 - encode</option><option>tiger128,4 - encode</option><option>tiger160,4 - encode</option><option>tiger192,4 - encode</option><option>snefru - encode</option><option>gost - encode</option><option>adler32 - encode</option><option>crc32 - encode</option><option>haval128,3 - encode</option><option>haval160,3 - encode</option><option>haval192,3 - encode</option><option>haval224,3 - encode</option><option>haval256,3 - encode</option><option>haval128,4 - encode</option><option>haval160,4 - encode</option><option>haval192,4 - encode</option><option>haval224,4 - encode</option><option>haval256,4 - encode</option><option>haval128,5 - encode</option><option>haval160,5 - encode</option><option>haval192,5 - encode</option><option>haval224,5 - encode</option><option>haval256,5 - encode</option></select> <INPUT TYPE="submit" VALUE="Send" style="color: #FF0000; font-weight: bold; border: 1px dashed #333333; background-color: #000000"></FORM><pre></div>';



?>
