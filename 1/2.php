<?php
//$a = 1;
////$b = $a;
//
//// refrence
//$b = &$a;
//
//$a = 4;
//
//echo $b;

//$name = 'ali';
//
//echo "hello $name";
//echo "hello {$name}";
//echo "hello" . $name;


?>


<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<h1>

    <?php
        echo 'This is a Heading';
    ?>
    <br>
    <?= 'this is 2 heading'?>
</h1>
<p>This is a paragraph.</p>
<?php
//    comment 1
# comment 2
/* multiline comment*/

$a = 1;

echo '<p>'. $a .'</p>';
?>
</body>
</html>