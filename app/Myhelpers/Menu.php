<?php

namespace App\Myhelpers;

/**
 * Класс для управления выводом меню.
 */
class Menu
{
    /**
     * Метод возвращает меню пользователя
     *
     * @return array
     */
    public static function getUserMenu()
    {
//        return include 'config/pages.php'; // Загрузка из файла массива с меню пользователя
        return [
            'main' => [
                'title' => 'Главная', // Название пункта меню
                'path' => '/', // Ссылка на страницу, куда ведет этот пункт меню
                'blade' => 'welcome', // welcome.blade.php  - файл представления
            ],
            'about' => [
                'title' => 'О нас',
                'path' => '/about',
                'blade' => 'about',
            ],
            'contacts' => [
                'title' => 'Контакты',
                'path' => '/contacts',
                'blade' => 'contacts',
            ],
            'create' => [
                'title' => 'Создать статью',
                'path' => '/article/create',
                'blade' => 'create',
            ],
            'admin' => [
                'title' => 'Админ.раздел',
                'path' => '/admin/feedback',
                'blade' => 'admin',
            ]
        ];
    }

    /**
     * Метод получения активного пункта меню из URL
     *
     * @param string $url - данные пункта меню array['path']
     *
     * @return bool - true, если $_SERVER["REQUEST_URI"] == $url
     */
    public static function isCurrentUrl(string $url = '/'): bool
    {
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) == $url;
    }

    /**
     * Метод вывода заголовка страницы
     *
     * @param array $menu - массив с данными меню
     *
     * @return string - заголовок страницы
     */
    public static function showTitle(array $menu) {
        $title = '';
        foreach ($menu as $value) {
            if (static::isCurrentUrl($value['path'])) {
                $title = $value['title'];
            }
        }

        return $title;
    }
}
