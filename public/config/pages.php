<?php
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
        'title' => 'Админ. раздел',
        'path' => '/admin',
        'blade' => 'admin',
    ]
];
