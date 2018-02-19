<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $url = $crawler->selectLink('Register')->link();
        $crawler = $client->click($url);

        $form = $crawler->selectButton('register')->form();
        $form['user[username]'] = 'AutoTest';
        $form['user[email]'] = 'test@test.com';
        $form['user[plainPassword][first]'] = 'test111test';
        $form['user[plainPassword][second]'] = 'test111test';

        $client->submit($form);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testLogin()
    {
        //correct password
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $login = $crawler->selectButton('login')->form();
        $login['_username'] = 'AutoTest';
        $login['_password'] = 'test111test';
        $client->submit($login);
        $client->followRedirect();

        $this->assertContains('Table #1', $client->getResponse()->getContent());

        //incorrect password
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');

        $login = $crawler->selectButton('login')->form();
        $login['_username'] = 'AutoTest';
        $login['_password'] = 'incorrect_password';
        $client->submit($login);
        $client->followRedirect();

        $this->assertContains('Invalid username or password', $client->getResponse()->getContent());
    }
}