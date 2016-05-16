<?php

namespace AppBundle\Service\Rabbitmq;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
use Monolog\Logger;

class Consumer implements ConsumerInterface
{
    /** @var Logger */
   private $logger;

   public function __construct( $logger )
   {
      $this->logger = $logger;
      echo "Consumer is listening!" . PHP_EOL;
   }

   public function execute(AMQPMessage $msg)
   {
      $message = unserialize($msg->body);
      $taskid = $message['taskid'];

      echo "Processing task number: " .  $taskid . PHP_EOL;
      // Processing

      return true;
   }
}