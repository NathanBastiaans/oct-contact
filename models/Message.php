<?php

namespace Nathan\Contact\Models;

use October\Rain\Database\Model;
use October\Rain\Database\Traits\Validation;

/**
 * Message Model
 */
class Message extends Model
{

    /**
     * Use the validation trait
     */
    use Validation;

    /**
     * Validation rules
     *
     * @var array
     */
    public $rules = [
        'name'          => 'required|max:255',
        'email_address' => 'required|sometimes|email|max:255',
        'phone_number'  => 'required|sometimes|max:255',
        'comment'       => 'required|sometimes'
    ];

    /**
     * Custom attribute names for validation messages
     *
     * @var array
     */
    public $attributeNames = [
        'name'          => 'nathan.contact::lang.models.message.name.label',
        'email_address' => 'nathan.contact::lang.models.message.email_address.label',
        'phone_number'  => 'nathan.contact::lang.models.message.phone_number.label',
        'comment'       => 'nathan.contact::lang.models.message.comment.label',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = 'nathan_contact_messages';

    /**
     * Guarded fields
     *
     * @var array
     */
    protected $guarded = ['*'];

    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email_address',
        'phone_number',
        'comment'
    ];

    /**
     * All date columns
     *
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];

}