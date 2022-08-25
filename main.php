<?php
require_once ('class/GeneratorNewId.php');
require_once ('class/Database.php');

if (!empty($_POST['url']))
{
    if (preg_match('|^http(s)?://[a-z\d-]+(.[a-z\d-]+)*(:\d+)?(/.*)?$|i', $_POST['url']))
    {
        try {
            $generate = new GeneratorNewId();
            $insert = new Database();
            $oldUrl = $_POST['url'];
            $newUrl = $generate->uniqidReal(10);
            $insert->Insert($oldUrl, $newUrl);
        } catch (Exception $e) {echo 'Error';}
    }
    else
    {
        header('Location: index.php?q=er');
    }
}
else
{
    header('Location: index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Short URL</title>
</head>
<body class="bg-dark">
<div class="container mt-5">
    <div class="card text-center">
        <div class="card-header">
            Short URL
        </div>
        <div class="card-body">
            <h5 class="card-title">Your links</h5>
            <table class="table">
                <tbody>
                <tr>
                    <td>Old URL:</td>
                    <td><?php echo $oldUrl ?></td>
                </tr>
                <tr>
                    <td>New URL:</td>
                    <td><?php echo 'http://localhost/shorturl/share.php?q=' . $newUrl ?></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
            <a href="index.php">Thank You</a>
        </div>
    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
