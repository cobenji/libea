<?php

namespace App\Controller;

use Cake\Core\Configure;
use App\Form\ContactForm;



class ContactsController extends AppController
{


    public function index(){

        $contact = new ContactForm();
        if ($this->request->is('post')) {
            //if ($contact->execute($this->request->getData())) {
            if ($contact->execute($this->request->getData())) {
                //var_dump($this->request->getData());
                $this->Flash->success('Nous reviendrons vers vous rapidement.');
            } else {
                $this->Flash->error('Il y a eu un problème lors de la soumission de votre formulaire.');
            }
        }
        $this->set('contact', $contact);

    }

}
