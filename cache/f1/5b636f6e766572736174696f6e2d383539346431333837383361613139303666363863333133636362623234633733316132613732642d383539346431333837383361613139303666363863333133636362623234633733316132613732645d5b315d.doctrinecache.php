<?php return unserialize('a:2:{s:8:"lifetime";i:1561003722;s:4:"data";a:5:{s:12:"conversation";O:19:"inquireConversation":3:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:668:"O:40:"BotMan\\BotMan\\Messages\\Outgoing\\Question":4:{s:10:"' . "\0" . '*' . "\0" . 'actions";a:3:{i:0;a:6:{s:4:"name";s:11:"Tell a Joke";s:4:"text";s:11:"Tell a Joke";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"joke";s:10:"additional";a:0:{}}i:1;a:6:{s:4:"name";s:19:"What\'s the weather?";s:4:"text";s:19:"What\'s the weather?";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:1:"m";s:10:"additional";a:0:{}}i:2;a:6:{s:4:"name";s:17:"Tell me the time.";s:4:"text";s:17:"Tell me the time.";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:1:"e";s:10:"additional";a:0:{}}}s:7:"' . "\0" . '*' . "\0" . 'text";s:26:"What do you want me to do?";s:14:"' . "\0" . '*' . "\0" . 'callback_id";N;s:11:"' . "\0" . '*' . "\0" . 'fallback";N;}";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:2203:"C:32:"Opis\\Closure\\SerializableClosure":2156:{a:5:{s:3:"use";a:0:{}s:8:"function";s:1902:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === \'joke\') {
                $a = rand(0, 8);
                if ($a === 0) {
                    $this->say("Why can\'t astronauts eat popsicles?"
                        . \'<br>\'
                        . \'<br>\'
                        . \'<br>\'
                        . \'In space, no one can hear the ice cream truck 🚀🚫🍧 \');
                    $this->jokeAgain();
                } else if ($a === 1) {
                    $this->say("Joke #2");
                    $this->jokeAgain();
                } else if ($a === 2) {
                    $this->say("Joke #3");
                    $this->jokeAgain();
                } else if ($a === 3) {
                    $this->say("Joke #4");
                    $this->jokeAgain();
                } else if ($a === 4) {
                    $this->say("Joke #5");
                    $this->jokeAgain();
                } else if ($a === 5) {
                    $this->say("Joke #6");
                    $this->jokeAgain();
                } else if ($a === 6) {
                    $this->say("Joke #7");
                    $this->jokeAgain();
                } else if ($a === 7) {
                    $this->say("Joke #8");
                    $this->jokeAgain();
                }
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
        }";s:5:"scope";s:19:"inquireConversation";s:4:"this";O:19:"inquireConversation":3:{s:7:"' . "\0" . '*' . "\0" . 'name";s:14:"Joshua Ricarte";s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"0000000026b1b389000000005966444c";}}";s:4:"time";s:21:"0.66737600 1561001922";}}');