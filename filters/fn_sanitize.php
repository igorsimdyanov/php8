<?php
$str = <<<HTML
<h1>Заголовок</h1>
<p>Первый параграф, посвященный "проверке"</p>
HTML;

echo '<pre>';
echo filter_var(
    $str,
    FILTER_CALLBACK,
    [
        'options' => fn ($value) => strip_tags($value)
    ]
);
echo '</pre>';
