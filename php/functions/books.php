<?php
/* книги */
function get_books() {

    global $link;

    $sql = "SELECT * FROM book";

    $result = mysqli_query($link, $sql);

    $book = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $book;
}

function get_book($id) {
    global $link;
    $sql = 'SELECT * FROM book WHERE id_book=' . $id;
    $query = mysqli_query($link, $sql);
    if (!$query) {
        var_dump(mysqli_error($link));
        die();
    }
    return mysqli_fetch_assoc($query);
}
/* книги */