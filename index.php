<?php
include_once 'src/Language.php';

$lng=new \Language\Language();

//var_dump($lng->getLanguage('bn',3));

?>

<html>
    <body>
        <h2><?= $lng->getLanguage('bn',1)?> : </h2>
        <h2><?= $lng->getLanguage('bn',2)?> : </h2>
        <h2><?= $lng->getLanguage('bn',3)?> : </h2>
        <h2><?= $lng->getLanguage('bn',4)?> : </h2>
    </body>
</html>
