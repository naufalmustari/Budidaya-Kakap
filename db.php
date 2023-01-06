<?php

function connect_DB()
{
  $conn = new mysqli('localhost', 'root', '', 'uaspemweb');
  return $conn;
}

$conn = connect_DB();

function clear($data)
{
  return htmlspecialchars($data);
}

function direct($url, $time = null)
{

  echo "<script>";
  if ($time != null) {
    echo "setTimeout(() => {
      location.replace('$url');
    }, $time);";
  } else {
    echo "location.replace('$url')";
  }
  echo "</script>";
}

function query_select($table = false, $select = null)
{
  global $conn;

  if ($select) {
    $result = mysqli_query($conn, "SELECT * FROM " . $table . " WHERE " . $select);
  } else {
    $result = mysqli_query($conn, "SELECT * FROM " . $table);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function query_insert($table, $data)
{
  global $conn;

  $value = "";
  $i = 1;
  foreach ($data as $val) {
    $value .= "'" . $val . "'";
    if ($i != count($data)) {
      $value .= ", ";
    }
    $i++;
  }
  unset($i);

  mysqli_query($conn, "INSERT INTO $table VALUES($value)");
  return mysqli_affected_rows($conn);
}

function query_delete($table, $where)
{
  global $conn;

  mysqli_query($conn, "DELETE FROM $table WHERE $where");
  return mysqli_affected_rows($conn);
}
