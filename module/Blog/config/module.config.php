<?php
return array(
    'db' => array(
		'driver'         => 'Pdo',
		'username'       => 'root',  //edit this
		'password'       => 'password',  //edit this
		'dsn'            => 'mysql:dbname=zend;host=localhost',
		'driver_options' => array(
			\PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
		)
	),
    'service_manager' => array(
        'factories' => array(
			'Blog\Mapper\PostMapperInterface'   => 'Blog\Factory\ZendDbSqlMapperFactory',
			'Blog\Service\PostServiceInterface' => 'Blog\Service\PostServiceFactory',
			'Zend\Db\Adapter\Adapter'           => 'Zend\Db\Adapter\AdapterServiceFactory'
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    'controllers' => array(
        'factories' => array(
            'Blog\Controller\List' => 'Blog\Factory\ListControllerFactory'
        ),
    ),
    'router' => array(
        // Open configuration for all possible routes
        'routes' => array(
            // Define a new route called "post"
            'post' => array(
               'type' => 'literal',
                // Configure the route itself
                'options' => array(
                    // Listen to "/blog" as uri
                    'route'    => '/blog',
                         'defaults' => array(
                        'controller' => 'Blog\Controller\List',
                        'action'     => 'index',
                    )
                )
            )
        )
    )
);