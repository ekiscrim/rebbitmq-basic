rabbitmq-basic
=============

Very simple example of application of [RabbitMqBundle](https://github.com/videlalvaro/RabbitMqBundle).

Do not forget to install [RabbitMQ](https://www.rabbitmq.com/install-debian.html).

To run the consumer:
```bash
$ php app/console rabbitmq:consumer task_name
```

To produce the task for your consumer:
````
Open in your browser the project with a route /produce
e.g.: http://rabbitmq-basic/app_dev.php/produce
````