<?php
    //Для удаления записей из бд
    //$name_table - название таблицы
    //$column - название столбца, по которому происходит удаление
    //$value - значение столбца $column
    function delete_info_from_db($name_table, $column, $value, $connect){
        $stmt = $connect->prepare('DELETE FROM '.$name_table.' WHERE '.$column.'= ?');
        $stmt->execute([$value]);
    }
?>