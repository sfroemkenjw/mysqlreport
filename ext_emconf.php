<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'MySQL Report',
    'description' => 'Analyze and profile your TYPO3 database queries',
    'category' => 'module',
    'author' => 'Stefan Froemken',
    'author_email' => 'froemken@gmail.com',
    'state' => 'stable',
    'author_company' => '',
    'version' => '3.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.23-12.5.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
