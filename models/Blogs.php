<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 07.04.16
 * Time: 15:14
 */

class Blogs{

    /*
     * Return single news item with specified id
     * @param integer $id
     */
    const SHOW_BY_DEFAULT = 6;
    /*
     * возвращаем массив продуктов
     */
    public static function getLatestPosts($count = self::SHOW_BY_DEFAULT){
        
        $count = intval($count);
        
        $db = Db::getConnection();
        
        $postsList = array();
        
        $result = $db->query('SELECT * FROM blog WHERE is_publication = "1" ORDER BY id DESC LIMIT '.$count);
        
        $i = 0;
        while ($row = $result->fetch()){ //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
            foreach($row as $key => $value) { 
                $postsList[$i][$key] = $value;
            }
            $i++;
        }
        
        return $postsList; //возвращаем массив категорий
    }
    
    public static function getPostsListByCategory($categoryId = false, $page =1){
        
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            
            $db = Db::getConnection();
            $products = array();
            $sql = "SELECT * FROM blog WHERE is_publication = 1";
            
            if($categoryId) $sql .= " AND category_id=".$categoryId . "";
            
            $sql .= " ORDER BY id DESC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET ".$offset;
            
            $result = $db->query($sql);
            
            $i = 0;
            while ($row = $result->fetch()){ //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
                foreach($row as $key => $value) { 
                    $products[$i][$key] = $value;
                }
                $i++;
            }
            
            return $products;
            
    }
    
    public static function getPostById($id){
        
        $id = intval($id);
        
        if($id){
            $db = Db::getConnection();
            
            $result = $db->query('SELECT * FROM blog WHERE id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $row = $result->fetch();
            
            foreach($row as $key => $value) { 
                    $post[$key] = $value;
                }
            
            return $post;
        }
    }
    
    public static function getTotalPostsInCategory($categoryId = false){
        $db = Db::getConnection();
        
        $sql = "SELECT count(id) AS count FROM blog WHERE is_publication = 1";
        
        if($categoryId) $sql .= " AND category_id=".$categoryId . "";
        
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        
        return $row['count'];
    }
    
    public static function changeDate($date){
        
        $translate = array(
            "am" => "дп",
            "pm" => "пп",
            "AM" => "ДП",
            "PM" => "ПП",
            "Monday" => "Понедельник",
            "Mon" => "Пн",
            "Tuesday" => "Вторник",
            "Tue" => "Вт",
            "Wednesday" => "Среда",
            "Wed" => "Ср",
            "Thursday" => "Четверг",
            "Thu" => "Чт",
            "Friday" => "Пятница",
            "Fri" => "Пт",
            "Saturday" => "Суббота",
            "Sat" => "Сб",
            "Sunday" => "Воскресенье",
            "Sun" => "Вс",
            "January" => "Января",
            "Jan" => "Янв",
            "February" => "Февраля",
            "Feb" => "Фев",
            "March" => "Марта",
            "Mar" => "Мар",
            "April" => "Апреля",
            "Apr" => "Апр",
            "May" => "Мая",
            "May" => "Мая",
            "June" => "Июня",
            "Jun" => "Июн",
            "July" => "Июля",
            "Jul" => "Июл",
            "August" => "Августа",
            "Aug" => "Авг",
            "September" => "Сентября",
            "Sep" => "Сен",
            "October" => "Октября",
            "Oct" => "Окт",
            "November" => "Ноября",
            "Nov" => "Ноя",
            "December" => "Декабря",
            "Dec" => "Дек",
            "st" => "ое",
            "nd" => "ое",
            "rd" => "е",
            "th" => "ое"
        );
        
        
        return strtr($date, $translate);
    }
    
    public static function getCategoryByIds($id_post){
        
        $id = intval($id_post);
        
        $db = Db::getConnection();
        
        $sql = "SELECT post_is_category.id_category, category.name
                FROM post_is_category
                LEFT JOIN category
                ON post_is_category.id_category = category.id
                WHERE post_is_category.id_post = ".$id ;
        
        $result = $db->query($sql);
        $categoryList = false;
        
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $i = 0;
                while ($row = $result->fetch()){
                    foreach($row as $key => $value) { 
                                $categoryList[$i][$key] = $value;
                            }
                    $i++;
                }

            return $categoryList;
        
    }
    
    public static function getPreviewPost($categoryId = false, $page =1){
        
        $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            
            $db = Db::getConnection();
            $posts = array();
            $sql = "SELECT * FROM blog WHERE is_publication = 1";
            
            if($categoryId) $sql .= " AND category_id=".$categoryId . "";
            
            $sql .= " ORDER BY id DESC LIMIT ".self::SHOW_BY_DEFAULT." OFFSET ".$offset;
            
            $result = $db->query($sql);
            
            $i = 0;
            while ($row = $result->fetch()){ //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
                
                $posts[$i]['id'] = $row['id'];
                $posts[$i]['name'] = $row['name'];
                $posts[$i]['img'] = $row['img'];
                $posts[$i]['text_mini'] = $row['text_mini'];
                $posts[$i]['date'] = $row['date'];
                $posts[$i]['autor'] = $row['autor'];
                $posts[$i]['category'] = self::getCategoryByIds($row['id']);

                $i++;
            }
            
            return $posts;
    }




    /*public static function getProductsByIds($idsArray){
        
        $products = array();
        
        $db = DB::getConnection();
        
        $idsString = implode(',', $idsArray);
        
        $sql = "SELECT * FROM product WHERE status='1' AND id IN ($idsString)";
        
        $result = $db->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $i = 0;
        while($row = $result->fetch()){
            $products[$i]['id'] = $row['id'];  
            $products[$i]['code'] = $row['code'];  
            $products[$i]['name'] = $row['name'];  
            $products[$i]['price'] = $row['price']; 
            $i++;
        }
        
        return $products;
    }*/
}

?>