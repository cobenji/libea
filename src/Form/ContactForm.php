<?php

namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Email;

/*Email::setEmailFormat("html");*/

class ContactForm extends Form
{

    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('email', ['type' => 'string']);
    }

    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('email', 'format', [
        'rule' => 'email',
        'message' => 'Une adresse email valide est requise',
        ]);
    }

    protected function _execute(array $data)
    {
        // Envoie un email.

        $email = new Email('default');
        $email->viewBuilder()->setTemplate('cible');
        $email->setEmailFormat("html")
        ->setFrom(['Mouffetteteam@gmail.com' => 'Team Mouffette [Digital Campus]'])      // sender email
            ->setTo($data['email']) // receiver email
            ->setSubject('Information Cible')   // message subject
            ->send();

        return true;
    }
}
