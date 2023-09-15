<?php

namespace Rollbar\Magento2\Plugin;

class InitPlugin
{
    public function beforeLaunch(\Magento\Framework\AppInterface $subject)
    {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $deploymentConfig = $objectManager->get(\Magento\Framework\App\DeploymentConfig::class);
        $rollbarConfig = $deploymentConfig->get('rollbar');

        if($rollbarConfig) {
            \Rollbar\Rollbar::init($rollbarConfig);
        }
    }
}
