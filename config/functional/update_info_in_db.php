<?php
    //Для обновления данных в бд (её нужно доделать)
    //$name_table
    //$column - название столбцов
    //$new_value - новое значение $column
    //$key_value - столбец, который будет условием для вставки значений
    //$key_value - значение, которое будет значением ключевого столбца
    //$connect - подключение к бд
    function update_info_in_db($name_table, $column, $new_value, $key_column, $key_value, $connect){
        $stmt;
        //Массив параметров
        $params;
        //Проверяем является ли $column массивом
        if(is_array($column)){
            //Проверяем совападает ли количество введённых столбцов с количеством значений
            if(count($column) === count($new_value)){
                //Строка для хранения названий всех столбцов
                $str = '';
                foreach($column as $key){
                    if($str == ''){
                        $str.= $key.' = ?';
                    } else{
                        $str.= ', '.$key.' = ?';
                    }
                }
                $stmt = $connect->prepare("UPDATE ".$name_table." SET ".$str." WHERE ".$key_column.' = ?;');
                array_push($new_value, $key_value);
                $params = $new_value;
            } else{
                return false;
            }
        } else{
            $stmt = $connect->prepare("UPDATE ".$name_table." SET ".$column." = ? WHERE ".$key_column.' = ?;');
            $params = [$new_value, $key_value];
        }
        $stmt->execute($params);
    }
?>