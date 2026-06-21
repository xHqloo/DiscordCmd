<?php


namespace xHqlo\Commands;


use pocketmine\block\Barrel;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\permission\DefaultPermissions;
use xHqlo\Base;

class DiscordCmd extends Command {

    public function __construct() {
        parent::__construct(Base::getInstance()->getConfig()->get("discord-command"), Base::getInstance()->getConfig()->get("discord-description"), Base::getInstance()->getConfig()->get("discord-usage"));
       $this->setPermission(DefaultPermissions::ROOT_USER);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args): void {
        $sender->sendMessage(Base::getInstance()->getConfig()->get("discord"));
    }
}
