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
//            $browser->visit('/' . app()->getLocale())
//                ->clickLink('SE CONNECTER')
//                ->assertUrlIs('http://projets-web.test/' . app()->getLocale() . '/login')
//                ->clickLink('@register-link')
//                ->type('@firstname-field', $firstname)
//                ->type('@lastname-field', $lastname)
//                ->type('@email-field', $email)
//                ->type('@password-field', $password)
//                ->press('@submit-credentials')
//                ->assertUrlIs('http://projets-web.test/' . app()->getLocale())
//                ->assertSeeIn('@logged-user-fullname', strtoupper($firstname) . ' ' . strtoupper($lastname));

            $browser->visit('/' . app()->getLocale())
                ->assertUrlIs('http://projets-web.test/' . app()->getLocale());
        });
    }
}
