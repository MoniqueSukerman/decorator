<?php

require 'vendor/autoload.php';

use Decorator\NotificadorBasico;
use Decorator\NotificadorSlack;
use Decorator\NotificadorSMS;


$notificador = new NotificadorBasico('Aleta!');
$notificadorSlack = new NotificadorSlack($notificador);
$notificadorSlack = new NotificadorSMS($notificador);
