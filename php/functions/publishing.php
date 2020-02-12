<?php
function get_publishing() {

    global $link;

    $sql = "SELECT * FROM publishing";

    $result = mysqli_query($link, $sql);

    $publishing = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $publishing;
}

function get_publish($id) {
    global $link;
    $sql = 'SELECT * FROM publishing WHERE id_publishing=' . $id;
    $query = mysqli_query($link, $sql);
    if (!$query) {
        var_dump(mysqli_error($link));
        die();
    }
    return mysqli_fetch_assoc($query);
}

function add_publish($name, $address, $phone)
{
    global $link;
    $sql = "
        INSERT INTO publishing (name, address, phone) 
        VALUES ('{$name}', '{$address}', '{$phone}')
    ";
    $query = mysqli_query($link, $sql);
    if (!$query) {
        var_dump(mysqli_error($link));
        die();
    }
}

function update_publish($id, $name, $address, $phone)
{
    global $link;
    $sql = "
        UPDATE publishing 
        SET 
            name = '{$name}',
            address = '{$address}',
            phone = '{$phone}'
        WHERE id_publishing = $id
    ";
    $query = mysqli_query($link, $sql);
    if (!$query) {
        var_dump(mysqli_error($link));
        die();
    }
}

function delete_publishing($id) {
    global $link;
    $sql = 'DELETE FROM publishing WHERE id_publishing = ' . $id;
    $query = mysqli_query($link, $sql);
    if (!$query) {
        var_dump(mysqli_error($link));
        die();
    }
}