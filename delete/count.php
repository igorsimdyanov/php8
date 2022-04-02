<?php
  function handle_records(iterable $iterable)
  {
      echo count($iterable);
  }
  echo handle_records(1);
