<?php

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::MODULE, 'Rollbar_Magento2', __DIR__);

// $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
// $deploymentConfig = $this->objectManager->get(\Magento\Framework\App\DeploymentConfig::class); 
// $rollbarConfig = $this->deploymentConfig->get('rollbar/access_token');

// var_dump($rollbarConfig); die();

// \Rollbar\Rollbar::init($rollbarConfig);

// \Rollbar\Rollbar::debug('This is a debug message from Magento 2');