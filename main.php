<?php
require_once ('class/GeneratorNewId.php');

if (!empty($_POST['url']))
{
    if (preg_match('|^http(s)?://[a-z\d-]+(.[a-z\d-]+)*(:\d+)?(/.*)?$|i', $_POST['url']))
    {
        $newUrl = new GeneratorNewId();
        try {
            $newUrl->uniqidReal(10);
        } catch (Exception $e) {echo 'Error';}
    }
    else
    {
        echo 'Nie prawidłowy adres url';
    }
}
else
{
    header('Location: index.html');
}
