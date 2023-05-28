<?php
class HomeController
{
    //Chua cac phuong thuc xu ly goi
    public function index()
    {
        //Lay du lieu CAN tu service tuong ung
        $data = "Data from ArticleServeice";
        //render ra view
        include('D:\Xampp\htdocs\WorkSpacePHP\article-website\app\view\home\index.php');
    }
}