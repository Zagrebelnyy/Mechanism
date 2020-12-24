<?php
    //Возвращает данные из таблицы по заданному id
    //$name_table - название таблицы
    //$column - название столбцов
    //$value - значение столбца
    //$connect - подключение к базе данных
    //$info - какие значения выбрать из бд (поумолчанию это '*')
    function get_info_from_db($name_table, $column, $value, $connect, $info = '*'){
        $stmt;
        //Проверяем является ли $column массивом
        if(is_array($column)){
            //Строка для хранения названий всех столбцов
            $str = '';
            foreach($column as $key){
                if($str == ''){
                    $str.= $key.' = ?';
                }
                else{
                    $str.= ' AND '.$key.' = ?';
                }
            }
            $stmt = $connect->prepare("SELECT ".$info." FROM ". $name_table." WHERE ".$str);
        } else{
            $stmt = $connect->prepare("SELECT ".$info." FROM ". $name_table." WHERE ".$column.' = ?');
        }
        if (is_array($value)){
            $stmt->execute($value);
        } else{
            $stmt->execute([$value]);
        }
        //Записываем в переменную $result все значения из бд
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
?>