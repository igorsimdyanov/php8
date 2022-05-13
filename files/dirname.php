<?php
echo dirname('usr/opt/local/etc/hosts');     // /usr/opt/local/etc/
echo dirname('/usr/opt/local/etc/hosts', 2); // /usr/opt/local
echo dirname('/usr/opt/local/etc/hosts', 3); // /usr/opt
