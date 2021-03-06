<?php


namespace Framework\Core;


class ConfigExample
{
    private function __construct()
    {
    }

    const DB_HOST = "127.0.0.1";
    const DB_NAME = "blog";
    const DB_USER = "root";
    const DB_PASS = "";

    const APP_ROOT = "";
    const PUBLIC = self::APP_ROOT . "/public/";
    const DEFAULT_CONTROLLER = "home";
    const DEFAULT_ACTION = "index";
    const CONTROLLER_SUFFIX = "Controller";
    const MODEL_SUFFIX = "Model";
    const CONTROLLERS_NAMESPACE = "Blog\\Controllers\\";
    const MODELS_NAMESPACE = "Blog\\Models\\";

    const SHARED_VIEWS_PATH = "_layout/";
    const VIEWS_PATH = "Blog/views/";

    const USER_ID = "userId";
    const USER_ADMIN = "isAdmin";
    const SESSION_MESSAGES_KEY = "___MESSAGES___";

    const POSTS_PER_PAGE = 5;
}