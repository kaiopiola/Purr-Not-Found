<?php
if (isset($_GET['error'])) {
    $code = $_GET['error'];
} else {
    $code = $_SERVER['REDIRECT_STATUS'];
}
$codes = array(
    100 => 'Continue',
    101 => 'Switching Protocols',
    102 => 'Processing',
    200 => 'OK',
    201 => 'Created',
    202 => 'Accepted',
    204 => 'No Content',
    206 => 'Partial Content',
    207 => 'Multi-Status',
    300 => 'Multiple Choices',
    301 => 'Moved Permanently',
    302 => 'Found',
    303 => 'See Other',
    304 => 'Not Modified',
    305 => 'Use Proxy',
    307 => 'Temporary Redirect',
    400 => 'Bad Request',
    401 => 'Unauthorized',
    402 => 'Payment Required',
    403 => 'Forbidden',
    404 => 'Not Found',
    405 => 'Method Not Allowed',
    406 => 'Not Acceptable',
    408 => 'Request Timeout',
    409 => 'Conflict',
    410 => 'Gone',
    411 => 'Length Required',
    412 => 'Precondiction Failed',
    413 => 'Payload Too Large',
    414 => 'Request-URI Too Long',
    415 => 'Unsupported Media Type',
    416 => 'Request Range Not Satisfiable',
    417 => 'Expectation Failed',
    418 => "I'm a Teapot",
    420 => 'Enhance Your Calm 🍁',
    421 => 'Misdirected Request',
    422 => 'Unprocessable Entity',
    423 => 'Locked',
    424 => 'Failed Dependency',
    425 => 'Unordered Collection',
    426 => 'Upgrade Required',
    429 => 'Too Many Requests',
    431 => 'Request Header Fields Too Large',
    444 => 'No Response',
    450 => 'Blocked by Windows Parental Controls',
    451 => 'Unavailable For Legal Reasons',
    499 => 'Client Closed Request',
    500 => 'Internal Server Error',
    501 => 'Not Implemented',
    502 => 'Bad Gateway',
    503 => 'Service Unavailable',
    504 => 'Gateway Timeout',
    506 => 'Variant Also Negotiates',
    507 => 'Insufficient Storage',
    508 => 'Loop Detected',
    509 => 'Bandwidth Limit Exceeded',
    510 => 'Not Extended',
    511 => 'Network Authentication Required',
    599 => 'Network Connect Timeout Error'
);
$prefixurl = './img/error/';
$suffixurl = '.jpg';
$source_url = 'http' . ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if (array_key_exists($code, $codes) && is_numeric($code)) {
    $error = $code;
    $message = $codes[$code];
    //die("Error $code: {$codes[$code]}");
} else {
    $error = 'wut';
    $message = 'Wut?';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "$code - $message";?></title>
</head>

<style>
    .centralizar {
        position: absolute;
        top: 30%;
        left: 41%;
        margin: -100px 0 0 -150px;
    }
</style>

<body style="background-color: black;">
    <div class="container centralizar">
        <img src="<?php echo $prefixurl; echo $error; echo $suffixurl; ?>" alt="">
    </div>
</body>

</html>