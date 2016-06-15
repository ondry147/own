<?php

namespace Core;

class Config
{
    const DB_HOST = "localhost";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_NAME = "grand2"; // Database name of script, not account
    const SITE_TITLE = "World of Definition"; // todo: get from DB

    const DB_ACCOUNT = "account";
    const DB_PLAYER = "player";

    //Auth
    const AUTH_MIN_LENGTH = 4;
    const AUTH_MAX_LENGTH = 12;
    //Auth
}