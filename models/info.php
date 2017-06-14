<?php
/**
 * Description of info
 *
 * @author andrey
 */
class info {
    //put your code here
    public static function getInfo(){ //функция для получения массива общей информации из бд
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        
        $info = array(); //инициализируем переменную 
        
        $result = $db->query('SELECT * FROM info'); // получаем из базы список
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $row = $result->fetch();
        foreach ($row as $key => $value) { //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
            $info[$key] = $value;
        }
        
        return $info; //возвращаем массив
    }
}
