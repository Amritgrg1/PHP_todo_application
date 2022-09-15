<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") 
{
    $todo_item =$_POST['todo'];
    echo "you have entered " .$todo_item ." to the link";

}
