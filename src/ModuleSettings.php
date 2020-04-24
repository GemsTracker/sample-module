<?php


namespace SampleModule;


use Gems\Modules\ModuleSettingsAbstract;

class ModuleSettings extends ModuleSettingsAbstract
{
    public static $moduleName = 'SampleModule';

    public static $eventSubscriber = ModuleSubscriber::class;
}
