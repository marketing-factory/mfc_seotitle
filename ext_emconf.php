<?php

$EM_CONF['mfc_seotitle'] = [
    'title' => 'SEO-Title',
    'description' => 'Build another title as displayed in BE if you want',
    'category' => 'Marketing Factory',
    'version' => '2.0.0',
    'state' => 'stable',
    'modify_tables' => 'pages,pages_language_overlay',
    'author' => 'Simon Schmidt',
    'author_email' => 'sfs@marketing-factory.de',
    'author_company' => 'Marketing Factory Consulting GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
