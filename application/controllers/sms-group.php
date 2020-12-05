<?php
class Sms extends OperatorController
{
    public function create()
    {
            $mainView   = 'sms-group/form';
            $heading    = 'SMS';
            $formAction = 'sms-group/create';
            $buttonText = 'Send';
            $this->load->view('template', compact(
                'mainView',
                'heading',
                'formAction',
                'input',
                'buttonText'
            ));
            return;
        }

    
}
