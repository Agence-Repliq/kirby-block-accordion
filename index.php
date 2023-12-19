<?php

Kirby::plugin('baptiste/kirby-block-accordion', [
    'blueprints' => [
        'blocks/accordion' => __DIR__ . '/blocks/accordion.yml',
    ],
    'snippets' => [
        'blocks/accordion' => __DIR__ . '/snippets/blocks/accordion.php',
    ],
    'translations' => [
        'fr' => require 'languages/fr.php'
    ]
]);