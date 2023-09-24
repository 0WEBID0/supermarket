<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => '',
    'toCopy' => '',
    'toHiddenCopy' => ''
    ),
    'fields' => array(
    'name-1' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'name-1',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'name-1\' is required.'
    )
    ),
    'Password' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'Password',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Password\' is required.'
    )
    ),
    'Checkbox' => array(
    'order' => 3,
    'type' => 'checkbox',
    'label' => 'Checkbox',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Checkbox\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>