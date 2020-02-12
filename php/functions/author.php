<?php
function get_authors() {

    global $link;

    $sql = "SELECT * FROM author";

    $result = mysqli_query($link, $sql);

    $authors = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $authors;

}

function get_author($id) {
    global $link;
    $sql = 'SELECT * FROM author WHERE id_author=' . $id;
    $query = mysqli_query($link, $sql);
    if (!$query) {
        var_dump(mysqli_error($link));
        die();
    }
    return mysqli_fetch_assoc($query);
}
