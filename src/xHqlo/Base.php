<?php


namespace xHqlo;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Base extends PluginBase {

    use SingletonTrait;

    public function onEnable(): void {
        Base::setInstance($this);


        $this->getServer()->getLogger()->alert(Base::getInstance()->getConfig()->get("discord-active"));

        
        $this->getServer()->getCommandMap()->register("", new DiscordCmd());
    }
    public function onDisable(): void {


        $this->getServer()->getLogger()->alert(Base::getInstance()->getConfig()->get("discord-desactive"));
    }
}
