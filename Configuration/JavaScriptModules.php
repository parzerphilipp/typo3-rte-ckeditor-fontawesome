<?php
return [
    'dependencies' => [
        'backend'
    ],
    'tags' => [
        'backend.form',
    ],
    'imports' => [
        '@dirkpersky/typo3-rte-ckeditor-fontawesome/plugin.js' => 'EXT:rte_ckeditor_fontawesome/Resources/Public/JavaScript/Plugins/ckeditor_fa6/plugin.js',
        '@dirkpersky/typo3-rte-ckeditor-fontawesome5/plugin.js' => 'EXT:rte_ckeditor_fontawesome/Resources/Public/JavaScript/Plugins/ckeditor_fa5/plugin.js',
    ],
];