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
    const DB_PASS = 'cleiton rasta';

    // const DB_DRIVER = 'mysql';
    // const DB_HOST = 'localhost';
    // const DB_DATABASE = 'gcommerce';
    // const DB_USER = 'root';
    // const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}