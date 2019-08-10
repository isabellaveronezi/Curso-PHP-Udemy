<?php

$json = '[{"nome":"Jo\u00e3o","idade":28},{"nome":"Isabella","idade":23}]'; 

$data = json_decode($json, true);

var_dump($data);

?> 