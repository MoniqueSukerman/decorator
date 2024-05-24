<?php

namespace Decorator;

use Decorator\Notificador;

/**
 * Componente concreto
 * Pode ter o comportamento alterado pelos decorators
 * Pode ter muitas variações
 */
class NotificadorBasico implements Notificador
{
    protected string $conteudo;

    /**
     * @param string $conteudo
     */
    public function __construct(string $conteudo)
    {
        $this->conteudo = $conteudo;
    }


    public function enviar(): void
    {
        echo 'enviando notificação básico';
    }

}