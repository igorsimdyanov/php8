<?php
$text = <<<html
          <script language="JavaScript">
          alert("Приветик!");
          </script>
        html;

echo htmlspecialchars($text);
