<?php

namespace Decorator;

use Decorator\Notificador;
use Decorator\NotificadorDecorator;

class NotificadorSMS extends NotificadorDecorator implements Notificador
{
    public function enviar()
    {
        echo 'envia notificação SMS';
    }
}