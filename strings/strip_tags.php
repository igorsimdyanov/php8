<?php
$str = <<<html
          <p>Параграф.</p>
          <!-- Comment -->
          Еще немного текста
       html;

echo htmlspecialchars(strip_tags($str));
echo '<br />';
echo htmlspecialchars(strip_tags($str, '<p>'));
