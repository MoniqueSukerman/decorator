<?php

namespace Decorator;

use Decorator\Notificador;
use Decorator\NotificadorDecorator;

/**
 * Objeto alvo, onde as ações serão executadas
 */
class NotificadorSlack extends NotificadorDecorator implements Notificador
{
    public function enviar()
    {
        echo 'envia notificação pelo slack';
    }
}