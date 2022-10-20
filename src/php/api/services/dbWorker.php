<?php

function getDbObject()
{
    $mysqli = new mysqli("db", "user", "password", "appDB");
    return $mysqli;
}

function getCatalog($offset, $limit)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("SELECT * FROM catalog LIMIT $limit OFFSET $offset");
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    $mysqli->close();
    return $products;
}

function getUsers($offset, $limit)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("SELECT * FROM users LIMIT $limit OFFSET $offset");
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    $mysqli->close();
    return $users;
}

function addItemToCatalog($name, $price, $description)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("INSERT INTO catalog (product_name, product_price, product_desc) VALUES ('$name', '$price', '$description')");
    $mysqli->close();
    return $result;
}

function addUser($name, $password)
{
    $mysqli = getDbObject();
    $result = $mysqli->query("INSERT INTO users (name, password) VALUES ('$name', '$password')");
    $mysqli->close();
    return $result;
}
