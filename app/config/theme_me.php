<?php
return [

  'views' => [
    [
      'region'   => 'header',
      'template' => 'me/header',
      'data'     => [
        'siteTitle' => "Andreas sida i PHPMVC",
        'siteTagline' => "Kurs i PHP-baserade och MVC-inspirerade ramverk",
      ],
      'sort'     => -1
    ],

    [
      'region' => 'footer',
      'template' => 'me/footer',
      'data' => [],
      'sort' => -1
    ],

    [
      'region' => 'navbar',
      'template' => [
        'callback' => function() {
          return $this->di->navbar->create();
        },
      ],
      'data' => [],
      'sort' => -1
    ],
  ],

];