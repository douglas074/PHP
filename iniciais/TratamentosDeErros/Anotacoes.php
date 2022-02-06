<?php

    /**
     * Para teste de depuração no PHP usar var_dump ou print_r (debug_backtrace()).
     * Para tratar um erro deve-se usar try e catch, juntamente do tipo de erro que
     * será gerado e a solução desejada, atrelar ao catch também uma váriavel que armazenará
     * o tipo de erro, sendo possível a partir de comando expecificos como
     * $variavel->getmessage ter acesso a expecificações dos erros.
     *
     * Podemos usar dentro do catch verificações genéricas de erros como
     * Throwable (a mais genérica), Exceptions e Error, mas geralmente
     * não é usado pois pode dificultar o encontrar de erros inesperados ou dificultar o tratamento de erros.
    **/
