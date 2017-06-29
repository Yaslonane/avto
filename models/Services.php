<?php
/**
 * Description of Services
 *
 * @author andrey
 */
class Services {
    //put your code here
    
    public static function getAllServices(){ //получаем все услуги
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        
        $servicesList = array(); //инициализируем переменную 
        
        $result = $db->query('SELECT * FROM services WHERE is_publication = 1'); // получаем из базы список
        
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
    
    public static function getAllServicesAdmin(){ //получаем все услуги
        
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
    
    public static function getLimitServices($limit = 3){ //получаем случайные услуги
        
        $db = Db::getConnection(); //инициализируем подключение к бд
        
        $servicesList = array(); //инициализируем переменную 
        
        $sql = "SELECT * FROM services WHERE is_publication = 1 ORDER BY RAND() LIMIT ". intval($limit) . "";
        
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
    
    public static function getServiceById($id){
        
        $id = intval($id);
        
        if($id){
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM services WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
            
            foreach($row as $key => $value) { 
                    $service[$key] = $value;
                }
            
            return $service;
        }
    }
    
}
