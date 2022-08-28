<?php
require_once ('class/Database.php');

if (isset($_GET['q']))
{
    $oldUrl = $_GET['q'];
    $getUrl = new Database();
    $data = $getUrl->Show($oldUrl)[1];
    if (!$data)
    {
        header('Location: /index');
    }
}
else
{
    header('Location: /index');
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
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1343391842580379"
            crossorigin="anonymous"></script>
    <title>Short URL</title>
</head>
<body class="bg-dark text-white">

<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="/index">Short URL</a>
    <button id="fiveSec" class="btn btn-primary float-right"> 5 sec </button>
    <a href="<?php echo $data ?>" id="button" type="submit" class="btn btn-primary float-right">Skip ad</a>
    <script>
        document.getElementById("button").style.display = "none";
        document.getElementById("fiveSec").style.display = "inline";

        function showStuff() {
            document.getElementById("button").style.display = "inline";
            document.getElementById("fiveSec").style.display = "none";
        }

        function myFunction() {
            window.location = "share.php"
        }

        setTimeout(showStuff, 5000);
    </script>
</nav>
<div class="container">
    <h3 class="text-center mt-4">Miejsce dla reklam</h3>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
