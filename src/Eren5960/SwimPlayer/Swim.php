<?php
/**
* _____ ____ ___ __ ___ 
* | ____| _ __ ___ _ __ | ___| / _ \ / /_ / _ \ 
* | _| | '__|/ _ \| '_ \ |___ \| (_) || '_ \ | | | |
* | |___ | | | __/| | | | ___) |\__, || (_) || |_| |
* |_____||_| \___||_| |_||____/ /_/ \___/ \___/ 
* 
* @version v1
* @name JobForm
* @author Eren5960
* @link https://github.com/Eren5960/JobForm
*/
namespace Eren5960\SwimPlayer;

use pocketmine\plugin\PluginBase;
use pocketmine\event\{
    Listener, \player\PlayerMoveEvent
};

class Swim extends PluginBase implements Listener{
	
	public function onEnable(): void{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onMove(PlayerMoveEvent $e){
		$player = $e->getPlayer();
      if(!$player->hasPermission("use.swim")) return;

		if($player->isUnderWater()){
			    $player->setSwimming(true);
		}
	}
} 
