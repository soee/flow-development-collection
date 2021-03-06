<?php
namespace TYPO3\Eel\Helper;

/*
 * This file is part of the TYPO3.Eel package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Eel\ProtectedContextAwareInterface;
use TYPO3\Flow\Configuration\ConfigurationManager;

/**
 * Configuration helpers for Eel contexts
 */
class ConfigurationHelper implements ProtectedContextAwareInterface
{
    /**
     * @Flow\Inject
     * @var ConfigurationManager
     */
    protected $configurationManager;

    /**
     * Return the specified settings
     *
     * Examples::
     *
     *     Configuration.setting('TYPO3.Flow.core.context') == 'Production'
     *
     *     Configuration.setting('Acme.Demo.speedMode') == 'light speed'
     *
     * @param string $settingPath
     * @return mixed
     */
    public function setting($settingPath)
    {
        return $this->configurationManager->getConfiguration(ConfigurationManager::CONFIGURATION_TYPE_SETTINGS, $settingPath);
    }

    /**
     * All methods are considered safe
     *
     * @param string $methodName
     * @return boolean
     */
    public function allowsCallOfMethod($methodName)
    {
        return true;
    }
}
