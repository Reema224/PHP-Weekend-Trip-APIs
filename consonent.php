<?php

function Consonant() {
  if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('HTTP/1.1 405 Method Not Allowed');
    header('Allow: POST');
    echo 'Error: Only POST requests are allowed';
    return;
  }

  $word = $_POST['word'];

  $consonantsRegex = '/^[bcdfghjklmnpqrstvwxyz]+/i';

  preg_match($consonantsRegex, $word, $matches);

  $consonants = isset($matches[0]) ? $matches[0] : '';

  $newWord = substr($word, strlen($consonants)) . $consonants . 'ay';

  echo $newWord;
}

// Call the Consonant function
// Consonant();
// if($_SERVER['REQUEST_METHOD'] == 'POST') {

//   $word = $_POST['word'];
  

//   $moveconsonent =  Consonant($word);
//   $response = array(
//     'consonent' => $moveconsonent
//   );

//   echo json_encode($response);
// } else {
//   echo 'Error';
// }
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!isset($_POST['word'])) {
    echo 'Error: word parameter is missing';
    return;
  }

  $word = $_POST['word'];

  $moveconsonent =  Consonant($word);
  $response = array(
    'consonent' => $word
  );

  echo json_encode($response);
} else {
  echo 'Error: Only POST requests are allowed';
}

?>
