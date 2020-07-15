<?php

/**
 *
 * @package    SampleModule
 * @subpackage Module
 * @license    New BSD License
 */

namespace SampleModule;


use Gems\Modules\ModuleSettingsAbstract;

/**
 *
 * @package    SampleModule
 * @subpackage Module
 * @since      New BSD License
 */
class ModuleSettings extends ModuleSettingsAbstract
{
    /**
     * @var string
     */
    public static $moduleName = 'SampleModule';

    /**
     * @var string
     */
    public static $eventSubscriber = ModuleSubscriber::class;
}
