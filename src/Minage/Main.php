<?php

namespace Minage;

use pocketmine\event\Listener;
use pocketmine\{Server, Player};
use pocketmine\command\{Command, CommandSender};
use pocketmine\math\Vector3;
use pocketmine\level\Position;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener {

    public function onEnable() {
        $this->getServer()->getLogger()->info("§aPlugin Minage on");
            $this->getserver()->getPluginManage()->registerEvents($this, this);

      Server::getInstance()->loadLevel("Minage");

    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        if($command->getName() === "minage") {
            if($sender instanceof Player) {

                $level = Server::getInstance()->getLevelByName("Minage");
            }
        }
    }


}