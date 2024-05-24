<?php

namespace Decorator;

use Decorator\Notificador;


abstract class NotificadorDecorator implements Notificador
{
    protected Notificador $objetoEnvolvido;

    /**
     * @param \Decorator\Notificador $objetoEnvolvido
     */
    public function __construct(\Decorator\Notificador $objetoEnvolvido)
    {
        $this->objetoEnvolvido = $objetoEnvolvido;
    }

    /**
     * @return void
     * Delega suas operações para o alvo (objeto envolvido)
     */
    public function enviar()
    {
        $this->objetoEnvolvido->enviar();
    }
}