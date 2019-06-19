<?php return unserialize('a:2:{s:8:"lifetime";i:1560863636;s:4:"data";a:5:{s:12:"conversation";O:19:"inquireConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:462:"O:40:"BotMan\\BotMan\\Messages\\Outgoing\\Question":4:{s:10:"' . "\0" . '*' . "\0" . 'actions";a:2:{i:0;a:6:{s:4:"name";s:3:"Yes";s:4:"text";s:3:"Yes";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:1:"y";s:10:"additional";a:0:{}}i:1;a:6:{s:4:"name";s:2:"No";s:4:"text";s:2:"No";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:1:"n";s:10:"additional";a:0:{}}}s:7:"' . "\0" . '*' . "\0" . 'text";s:45:"Hello Joshua Ricarte! What do you want to do?";s:14:"' . "\0" . '*' . "\0" . 'callback_id";N;s:11:"' . "\0" . '*' . "\0" . 'fallback";N;}";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:663:"C:32:"Opis\\Closure\\SerializableClosure":617:{a:5:{s:3:"use";a:0:{}s:8:"function";s:344:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === \'y\') {
                $this->askCategory();
            } elseif ($continue === \'n\') {
                $this->say(\'You chose DROP\');
                $this->askName();
            }
        }";s:5:"scope";s:19:"inquireConversation";s:4:"this";O:19:"inquireConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"000000001af775f9000000006a0e35ee";}}";s:4:"time";s:21:"0.06344700 1560861836";}}');