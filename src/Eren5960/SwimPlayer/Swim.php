<?php
/**
* @author Eren5960
* @link https://github.com/Eren5960
*/
namespace Eren5960\SwimPlayer;

use pocketmine\plugin\PluginBase;
use pocketmine\event\{
    Listener, player\PlayerMoveEvent
};

class Swim extends PluginBase implements Listener{
	
	public function onEnable(): void{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

    /**
     * @param PlayerMoveEvent $e
     */
    public function onMove(PlayerMoveEvent $event){
		$player = $event->getPlayer();
        if(!$player->hasPermission("use.swim")) return;
		if($player->isUnderWater()){
		    $player->setSwimming(true);
		}
	}
} 
