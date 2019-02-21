<?php namespace Nathan\Contact\Models;

use October\Rain\Database\Model;

/**
 * Settings Model
 */
class Settings extends Model
{
    /**
     * Behaviours to implement
     *
     * @var array
     */
    public $implement = [
        'System.Behaviors.SettingsModel'
    ];

    /**
     * The settings code
     *
     * @var string
     */
    public $settingsCode = 'nathan_contact_settings';

    /**
     * The settings fields yaml file
     *
     * @var string
     */
    public $settingsFields = 'fields.yaml';
}