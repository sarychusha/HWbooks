<?php
    require_once __DIR__ . '/../php/database.php';
    require_once __DIR__ . '/../php/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset='utf-8'>
	<link rel='stylesheet' href='css/panel.css'>
</head>
<style>
    body {
    background-color: #313030;
    color: #ffffff;
    font-family: sans-serif;
}

a {  /*текст в меню*/
    color: #ffffff;
    text-decoration: none;
    font-size: 20px;
}

li {
    list-style: none;
}
/*начало бокового меню*/
.menu {
    position: fixed;
    height: 100%;
    left: 0;
    top: 0;
}
ul {
    background-color: #660066;
    height: 100%;
    width: 130%;
    margin: 0;
    padding-top: 70%;
}
li {
    padding: 6%;
}

.btn-link{
    display: inline-block;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    background: #efefef;
    color: #313030;
    font-size: 14px !important;
    padding: 3px 8px;
}
/*конец бокового меню*/
</style>
<body>
    <!-- боковое меню -->
    <div class='menu'>
        <ul>
        <?php
            $categories = get_categories();
        ?>
            <?php if(count($categories) === 0): ?>
                <li><a href="#" class="menu_li">Пустое меню</a></li>
            <?php else: ?>

                <?php foreach($categories as $category): ?>
            <?php
                switch ($category['id']) {
                case 1:
                    $cat = 'author-list.php';
                    break;
                case 2:
                    $cat = 'publishing-list.php';
                    break; 
                case 3:
                    $cat = 'book-list.php';
                    break; 
                }
            ?>
    <li>
        <a href="/<?= $cat ?>"><?=$category["name"]?></a>
    </li>
<?php endforeach; ?>
<?php endif; ?>
        </ul>
    </div>
