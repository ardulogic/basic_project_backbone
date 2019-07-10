<?php
// Uzkraunam visus reikalingus failus
require 'config.php';
require 'functions/file.php';
require 'functions/html/builder.php';
require 'functions/form/core.php';

$form = [
    'attr' => [
        //'action' => '', Neb8tina, jeigu action yra ''
        'method' => 'POST',
    ],
    'fields' => [
        'team_name' => [
            'label' => 'New Team Name:',
            'type' => 'text',
            'extra' => [
                'attr' => [
                    'class' => 'team-name',
                    'placeholder' => 'Team name'
                ],
                'validators' => []
            ],
        ],
        'team_select' => [
            'type' => 'select',
            'value' => 0,
            'options' => [
                'Komanda 1',
                'Komanda 2',
                'Komanda 3'
            ],
            'extra' => [
                'attr' => [
                    'class' => 'team-name',
                ],
                'validators' => []
            ]
        ]
    ],
    'buttons' => [
        'create' => [
            'title' => 'Create',
            'extra' => [
                'attr' => [
                    'class' => 'create-btn'
                ]
            ]
        ],
        'delete' => [
            'title' => 'Delete',
            'extra' => [
                'attr' => [
                    'class' => 'delete-btn'
                ]
            ]
        ]
    ]
];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Team</title>
        <link rel="stylesheet" href="media/css/normalize.css">
        <link rel="stylesheet" href="media/css/style.css">
    </head>
    <body>
        <!-- $form HTML generator -->
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>
