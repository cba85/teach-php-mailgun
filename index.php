<?php

require 'vendor/autoload.php';

use Mailgun\Mailgun;

# First, instantiate the SDK with your API credentials
$domain = 'YOUR_DOMAIN_API_KEY';
$mg = Mailgun::create('YOU_MAILGUN_API_KEY');

# Now, compose and send your message.
# $mg->messages()->send($domain, $params);
$mg->messages()->send($domain, [
  'from'    => 'bob@example.com',
  'to'      => 'you@email.com',
  'subject' => 'The PHP SDK is awesome!',
  'text'    => 'It is so simple to send a message.'
]);
