<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Un message de Philo',
    'email_message' => 'Un nouveau message de &quot;La Voie du Centre&quot;...',
    'success_redirect' => '',
    'email' => array(
        'from' => 'info@lavoieducentre.com',
        'to' => 'fcoulombe7@live.ca'
    ),
    'fields' => array(
        'name' => array(
            'order' => 1,
            'type' => 'string',
            'label' => 'Name',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Name\' is required.'
            )
        ),
        'email' => array(
            'order' => 2,
            'type' => 'email',
            'label' => 'Email',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Email\' is required.'
            )
        ),
        'message' => array(
            'order' => 3,
            'type' => 'string',
            'label' => 'Message',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Message\' is required.'
            )
        ),
    )
);

$processor = new FormProcessor();
$processor->process($form);

?>