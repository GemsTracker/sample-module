# Sample module for GemsTracker

This sample module is an example of a module you can add to your composer and register in your projects escort.

## Intallation
1. Add to composer.json of project, including adding the repository
2. composer update
3. Register your module in your Projects Escort by adding the following static property:
```PHP
    public static $modules = [
        'SampleModule' => \SampleModule\ModuleSettings::class,
    ];
```
4. Your Project should now have a menu Item "Sample Module Test", which is added from this Module and refers to the controller in controller/ModuleTestController


## New Modules
- Copy src/ModuleSettings.php to your new module.
- Change the namespace and the property 'moduleName' in ModuleSettings.
- Copy src/ModuleSubscriber.php to your module.
- ModuleSubscriber has some examples of different Events and can be used