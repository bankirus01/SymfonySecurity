<?php


namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Validator\Constraints\DateTime;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
        $login = $crawler->selectButton('login')->form();
        $login['_username'] = 'admin';
        $login['_password'] = 'admin';
        $client->submit($login);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());


    }

    public function testCreate()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');
        $login = $crawler->selectButton('login')->form();
        $login['_username'] = 'admin';
        $login['_password'] = 'admin';
        $client->submit($login);

        $crawler = $client->followRedirect();

        $url = $crawler->selectLink('Create new record')->link();
        $crawler = $client->click($url);

        $form = $crawler->selectButton('article[save]')->form();
        $form['article[name]'] = 'AutoCreated';
        $form['article[description]'] = 'AutoCreated';
        $client->submit($form);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
        $login = $crawler->selectButton('login')->form();
        $login['_username'] = 'admin';
        $login['_password'] = 'admin';
        $client->submit($login);

        $crawler = $client->followRedirect();
//        var_dump($crawler);
//        exit;
        $url = $crawler->selectLink('Delete')->link();
        $client->click($url);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }

    public function testEdit()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/login');
        $login = $crawler->selectButton('login')->form();
        $login['_username'] = 'admin';
        $login['_password'] = 'admin';
        $client->submit($login);

        $crawler = $client->followRedirect();

        $url = $crawler->selectLink('Edit')->link();
        $crawler = $client->click($url);

        $form = $crawler->selectButton('article[save]')->form();
        $form['article[name]'] = 'AutoEdited';
        $form['article[description]'] = 'AutoEdited';
        $client->submit($form);

        $this->assertEquals(302, $client->getResponse()->getStatusCode());
    }
}