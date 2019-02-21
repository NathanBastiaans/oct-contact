<?php namespace Nathan\Contact;

use Backend;
use Nathan\Contact\Components\ContactForm;
use Nathan\Contact\Models\Settings;
use System\Classes\PluginBase;

/**
 * Contact Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'nathan.contact::lang.plugin.name',
            'description' => 'nathan.contact::lang.plugin.description',
            'author'      => 'Nathan Bastiaans',
            'icon'        => 'icon-envelope'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            ContactForm::class => 'contactForm',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return [
            'nathan.contact.manage' => [
                'tab'   => 'nathan.contact::lang.plugin.permissions.tab',
                'label' => 'nathan.contact::lang.plugin.permissions.manage'
            ],
            'nathan.contact.view' => [
                'tab'   => 'nathan.contact::lang.plugin.permissions.tab',
                'label' => 'nathan.contact::lang.plugin.permissions.view'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'contact' => [
                'label'       => 'nathan.contact::lang.plugin.navigation.contact.label',
                'url'         => Backend::url('nathan/contact/messages'),
                'icon'        => 'icon-envelope',
                'permissions' => ['nathan.contact.view'],
                'order'       => 500,
            ],
        ];
    }

    /**
     * Register any back-end settings
     *
     * @return array
     */
    public function registerSettings()
    {
        return [
            'contact' => [
                'label'       => 'nathan.contact::lang.plugin.navigation.settings.label',
                'description' => 'nathan.contact::lang.plugin.navigation.settings.description',
                'category'    => trans('nathan.contact::lang.plugin.navigation.settings.category'),
                'icon'        => 'icon-envelope',
                'class'       => Settings::class,
                'order'       => 500,
                'permissions' => ['nathan.contact.manage']
            ]
        ];
    }

    /**
     * Register e-mail templates
     *
     * @return array
     */
    public function registerMailTemplates()
    {
        return [
            'nathan.contact::mail.message_sent',
        ];
    }
}