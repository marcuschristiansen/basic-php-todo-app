<?php 

function add_todo_item($item) {
    end($_SESSION['todoItem']);
    $key = key($_SESSION['todoItem']);
    $_SESSION['todoItem'][$key + 1]['item'] = $item;
    $_SESSION['todoItem'][$key + 1]['completed'] = '';
}

function delete_todo_item($item) {
    unset($_SESSION['todoItem'][$item]);
}

function toggle_todo_item($item) {
    if($_SESSION['todoItem'][$item]['completed'] == '') {
        $_SESSION['todoItem'][$item]['completed'] = 'success';
        return;
    } 
    $_SESSION['todoItem'][$item]['completed'] = '';
}

?>