<?php return unserialize('a:2:{s:8:"lifetime";i:1561004063;s:4:"data";a:5:{s:12:"conversation";O:19:"inquireConversation":3:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:505:"O:40:"BotMan\\BotMan\\Messages\\Outgoing\\Question":4:{s:10:"' . "\0" . '*' . "\0" . 'actions";a:2:{i:0;a:6:{s:4:"name";s:12:"Yes, please!";s:4:"text";s:12:"Yes, please!";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:1:"y";s:10:"additional";a:0:{}}i:1;a:6:{s:4:"name";s:21:"No, I want to go back";s:4:"text";s:21:"No, I want to go back";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"back";s:10:"additional";a:0:{}}}s:7:"' . "\0" . '*' . "\0" . 'text";s:25:"Do you want another joke?";s:14:"' . "\0" . '*' . "\0" . 'callback_id";N;s:11:"' . "\0" . '*' . "\0" . 'fallback";N;}";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:802:"C:32:"Opis\\Closure\\SerializableClosure":756:{a:5:{s:3:"use";a:0:{}s:8:"function";s:503:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === \'y\') {
                $this->askTry($continue === \'joke\');
            } else if ($continue === \'back\') {
                $this->say(\'I want to inquire about the medical procedures.\');
                $this->askMedical();
            } else {
                $this->say(\'Invalid Choice!\');
                $this->jokeAgain();
            }
        }";s:5:"scope";s:19:"inquireConversation";s:4:"this";O:19:"inquireConversation":3:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"00000000263a37180000000070558e77";}}";s:4:"time";s:21:"0.21021200 1561002263";}}');