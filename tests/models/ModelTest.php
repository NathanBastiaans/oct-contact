<?php namespace Nathan\Contact\Tests\Models;

use \Nathan\Contact\Models\Message;
use PluginTestCase;
use Illuminate\Database\Eloquent\Factory;

class ModelTest extends PluginTestCase
{

    public function setUp()
    {
        parent::setUp();

        // Load all factories
        $this->app->make(Factory::class)->load('plugins/nathan/contact/database/factories');
    }

    /** @test */
    public function itShouldCreateMessages()
    {
        // Given we create a message
        $post = factory(Message::class)->create();

        // Assert the message was created
        $this->assertEquals(1, $post->id);
    }
}