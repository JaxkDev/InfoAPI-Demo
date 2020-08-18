<?php

namespace JaxkDev\InfoAPIDemo;

use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use SOFe\InfoAPI\CommonInfo;
use SOFe\InfoAPI\InfoAPI;
use SOFe\InfoAPI\StringInfo;
use SOFe\InfoAPI\WorldInfo;

class Main extends PluginBase{
	protected function onEnable() : void{
		$template = '${world name} ${world seed} ${server players}/${server max players} ${message}';
		var_dump(InfoAPI::resolveTemplate($template, [
			"world" => new WorldInfo(Server::getInstance()->getWorldManager()->getDefaultWorld()),
			"server" => new CommonInfo(Server::getInstance()),
			"message" => new StringInfo("Players online")
		]));
	}
}
