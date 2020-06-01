<?php

session_start('csrfToken');

header('X-FRAME-OPTION:DENY');

function h($str){
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

echo '<pre>';
echo h($_GET['name']);
var_dump($_GET);
echo '</pre>';

// input.php $pageFlag=0
// confirm.php $pageFlag=1
// thnaks.php $pageFlag=2

$pageFlag = 0

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
if(!isset($_SESSION['csrfToken'])){
    $csrfToken = bin2hex(random_bytes(32));
    $_SESSION['csrfToken'] = $csrfToken;
}
$token = $_SESSION['csrfToken'];
?>

    <form method="GET" action="input.php">
    名前
    <input type="text" name="name"></input>
    <br>
    <input type="checkbox" name="sports[]" value="野球">野球
    <input type="checkbox" name="sports[]" value="サッカー">サッカー
    <input type="checkbox" name="sports[]" value="バスケ">バスケ

    <input type="hidden" name="csrf" value="<?php echo $token ?>">

    <input type="submit" value="送信">

    </form>
</body>
</html>