<?php

require_once ('../pchssp/270293/Use.php');

echo R::gg('*!DOCTYPE html|');
echo R::gg('html|l¬en',[
    R::gg('head|',[
        R::gg('*meta|ch¬UTF-8'),
        R::gg('*meta|n¬viewport°co¬width=device-width, initial-scale=1.0'),
        R::gg('*meta|he¬X-UA-Compatible°co¬ie=edge'),
        R::gg('title|',"Piezas4WebSites")
    ]),
    R::gg('body|',[
        R::gg('h1|',"Template 02"),
        R::gg('my-element|i¬dinamico')
        R::gg('script|',[
            Pjsp::dcmet('my-element'),
            Pjsp::innh('dinamico',R::gg('p|',"creando un custom-tag"))
        ])
    ])
]);
