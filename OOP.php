<?php

//нужные свойства записываются в класс
//public - модификатор доступа.
class Article
{
    public $title = 'Новая статья';
    public $titleFontSize = 20;
}
//чтобы создать объект класса, надо создать переменную и присвоить через ключевое
// слово new класс c ().
$sportNews = new Article();