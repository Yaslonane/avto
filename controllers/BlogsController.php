<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BlogsComtroller
 *
 * @author andrey
 */
class BlogsController {
    //put your code here
    public static $title = "AVTOZONA | Блог";
        /*
         * 
         * вывод страницы
         *
         * 
         */
    public function actionIndex($page = 1){
        
        //$inf = info::getInfo();
        
        $total = Blogs::getTotalPostsInCategory();
        
        $pagination = new Pagination($total, $page, /*Blogs::SHOW_BY_DEFAULT*/6, 'page-');
        
        $posts = Blogs::getPreviewPost($categoryId = false, $page);
        
        //$cat_list_for_post = Blogs::getCategoryByIds($posts['id']);
        //$a = Blogs::getPreviewPost();
        //var_dump($a);
        
        require_once(ROOT . TMPL . 'blogs.php');
        
        return true;
    }
    
    public function actionView($id) { //функция вывода одного товара с подробным описание по Id
        
        
        $post = Services::getServiceById($id);
        
        require_once(ROOT . TMPL . 'blog_single.php'); //вызываем файл вида страницы с товаром и передаем Id
        
        return true;
    }
        /* 
         * конец вывода
         */

}
