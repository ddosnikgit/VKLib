<?php

/*
 *  _							   _ _	   
 * | |   _   _ _ __   __ _ _ __ ___| | |_   _ 
 * | |  | | | | '_ \ / _` | '__/ _ \ | | | | |
 * | |__| |_| | | | | (_| | | |  __/ | | |_| |
 * |_____\__,_|_| |_|\__,_|_|  \___|_|_|\__, |
 *									    |___/ 
 * 
 * Author: Lunarelly
 * 
 * GitHub: https://github.com/Lunarelly
 * 
 * Telegram: https://t.me/lunarellyy
 * 
 */

namespace VKLib;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
	
    private $token = "token";

	public function onEnable() {}
	
	private function curl($link) {
		$c = curl_init($link);
        curl_setopt($c, CURLOPT_RETURNTRANSFER, "true");
        curl_setopt($c, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_exec($c);
        curl_close($c);
    }
        
    public function sendMessage($id, $msg) {
        $message = str_replace(" ", "%20", $msg);
        $link = "https://api.vk.com/method/messages.send?chat_id=$id&message=$message&access_token=$this->token&v=5.81";
        $this->curl($link);
    }
}
?>