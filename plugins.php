<?php
return function ($context, $inject) {
    $db = $this->config["database"];
    $inject("db", new \R\DB\Schema($db["database"], $db["hostname"], $db["username"], $db["password"], $db["charset"], $db["port"]));
};
