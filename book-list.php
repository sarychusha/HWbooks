<?php
include_once 'app/header.php';
?>
<style>
body {
    color: #ffffff; /* текст */
    font-family: sans-serif; /* шрифт */
}
.header {
    margin-left: 50%;
    padding-top: 3.5%; /*верх-низ*/
} /*название*/

.header_div {
    display: inline-block;
}/*элементы друг за другом*/

p {
    font-size: 30px;
}

/*конец шапки*/

/*начало таблицы*/
.table {
    margin-left: 17%;
    margin-right: 5%;
}
table {
    font-size: 24px;
}
.table_head {
    margin-left: 17%;
    margin-top: 3%;
}
td {
    text-align: center;
    border-bottom: 2px solid #ffffff;
    height: 10%;
}/*границы таблицы*/
/*конец таблицы*/
.function {
    display: inline-block;
    margin-left: 17%;
} /*толщина строки в таблице*/


</style>

<!-- шапка с названием страницы и поиском-->
<div class='header'>
        <div class='header_div'>
            <p>Книги</p>
        </div>
    </div>
    
    <!-- конец шапки-->
    <!-- начало талицы-->
    <!-- начало шапки талицы-->
    <div class='table_head'>
        <table cellspacing="0">
            <colgroup>
                <col style='width: 150px;'>
                <col style='width: 300px;'>
                <col style='width: 250px;'>
                <col style='width: 300px;'>
                <col style='width: 450px;'>
                <col style='width: 350px;'>
            </colgroup>
            <tr>
                <td>Код</td>
                <td>Название</td>
                <td>Цена</td>
                <td>Дата выхода</td>
                <td>Автор</td>
                <td>Издательство</td>
                <td></td>
            </tr>
            <!-- конец шапки таблицы-->
            <?php $books = get_books(); ?>
            <?php foreach ($books as $book): ?>
                <?php
                    $authorId = $book['id_author'];
                    $authorBook = $authorId ? get_author($authorId) : false;
                    $publishId = $book['id_publishing'];
                    $publishBook = $publishId ? get_publish($publishId) : false;
                ?>
                <tr>
                    <td><?= $book['id_book'] ?></td>
                    <td><?= $book['name_book'] ?></td>
                    <td><?= $book['price'] ?></td>
                    <td><?= $book['date'] ?></td>
                    <td>
                        <?php if ($authorBook) : ?>
                            <?= $authorBook['name'] ?>
                            <?= $authorBook['patronymic'] ?>
                            <?= $authorBook['surname'] ?>
                        <?php else: ?>
                            Автора нет
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if ($publishBook) : ?>
                            <?= $publishBook['name'] ?>
                        <?php else: ?>
                            Издательство<br> не указано
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

        <!-- конец таблицы издательства-->
<?php
include_once 'app/footer.php';
?>