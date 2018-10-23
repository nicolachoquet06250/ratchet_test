<?php
require __DIR__.'/Ratchet/vendor/autoload.php';

require 'src/Chat.php';

// Run the server application through the WebSocket protocol on port 8080
$app = new Ratchet\App(
	"localhost",
	2107);
$app->route('/chat', new Chat, array('*'), 'localhost');

$app->run();