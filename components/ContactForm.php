<?php namespace Nathan\Contact\Components;

use Backend\Helpers\Backend;
use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Mail;
use Nathan\Contact\Models\Message;
use Nathan\Contact\Models\Settings;
use October\Rain\Support\Facades\Flash;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'nathan.contact::lang.components.contactForm.name',
            'description' => 'nathan.contact::lang.components.contactForm.description'
        ];
    }

    public function onContactSubmit()
    {
        // Validation handled in the front-end
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