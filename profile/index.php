
<div class="container p-3">
<h1 ...> Личный кабинет</h1>
<?php
echo fnGetProfile($_SESSION['login']);
echo fnGetCardProfile($_SESSION['login']);
?>

<a href="/application/"
class="btn btn-success mb-3 mt-3 w-100 shadow-sm p-3 fs-2 rounded-pill fw-bold">
Подать заявление
</a>
</div>
