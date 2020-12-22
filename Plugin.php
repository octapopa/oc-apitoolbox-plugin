<?php namespace PlanetaDelEste\ApiToolbox;

use PlanetaDelEste\ApiToolbox\Classes\Console\CreateApiController;
use PlanetaDelEste\ApiToolbox\Classes\Console\CreateApiResourceIndex;
use PlanetaDelEste\ApiToolbox\Classes\Console\CreateApiResourceItem;
use PlanetaDelEste\ApiToolbox\Classes\Console\CreateApiResourceList;
use PlanetaDelEste\ApiToolbox\Classes\Console\CreateApiResources;
use PlanetaDelEste\ApiToolbox\Classes\Console\CreateApiResourceShow;
use System\Classes\PluginBase;

/**
 * Class Plugin
 *
 * @package PlanetaDelEste\ApiToolbox
 */
class Plugin extends PluginBase
{
    const EVENT_SHOWRESOURCE_DATA = 'planetadeleste.apiToolbox.showResourceData';
    const EVENT_ITEMRESOURCE_DATA = 'planetadeleste.apiToolbox.itemResourceData';
    const EVENT_API_EXTEND_INDEX = 'planetadeleste.apiToolbox.apiExtendIndex';
    const EVENT_API_EXTEND_LIST = 'planetadeleste.apiToolbox.apiExtendList';
    const EVENT_API_EXTEND_SHOW = 'planetadeleste.apiToolbox.apiExtendShow';
    const EVENT_API_BEFORE_SHOW_COLLECT = 'planetadeleste.apiToolbox.apiBeforeShowCollect';
    const EVENT_API_EXTEND_STORE = 'planetadeleste.apiToolbox.apiExtendStore';
    const EVENT_API_EXTEND_UPDATE = 'planetadeleste.apiToolbox.apiExtendUpdate';
    const EVENT_API_EXTEND_DESTROY = 'planetadeleste.apiToolbox.apiExtendDestroy';
    const EVENT_API_PERMISSIONS = 'planetadeleste.apiToolbox.apiPermissions';
    const EVENT_API_ADD_COLLECTION = 'planetadeleste.apiToolbox.apiAddCollection';

    public $require = ['Lovata.Toolbox', 'Lovata.Buddies'];

    public function register()
    {
        $this->registerConsoleCommand('toolbox:create.api.controller', CreateApiController::class);
        $this->registerConsoleCommand('toolbox:create.api.resources', CreateApiResources::class);
        $this->registerConsoleCommand('toolbox:create.api.resourceindex', CreateApiResourceIndex::class);
        $this->registerConsoleCommand('toolbox:create.api.resourcelist', CreateApiResourceList::class);
        $this->registerConsoleCommand('toolbox:create.api.resourceitem', CreateApiResourceItem::class);
        $this->registerConsoleCommand('toolbox:create.api.resourceshow', CreateApiResourceShow::class);
    }
}
