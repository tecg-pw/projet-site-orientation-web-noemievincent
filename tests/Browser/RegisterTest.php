<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testItIsPossibleForAGuestToRegister()
    {
        $firstname = 'Toto';
        $lastname = 'Titi';
        $email = 'toto@titi.com';
        $password = 'totoisthebest';

        $this->browse(function (Browser $browser) use ($firstname, $lastname, $email, $password) {
            $browser->visit('/')
                ->clickLink('Login')
                ->assertSee('LOGIN')
                ->assertUrlIs('http://projets-web.test/en/login')
                ->clickLink('Register')
                ->type('@firstname-field', $firstname)
                ->type('@lastname-field', $lastname)
                ->type('@email-field', $email)
                ->type('@password-field', $password)
                ->click('@submit-credentials')
                ->assertUrlIs('http://projets-web.test/')
                ->assertSeeIn('@logged-user-fullname', strtoupper($firstname) . ' ' . strtoupper($lastname));
        });
    }
}
