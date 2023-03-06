<?php

function Prime($num) {
    if ($num < 2) {
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $yearOfBirth = $_POST['yearofbirth'];
  $currentYear = date('Y');
  $age = $currentYear - $yearOfBirth;

  $Prime = Prime($age);
  $response = array(
    'age' => $age,
    'Prime' => $Prime
  );

  echo json_encode($response);
} else {
  echo 'Error';
}
?>
