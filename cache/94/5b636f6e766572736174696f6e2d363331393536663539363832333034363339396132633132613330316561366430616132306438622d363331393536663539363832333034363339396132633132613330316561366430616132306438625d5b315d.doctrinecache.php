<?php return unserialize('a:2:{s:8:"lifetime";i:1560991479;s:4:"data";a:5:{s:12:"conversation";O:19:"inquireConversation":3:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:849:"O:40:"BotMan\\BotMan\\Messages\\Outgoing\\Question":4:{s:10:"' . "\0" . '*' . "\0" . 'actions";a:4:{i:0;a:6:{s:4:"name";s:20:"Medical Requirements";s:4:"text";s:20:"Medical Requirements";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:3:"req";s:10:"additional";a:0:{}}i:1;a:6:{s:4:"name";s:11:"Medical Fee";s:4:"text";s:11:"Medical Fee";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:3:"fee";s:10:"additional";a:0:{}}i:2;a:6:{s:4:"name";s:18:"Medical Procedures";s:4:"text";s:18:"Medical Procedures";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"proc";s:10:"additional";a:0:{}}i:3;a:6:{s:4:"name";s:7:"Go Back";s:4:"text";s:7:"Go Back";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"back";s:10:"additional";a:0:{}}}s:7:"' . "\0" . '*' . "\0" . 'text";s:50:"What do you want to know about medical procedures?";s:14:"' . "\0" . '*' . "\0" . 'callback_id";N;s:11:"' . "\0" . '*' . "\0" . 'fallback";N;}";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:892:"C:32:"Opis\\Closure\\SerializableClosure":846:{a:5:{s:3:"use";a:0:{}s:8:"function";s:593:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === \'req\') {
                $this->goBackExam();
            } else if ($continue === \'fee\') {
                $this->goBackExam();
            } else if ($continue === \'proc\') {
                $this->goBackExam();
            } else if ($continue === \'back\') {
                $this->askCategory();
            } else {
                $this->say(\'Please choose a valid answer.\');
                $this->askMedical();
            }
        }";s:5:"scope";s:19:"inquireConversation";s:4:"this";O:19:"inquireConversation":3:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"0000000048eec6620000000025d4d411";}}";s:4:"time";s:21:"0.32382300 1560989679";}}');