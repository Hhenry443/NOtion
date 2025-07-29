<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/public/php/api/pages/ReadPages.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/public/php/helpers.php';

// Page url is the page id? e.g NOtion.com/12
// This means i will need to change the router accordingly?

// Right now just test with hardocded
$ReadPages = new ReadPages();
if (!$page = $ReadPages->getPage(1)) {
    Utility::redirect('http://notion.test/error');
}

Utility::inspectAndDie($page);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Henry's NO-tion</title>
    <link href="./public/css/output.css" rel="stylesheet">
</head>

<body>
    <div id="content" class='w-screen h-screen bg-red-300 flex'>
        <div id="navigationSection" class='h-full w-1/8 bg-green-300'>

        </div>

        <div id="contentSection" class='h-full w-7/8 bg-blue-300'>

        </div>
    </div>
</body>

</html>