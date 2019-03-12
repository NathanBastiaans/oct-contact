<?php
/**
 * The contact form component file
 *
 * @package    Nathan.Contact
 * @license    https://choosealicense.com/licenses/mit/ MIT License
 * @author     Nathan Bastiaans <contact@nathanbastiaans.nl>
 */
namespace Nathan\Contact\Components;

use Backend\Helpers\Backend;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Mail;
use Nathan\Contact\Models\Message;
use Nathan\Contact\Models\Settings;
use October\Rain\Support\Facades\Flash;

/**
 * The contact form component
 *
 * @package    Nathan.Contact
 * @license    https://choosealicense.com/licenses/mit/ MIT License
 * @author     Nathan Bastiaans <contact@nathanbastiaans.nl>
 */
class ContactForm extends ComponentBase
{
    /**
     * Register the component details
     *
     * @return array
     */
    public function componentDetails()
    {
        return [
            'name'        => 'nathan.contact::lang.components.contactForm.name',
            'description' => 'nathan.contact::lang.components.contactForm.description'
        ];
    }

    /**
     * This fires on the pageload
     *
     * @return void
     */
    public function onRun()
    {
        // Include the main JS file
        $this->addJs(['assets/js/main.js']);
    }

    /**
     * AJAX handler for contact form submits
     */
    public function onContactSubmit()
    {
        // Validation is also handled in the front-end
        $message = new Message();
        $message->fill(post());
        $message->save();

        if (Settings::get('should_send_contact_email')) {
            $data = [
                'message' => $message,
                'url'     => Backend::url('nathan/messages/messages/update/' . $message->id),
            ];

            Mail::send('nathan.contact::views.mail.message_sent', $data, function ($mail) {
                $mail->to(Settings::get('contact_email'));
            });
        }

        Flash::success(trans('nathan.contact::lang.components.contactForm.message_sent_successfully'));
    }
}