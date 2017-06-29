<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 01.04.2016
 * Time: 18:04
 */

return array(
    
    
    
    
    
    'blogs/page-([0-9]+)' => 'blogs/index/$1',
    'blogs/category/([0-9]+)/page-([0-9]+)' => 'blogs/category/$1/$2',
    'blogs/category/([0-9]+)' => 'blogs/category/$1',
    'blogs' => 'blogs/index',
    'blog/([0-9]+)' => 'blogs/view/$1',   

    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'login' => 'User/login',
    'logout' => 'User/logout',
    
    'adminpanel/updateservices/([0-9]+)' => 'Adminpanel/updateservices/$1',
    'adminpanel/services' => 'Adminpanel/services',

    'adminpanel/posts/([0-9]+)' => 'Adminpanel/postedit/$1',
    'adminpanel/posts' => 'Adminpanel/posts',
    
    'adminpanel/category/([0-9]+)' => 'Adminpanel/categoryedit/$1',
    'adminpanel/category' => 'Adminpanel/category',
    
    'adminpanel/gallery/([0-9]+)' => 'Adminpanel/galleryedit/$1',
    'adminpanel/gallery' => 'Adminpanel/gallery',
    
    'adminpanel/users/([0-9]+)' => 'Adminpanel/usersedit/$1',
    'adminpanel/users' => 'Adminpanel/users',
    //'adminpanel/cabinet/([0-9]+)' => 'AdminPanel/cabinet/$1',
    
    'adminpanel' => 'Adminpanel/index',
    'services/([0-9]+)' => 'services/view/$1',
    
    'services' => 'services/index',  
    'gallery' => 'gallery/index',
    'feedback' => 'feedback/index',
    'about' => 'site/about',
    '' => 'site/index',

    /*'printers/([0-9]+)' => 'printers/view/$1',
    'printers/edit/([0-9]+)' => 'printers/edit/$1',
    'cartriges' => 'cartriges/index',
    

    'product/([0-9]+)' => 'product/view/$1',
    'catalog' => 'catalog/index',
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    'category/([0-9]+)' => 'catalog/category/$1',
    'cart/add/([0-9]+)' => 'cart/add/$1',
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1',
    'cart' => 'cart/index',
    'user/register' => 'user/register',
    'user/login' => 'user/login',
    'user/logout' => 'user/logout',
    'cabinet/edit' => 'cabinet/edit',
    'cabinet' => 'cabinet/index',
    'contacts' => 'site/contact',

    'news/([0-9]*)' => 'news/view',
    'news' => 'news/index',
    'articles' => 'articles/list',
    'news/archive' => 'news/archive',

     * 'news/([0-9]+)' => 'news/view/$1',
    'news' => 'news/index',     */
);