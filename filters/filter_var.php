<?php
echo filter_var('yes', FILTER_VALIDATE_BOOLEAN).'<br />';
echo filter_var('3.14', FILTER_VALIDATE_FLOAT).'<br />';
echo filter_var('https://github.com', FILTER_VALIDATE_URL);
