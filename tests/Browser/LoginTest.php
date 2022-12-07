<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testItIsPossibleToLoginForARegisteredUser()
    {
        $email = 'toto@titi.com';
        $password = 'totoisthebest';
        $toto = User::create([
            'firstname' => 'Toto',
            'lastname' => 'Titi',
            'fullname' => 'Toto Titi',
            'slug' => 'toto-titi',
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        $this->browse(function (Browser $browser) use ($toto, $email, $password) {
            $browser->visit('/')
                ->clickLink('Login')
                ->assertSee('LOGIN')
                ->assertUrlIs('http://projets-web.test/en/login')
                ->type('@email-field', $email)
                ->type('@password-field', $password)
                ->click('@submit-credentials')
                ->assertUrlIs('http://projets-web.test/')
                ->assertSeeIn('@logged-user-fullname', strtoupper($toto->fullname));
        });
    }
}
