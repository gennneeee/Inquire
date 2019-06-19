<?php return unserialize('a:2:{s:8:"lifetime";i:1560925235;s:4:"data";a:5:{s:12:"conversation";O:19:"inquireConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:623:"O:40:"BotMan\\BotMan\\Messages\\Outgoing\\Question":4:{s:10:"' . "\0" . '*' . "\0" . 'actions";a:3:{i:0;a:6:{s:4:"name";s:9:"Admission";s:4:"text";s:9:"Admission";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:1:"a";s:10:"additional";a:0:{}}i:1;a:6:{s:4:"name";s:7:"Medical";s:4:"text";s:7:"Medical";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:1:"m";s:10:"additional";a:0:{}}i:2;a:6:{s:4:"name";s:10:"Enrollment";s:4:"text";s:10:"Enrollment";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:1:"e";s:10:"additional";a:0:{}}}s:7:"' . "\0" . '*' . "\0" . 'text";s:30:"What are you going to inquire?";s:14:"' . "\0" . '*' . "\0" . 'callback_id";N;s:11:"' . "\0" . '*' . "\0" . 'fallback";N;}";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:1104:"C:32:"Opis\\Closure\\SerializableClosure":1057:{a:5:{s:3:"use";a:0:{}s:8:"function";s:784:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === \'a\') {
                $this->say(\'I want to inquire about the admission procedures.\');
                $this->askAdmission();
            } else if ($continue === \'m\') {
                $this->say(\'I want to inquire about the medical procedures.\');
                $this->askDrop();
            } else if ($continue === \'e\') {
                $this->say(\'I want to inquire about the enrollment procedures.\');
                $this->askDrop();
            } else {
                $this->say(\'Your chosen question is not yet available on any of our services for now.\');
                $this->askCategory();
            }
        }";s:5:"scope";s:19:"inquireConversation";s:4:"this";O:19:"inquireConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"000000002f137d67000000004ef0975e";}}";s:4:"time";s:21:"0.44716200 1560923435";}}');