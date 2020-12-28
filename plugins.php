<?php
return function ($context, $inject) {
    $db = $this->config["database"];
    $rdb = new \R\DB\Schema($db["database"], $db["hostname"], $db["username"], $db["password"], $db["charset"] ?? "utf8mb4", $db["port"] ?? 3306);
    $inject("db", $rdb);
};
