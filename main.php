<?php
require_once ('class/GeneratorNewId.php');
require_once ('class/Database.php');

if (!empty($_POST['url']))
{
    if (preg_match('|^http(s)?://[a-z\d-]+(.[a-z\d-]+)*(:\d+)?(/.*)?$|i', $_POST['url']))
    {
        try {
            $newUrl = new GeneratorNewId();
            $insert = new Database();
            $insert->Insert($_POST['url'], $newUrl->uniqidReal(10));
            header('Location: thanks.php');
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
