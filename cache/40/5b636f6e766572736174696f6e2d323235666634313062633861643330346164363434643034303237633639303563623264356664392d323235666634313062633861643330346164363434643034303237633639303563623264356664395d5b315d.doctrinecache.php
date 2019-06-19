<?php return unserialize('a:2:{s:8:"lifetime";i:1560907730;s:4:"data";a:5:{s:12:"conversation";O:19:"inquireConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:817:"O:40:"BotMan\\BotMan\\Messages\\Outgoing\\Question":4:{s:10:"' . "\0" . '*' . "\0" . 'actions";a:4:{i:0;a:6:{s:4:"name";s:13:"Entrance Exam";s:4:"text";s:13:"Entrance Exam";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"exam";s:10:"additional";a:0:{}}i:1;a:6:{s:4:"name";s:12:"Requirements";s:4:"text";s:12:"Requirements";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:3:"req";s:10:"additional";a:0:{}}i:2;a:6:{s:4:"name";s:10:"Procedures";s:4:"text";s:10:"Procedures";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"proc";s:10:"additional";a:0:{}}i:3;a:6:{s:4:"name";s:7:"Go Back";s:4:"text";s:7:"Go Back";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"back";s:10:"additional";a:0:{}}}s:7:"' . "\0" . '*' . "\0" . 'text";s:45:"What do you want to know about the admission?";s:14:"' . "\0" . '*' . "\0" . 'callback_id";N;s:11:"' . "\0" . '*' . "\0" . 'fallback";N;}";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:915:"C:32:"Opis\\Closure\\SerializableClosure":869:{a:5:{s:3:"use";a:0:{}s:8:"function";s:596:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === \'exam\') {
                $this->goBackExam();
            } else if ($continue === \'req\') {
                $this->goBackExam();
            } else if ($continue === \'proc\') {
                $this->goBackExam();
            } else if ($continue === \'back\') {
                $this->askCategory();
            } else {
                $this->say(\'Please choose a valid answer.\');
                $this->askAdmission();
            }
        }";s:5:"scope";s:19:"inquireConversation";s:4:"this";O:19:"inquireConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"000000003580276f000000007a3c92e7";}}";s:4:"time";s:21:"0.63613700 1560905930";}}');