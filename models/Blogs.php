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
    const SHOW_BY_DEFAULT = 3;
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
        
        if($categoryId){
            
            $page = intval($page);
            $offset = ($page - 1) * self::SHOW_BY_DEFAULT;
            
            $db = Db::getConnection();
            $products = array();
            $result = $db->query('SELECT * FROM blog WHERE is_publication = 1 AND category_id = '.$categoryId.' ORDER BY id DESC LIMIT '.self::SHOW_BY_DEFAULT.' OFFSET '.$offset);
            
            $i = 0;
            while ($row = $result->fetch()){ //перебираем массив полученный из бд и формируем массив для вывода на страницу сайта
                foreach($row as $key => $value) { 
                    $products[$i][$key] = $value;
                }
                $i++;
            }
            
            return $products;
        }
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
    
    public static function getTotalPostsInCategory($categoryId){
        $db = Db::getConnection();
        
        $result = $db->query('SELECT count(id) AS count FROM blog WHERE is_publication = 1 AND category_id="'.$categoryId.'"');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();
        
        return $row['count'];
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