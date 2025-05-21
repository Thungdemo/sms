# SMS
Sms library with support for multiple sms providers

## Installation
Run composer 
```
composer require thungdemo\sms
```
## Usage
```php
use Thungdemo\Sms\Drivers\Textlocal;
use Thungdemo\Sms\Client;
use Thungdemo\Sms\Message;

$config = [
    'apikey' => 'your_api_key',
    'sender' => 'SENDER',
];
$driver = new Textlocal($config);
$client = new Client($driver);

$message = new Message();
$message->setMessage('Hello world');
$message->setRecipient('1234567890');
$client->send($message);
```
