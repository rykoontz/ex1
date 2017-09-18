<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<?php

  include '_includes/config.php';

  include ABSOLUTE_PATH . '/_includes/header.inc.php';
 ?>

<body>

<?php

$myNamedArray = array('myName' => 'Ryan', 'myColor' => 'Red', 'myMovie' => 'Avatar', 'myBook' =>
'The Hobbit', 'myWebsite' => 'Youtube.com');

$myName = $myNamedArray['myName'];
?>


<h1>
<?php
echo "<br/> My name is $myName";
?>
</h1>

<?php

  foreach ($myNamedArray as $key => $item) {
    if ($item == 'Ryan') {
      unset($myNamedArray[$key]);
    }
    echo "$key : $item<br/>";
  }




include ABSOLUTE_PATH . '/_includes/footer.inc.php';

?>
</body>
</html>
