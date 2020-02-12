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

<!-- шапка с названием страницы-->
<div class='header'>
        <div class='header_div'>
            <p>Авторы</p>
        </div>
    </div>
    <!-- конец шапки-->
   
  <!-- начало талицы-->
  <!-- начало шапки таблицы-->
  <div class='table_head'>
      
      <table cellspacing="0">
          <colgroup>
              <col style='width: 100px;'>
              <col style='width: 350px;'>
              <col style='width: 400px;'>
              <col style='width: 400px;'>
          </colgroup>
          <tr>
              <td>Код</td>
              <td>Имя</td>
              <td>Отчество</td>
              <td>Фамилия</td>
              <td></td>
          </tr>
          <!-- конец шапки таблицы-->
          <?php $authors = get_authors(); ?>
          <?php foreach ($authors as $author): ?>
              <tr>
                  <td><?= $author['id_author'] ?></td>
                  <td><?= $author['name'] ?></td>
                  <td><?= $author['patronymic'] ?></td>
                  <td><?= $author['surname'] ?></td>
              </tr>
          <?php endforeach; ?>
      </table>
  </div>



    <!-- конец таблицы-->
    
<?php
include_once 'app/footer.php';
?>