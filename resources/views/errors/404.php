<?php
echo date('Y-m-d H:i:s');
echo strftime("Today in Indonesia is %B");
function php($content) {
    $data = array(
        "title" => "Login",
        "content" => "login"
    );
    $content = preg_replace_callback('/{{\s*(.*?)\s*}}/', function ($matches) use ($data) {
        $key = $matches[1];
        print_r($key);
        return '<?php echo '.$data[$key].'; ?>';
    }, $content);
    return other($content);
}

function other($content) {
    $content = preg_replace_callback('/@php(.*?)@endphp/s', function ($matches) {
        return '<?php '.$matches[1].' ?>';
    }, $content);
    $content = preg_replace_callback('/@if(.*?)@endif/s', function ($matches) {
        return '<?php if'.$matches[1].': ?>';
    }, $content);
    return $content;
}

ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $data['title']->dasd }} </title>
</head>
<body>
</body>
</html>

<?php
$content = ob_get_clean();
$content = php($content);
ob_start();
eval('?>'.$content);