<?php
namespace app;

/**
 * Configurações do banco
 */
class Config {
    const BASE_DIR = '/G-Commerce';

    const DB_DRIVER = 'pgsql';
    const DB_HOST = 'localhost';
    const DB_DATABASE = 'gcommerce';
    const DB_USER = 'postgres';
<<<<<<< HEAD
    const DB_PASS = '00472013';
=======
    const DB_PASS = 'cleiton rasta 4';

    // const DB_DRIVER = 'mysql';
    // const DB_HOST = 'localhost';
    // const DB_DATABASE = 'gcommerce';
    // const DB_USER = 'root';
    // const DB_PASS = '';
>>>>>>> e9f5d0b07a945118f47e1425c2725297aea3634e

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}