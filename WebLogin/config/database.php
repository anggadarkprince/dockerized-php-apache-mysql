<?php

function getDatabaseConfig(): array
{
    return [
        "database" => [
            "test" => [
                "url" => "mysql:host=db:3306;dbname=php_login_management_test",
                "username" => "root",
                "password" => "root"
            ],
            "prod" => [
                "url" => "mysql:host=db:3306;dbname=php_login_management",
                "username" => "php_login",
                "password" => "php_login1234"
            ]
        ]
    ];
}