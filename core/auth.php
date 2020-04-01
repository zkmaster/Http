<?php

function Auth() {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo '禁止执行访问';
    exit;
}

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    Auth();
}
