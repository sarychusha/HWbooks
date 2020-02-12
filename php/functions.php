<?php
    include_once 'database.php';
    require_once 'functions/author.php';
    include_once 'functions/publishing.php';
    include_once 'functions/books.php';
?>

<?php

function get_categories() {

    global $link;

    $sql = "SELECT * FROM categories";

    $result = mysqli_query($link, $sql);

    $categories = mysqli_fetch_all($result, MYSQLI_ASSOC); // MYSQLI_ASSOC - константа

    return $categories;
}