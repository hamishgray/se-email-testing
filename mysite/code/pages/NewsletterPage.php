<?php

class NewsletterPage extends Page{

}

class NewsletterPage_Controller extends Page_Controller{

  private static $allowed_actions = array(
    'EmailForm',
  );

  public function EmailForm(){

    $fields = new FieldList(
      new HiddenField('ID', 'ID'),
      new TextField('Subject', 'Title'),
      new TextField('SendFrom', 'Email address'),
      $content = new TextareaField('Content', 'Email content')
    );
    $content->setDescription('Paste the full email HTML here to send a test email to the entered address.');

    $actions = new FieldList(
        new FormAction('SendEmailForm', 'Send Test Email')
    );

    $validator = new RequiredFields('Subject', 'SendFrom', 'Content');
    $form = new Form($this, 'EmailForm', $fields, $actions, $validator);

    return $form;

  }

  function SendEmailForm($data, $form) {

    // Email
    $from = $data['SendFrom'];
    $to = $data['SendFrom'];
    $subject = $data['Subject'];
    $email = new Email($from, $to, $subject);
    $email->setTemplate('EmailTest');
    $email->populateTemplate($data);
    $email->send();

    $this->redirect($this->Link("?emailsent=1"));

  }

}
