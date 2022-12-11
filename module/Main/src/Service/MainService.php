<?php

namespace Main\Service;

use Application\Mail\Mail;

class MainService
{
    private $mail;
    private $emailConfig;

    public function __construct(Mail $mail, array $emailConfig)
    {
        $this->mail         = $mail;
        $this->emailConfig  = $emailConfig;
    }

    public function sendEmailConfirmWaitList($data)
    {
        $this->mail->setPage('confirm-subscribe-waitlist')
            ->setFrom($this->emailConfig['connection_config']['from'])
            ->setSubject('Inscrição na Waitlist')
            ->setTo($data['email'])
            ->setData([
                'wallet' => $data['wallet'],
                'name'   => $data['nome']
            ])->prepare();
        $this->mail->send();

        return [
            'status' => true
        ];
    }
}
