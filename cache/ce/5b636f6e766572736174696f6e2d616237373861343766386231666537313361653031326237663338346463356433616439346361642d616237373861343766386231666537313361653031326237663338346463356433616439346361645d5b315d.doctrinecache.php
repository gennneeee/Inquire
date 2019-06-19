<?php return unserialize('a:2:{s:8:"lifetime";i:1560909469;s:4:"data";a:5:{s:12:"conversation";O:19:"inquireConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:1:"c";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:8:"question";s:788:"O:40:"BotMan\\BotMan\\Messages\\Outgoing\\Question":4:{s:10:"' . "\0" . '*' . "\0" . 'actions";a:4:{i:0;a:6:{s:4:"name";s:11:"New Student";s:4:"text";s:11:"New Student";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:3:"new";s:10:"additional";a:0:{}}i:1;a:6:{s:4:"name";s:11:"Old Student";s:4:"text";s:11:"Old Student";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:3:"old";s:10:"additional";a:0:{}}i:2;a:6:{s:4:"name";s:10:"Transferee";s:4:"text";s:10:"Transferee";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:5:"trans";s:10:"additional";a:0:{}}i:3;a:6:{s:4:"name";s:7:"Go Back";s:4:"text";s:7:"Go Back";s:9:"image_url";N;s:4:"type";s:6:"button";s:5:"value";s:4:"back";s:10:"additional";a:0:{}}}s:7:"' . "\0" . '*' . "\0" . 'text";s:22:"What is your standing?";s:14:"' . "\0" . '*' . "\0" . 'callback_id";N;s:11:"' . "\0" . '*' . "\0" . 'fallback";N;}";s:20:"additionalParameters";s:6:"a:0:{}";s:4:"next";s:1597:"C:32:"Opis\\Closure\\SerializableClosure":1550:{a:5:{s:3:"use";a:0:{}s:8:"function";s:1290:"function(\\BotMan\\BotMan\\Messages\\Incoming\\Answer $answer) {
            $continue = strtolower(trim($answer->getText()));

            if ($continue === \'new\') {
                $this->say(\'THE FOLLOWING REQUIREMENTS MUST BE COMPLETED BEFORE SUBMISSION:\');
                $this->say(\'New Student (Senior High School, Alternative Learning System or ALS passers, Basic Education Curriculum or BEC graduate)        
                \');    

                $this->say(\'1. Accomplished Application Form.\');
                $this->say(\'2. 2 copies of 1×1 ID Picture.\');
                $this->say(\'3. Short ordinary white folder.\');
                $this->say(\'4. Photocopy of High School or Senior High School (G12) Form138 (at least first & second grading period) / Certificate of ALS Rating with recommendation for admission to college.\');
                $this->say(\'5. Photocopy of Certificate of Good Moral Character.\');
                $this->goBackReq();
            } else if($continue === \'old\') {
                $this->say(\'1. Certificates of Grades.\');
                $this->say(\'a\');
            } else if($continue === \'trans\') {
                $this->say($message);
            } else if($continue === \'back\') {
                $this->askAdmission();
            } 
        }";s:5:"scope";s:19:"inquireConversation";s:4:"this";O:19:"inquireConversation":4:{s:7:"' . "\0" . '*' . "\0" . 'name";s:1:"c";s:10:"' . "\0" . '*' . "\0" . 'sbjCode";N;s:8:"' . "\0" . '*' . "\0" . 'token";N;s:12:"' . "\0" . '*' . "\0" . 'cacheTime";N;}s:4:"self";s:32:"00000000424ba1b60000000034d57eaa";}}";s:4:"time";s:21:"0.26146700 1560907669";}}');