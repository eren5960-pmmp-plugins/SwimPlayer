<?php

namespace Eren5960\SwimPlayer;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;

class Swim extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
	public function yuzz(PlayerMoveEvent $e){
		$o = $e->getPlayer();
		if($e->getFrom()->getSide(0)->getId() == 9 || $e->getFrom()->getSide(0)->getId() == 8){
			if($o->hasPermission("swim")){
			$o->setSwimming(true);
			}
		}
	}
} 
