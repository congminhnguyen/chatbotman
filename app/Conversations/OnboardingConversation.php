<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Incoming\IncomingMessage;

class OnboardingConversation extends Conversation
{
    protected $name;

    protected $phone;

    protected $address;

    public function askName()
    {
        $this->ask('Tên của bạn là gì?', function(Answer $answer) {
            // Save result
            $this->name = $answer->getText();

            $this->askPhone();
        });
    }

    public function askPhone()
    {
        $this->ask('Số điện thoại của ' . $this->name . ' là gì?', function(Answer $answer) {
            // Save result
            $this->phone = $answer->getText();
            if(!is_numeric($this->phone)) {
                $this->say($this->name . ' ơi! Đây không phải là số điện thoại á, ' . $this->name . ' nhập lại nha..');
                $this->askPhone();
            } else if (strlen($this->phone) !== 10) {
                $this->say($this->name . ' ơi! Đây không phải là số điện thoại á, ' . $this->name . ' nhập lại nha..');
                $this->askPhone();
            } else {
                $this->askAdress();
            }
            // if($this->phone == 10)
            
        });
    }

    public function askAdress()
    {
        $this->ask('Địa chỉ của ' . $this->name . ' là gì?', function(Answer $answer) {
            // Save result
            $this->address = $answer->getText();
            
            $this->askService();
        });
    }

    public function askService(){
        $this->ask('Sản phẩm ' . $this->name . ' muốn là gì?', function() {
            $this->sayThanks();
        });
    }

    public function sayThanks() {
        $this->say('Cám ơn ' . $this->name . '! Nhân viên chúng tôi sẽ liên hệ với bạn sớm.');
    }

    public function run()
    {
        // This will be called immediately
        $this->askName();
    }
}