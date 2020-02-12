<?php
            $categories = get_categories();
           
        ?>
            <?php if(count($categories) === 0): ?>
                <li><a href="#" class="menu_li">Категории меню</a></li>
            <?php else: ?>

            <?php foreach($categories as $category): ?>
                <li><a href="/categories.php?id=<?=$category["id_categories"]?>"><?=$category["name"]?></a></li>
            <?php endforeach; ?>
            <?php endif; ?>
            






            <?php foreach($categories as $category): ?>
                <li><a href="/categories.php?id=<?=$category["id"]?>"><?=$category["name"]?></a></li>
            <?php endforeach; ?>
            <?php endif; ?>



            <?php 
            $category_id = $_GET['id'];
            $publishing = get_publishing_by_category($category_id);
        ?>
        <pre>
            <?=var_dump($publishing)?>
        </pre>


<!-- начало талицы-->
    <!-- начало шапки талицы-->
    <div class='table_head'>
        <table cellspacing="0">
            <colgroup>
                <col style='width: 0.5%;'>
                <col style='width: 3%;'>
                <col style='width: 3%;'>
                <col style='width: 3%;'>
                <col style='width: 3%;'>
            </colgroup>
            <tr>
                <td>Код</td>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Отчество</td>
                <td>Телефон</td>
            </tr>
        </table>
    </div>
    <!-- конец шапки таблицы-->
    <?php $authors = get_authors(); ?>
    <?php foreach ($authors as $author): ?>
    <div class='table'>
        <table cellspacing="0">
            <colgroup>
                <col style='width: 0.5%;'>
                <col style='width: 3%;'>
                <col style='width: 3%;'>
                <col style='width: 3%;'>
                <col style='width: 3%;'>
            </colgroup>
            <tr>
                <td><?=$author['id_author']?></td>
                <td><?=$author['name']?></td>
                <td><?=$author['surname']?></td>
                <td><?=$author['patronymic']?></td>
                <td><?=$author['date']?></td>
                </tr>
        </table>
    </div>
    <?php endforeach; ?>