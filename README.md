# VKLib
### A simple VK libary for pmmp and forks. VK API v5.82
## Usage:
- Change "token" in code to your community token
```php
$vk = $this->getServer()->getPluginManager()->getPlugin("VKLib");

$vk->sendMessage(1, "Hello world!"); # "1" is your chat id
```
### Note: you need to install curl on your server. (Linux: apt install curl)
