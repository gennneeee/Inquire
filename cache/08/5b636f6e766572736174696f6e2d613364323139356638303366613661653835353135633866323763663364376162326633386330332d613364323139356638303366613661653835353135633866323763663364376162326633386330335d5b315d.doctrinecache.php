<?php return unserialize('a:2:{s:8:"lifetime";i:1560906709;s:4:"data";a:5:{s:12:"conversation";O:19:"inquireConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:664:"O:40:"BotMan\\BotMan\\Messages\\Outgoing\\Question":4:{s:10:"' . "\0" . '*' . "\0" . 'actions";a:3:{i:0;a:6:{s:4:"name";s:13:"Entrance Exam";s:4:"text";s:13:"Entrance Exam";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"exam";s:10:"additional";a:0:{}}i:1;a:6:{s:4:"name";s:12:"Requirements";s:4:"text";s:12:"Requirements";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:3:"req";s:10:"additional";a:0:{}}i:2;a:6:{s:4:"name";s:10:"Procedures";s:4:"text";s:10:"Procedures";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"proc";s:10:"additional";a:0:{}}}s:7:"' . "\0" . '*' . "\0" . 'text";s:41:"What do you want to know about admission?";s:14:"' . "\0" . '*' . "\0" . 'callback_id";N;s:11:"' . "\0" . '*' . "\0" . 'fallback";N;}";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:1095:"C:32:"Opis\\Closure\\SerializableClosure":1048:{a:5:{s:3:"use";a:0:{}s:8:"function";s:775:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === \'exam\') {
                $this->say(\'Schedule of entrance exam is already closed.\')
                        ->addButton(\\BotMan\\BotMan\\Messages\\Outgoing\\Actions\\Button::create("Go Back")->value(\'goback\'));
//                $this->goBack();
            } else if ($continue === \'req\') {
                $this->say(\'You chose DROP\');
                $this->askDrop();
            } else if ($continue === \'proc\') {
                $this->say(\'You chose DROP\');
                $this->askDrop();
            } else {
                $this->say(\'Nice meeting you! Thank you for using this feature.\');
            }
        }";s:5:"scope";s:19:"inquireConversation";s:4:"this";O:19:"inquireConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"000000001a874c5e000000000dc083cc";}}";s:4:"time";s:21:"0.96359700 1560904909";}}');