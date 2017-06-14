<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Catriges
 *
 * @author andrey
 */
class Services {
    //put your code here
    
    public static function getAllServices(){ //получаем сумму всех картриджей(доставленных и замененных) по запросу ниже
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        
        $servicesList = array(); //инициализируем переменную 
        
        $result = $db->query('SELECT * FROM services'); // получаем из базы список
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while($row = $result->fetch()){
            foreach($row as $key => $value) { //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
                $servicesList[$i][$key] = $value;
            }
            $i++;
        }
        return $servicesList; //возвращаем массив
    }
    
    public static function getLimitServices($limit = 3){ //получаем сумму всех картриджей(доставленных и замененных) по запросу ниже
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        
        $servicesList = array(); //инициализируем переменную 
        
        $sql = "SELECT * FROM services ORDER BY RAND() LIMIT ". intval($limit) . "";
        
        $result = $db->query($sql); // получаем из базы список
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while($row = $result->fetch()){
            foreach($row as $key => $value) { //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
                $servicesList[$i][$key] = $value;
            }
            $i++;
        }
        return $servicesList; //возвращаем массив
    }
    
}
