<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class Tikva extends Theme
{
    // Access plugin events in this class

    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized' => ['onThemeInitialized', 0],
            //'onGetPageTemplates' => ['onGetPageTemplates', 0]
        ];
    }

    public function onGetPageTemplates($event)
    {
        $types = $event->types;
        $locator = Grav::instance()['locator'];
        //$types->scanBlueprints($locator->findResource('plugin://' . $this->name . '/blueprints'));
        $types->scanTemplates($locator->findResource('themes://' . $this->name . '/templates'));
    }

    public function onThemeInitialized()
    {
        if ($this->isAdmin()) {
            //$this->active = false;
            $this->grav['debugger']->addMessage("Hello from Tikva in Admin only!");

            return;
        }

        $this->grav['debugger']->addMessage("Hello from Tikva!");

        //$this->enable([
        //    'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        //]);
    }

    public function onTwigSiteVariables()
    {
        $this->grav['assets']
            ->addCss('plugin://css/mytheme-core.css')
            ->addCss('plugin://css/mytheme-custom.css');

        $this->grav['assets']
            ->add('jquery', 101)
            ->addJs('theme://js/jquery.myscript.min.js');
    }
}
