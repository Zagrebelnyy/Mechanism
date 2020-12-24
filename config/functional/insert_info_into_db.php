<?php
    //Вставляет данные в бд
    //$name_table - название таблицы
    //$columns - массив вставляемых значений
    //$value - значение столбца
    //$connect - подключение к базе данных
    function insert_info_into_db($name_table, $columns, $values, $connect){
        //Проверяем является ли $columns и $values массивом
        if(is_array($columns) && is_array($values)){
            if(count($columns) == count($values)){
                //Строка для хранения названий всех столбцов
                $str = '';
                $params = '';
                for($i = 0; $i < count($values); $i++){
                    if($str !== ''){
                        $str .= ', '.$columns[$i];
                        $params .= ',?';
                    } else{
                        $str .= $columns[$i]; 
                        $params .= '?';
                    }
                }
                $stmt = $connect->prepare('INSERT INTO '.$name_table.' ('.$str.') VALUES ('.$params.')');
                $stmt->execute($values);
                return true;
            } else{
                return false;
            }
        }
        if(!is_array($columns) && !is_array($values)){
            $stmt = $connect->prepare('INSERT INTO '.$name_table.' SET '.$columns.' = ?');
            echo 'INSERT INTO '.$name_table.' SET '.$columns.' = ?';
            $stmt->execute([$values]);
            return true;
        } else{
            return false;
        }
    }
?>