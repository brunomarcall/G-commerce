<?php
namespace app;

/**
 * Configurações do banco
 */
class Config {
    const BASE_DIR = '/G-Commerce';

    const DB_DRIVER = 'pgsql';
    const DB_HOST = 'ec2-18-235-20-228.compute-1.amazonaws.com';
    const DB_DATABASE = 'd12ond4asu7e22';
    const DB_USER = 'xdfdieftdsaxbp';
    const DB_PASS = 'acef3c9771cf61c944209534fe6ac97d5899fe515b59676d2db507deff923d0e';

    // const DB_DRIVER = 'mysql';
    // const DB_HOST = 'localhost';
    // const DB_DATABASE = 'gcommerce';
    // const DB_USER = 'root';
    // const DB_PASS = '';

    const ERROR_CONTROLLER = 'ErrorController';
    const DEFAULT_ACTION = 'index';
}