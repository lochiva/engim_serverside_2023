<?php

// prepare variables 

$title= 'Small Business - Start Bootstrap Template';
$description = "This is the home page";
$img = 'https://dummyimage.com/900x400/dee2e6/6c757d.jpg';
$tagline_title = 'Start Bootstrap Template';
$tagline_text= 'This is a template that is great for small businesses. It doesn\'t have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!';
$tagline_link = '#!';
$tagline_hotword= ' Call to Action!';
$copyright = 'Copyright &copy; Your Website 2022';

// define menù items
$menus = [
     'navbar-title'=>
        ['hotword'=>'Start bootstrap', 'link'=>'#!', 'active'=>''],   
    'navbar-items'=>[
        ['hotword'=>'home', 'link'=>'#!', 'active'=>'active'],
        ['hotword'=>'about', 'link'=>'#!', 'active'=>''],
        ['hotword'=>'contact', 'link'=>'#!', 'active'=>''],
        ['hotword'=>'services', 'link'=>'#!', 'active'=>''],
    ]
];


// define card content
$cards = [
    ['title'=>'Card One',
    'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.',
    'link'=>'#!',
    'hotword'=>'more info'
],
    ['title'=>'Card Two',
    'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.',
    'link'=>'#!',
    'hotword'=>'more info'
    ],
    ['title'=>'Card Three',
    'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.',
    'link'=>'#!',
    'hotword'=>'more info'
       
    ]
];
// include index_tpl.php file
include "index_tpl.php";