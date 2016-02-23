<?php

  namespace HelpModifier;

  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\utils\TextFormat as TF;
  use pocketmine\utils\Config;
  use pocketmine\event\player\PlayerCommandPreprocessEvent;

  class Main extends PluginBase implements Listener {

    public function dataPath() {

      return $this->getDataFolder();

    }

    public function onEnable() {

      $this->getServer()->getPluginManager()->registerEvents($this, $this);

      @mkdir($this->dataPath());

      $this->cfg = new Config($this->dataPath() . "config.yml", Config::YAML, array("page_1" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8" => "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_2" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8" => "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_3" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8" => "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_4" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8" => "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_5" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8" => "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_6" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8" => "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_7" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8" => "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_8" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8" => "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_9" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8" => "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message"), "page_10" => array("message_1" => "first message here", "message_2" => "second message here", "message_3" => "third message here", "message_4" => "fourth message here", "message_5" => "fifth message here", "message_6" => "sixth message here", "message_7" => "seventh message here", "message_8" => "eighth message here", "message_9" => "ninth message here", "message_10" => "tenth message")));

    }

    public function sendHelp(PlayerCommandPreprocessEvent $event) {

      $command = explode(" ", strtolower($event->getMessage()));

      $player = $event->getPlayer();

      if($command[0] === "/help" or $command[0] === "/?") {

          $page_one_messages = $this->cfg->get("page_1");

          $player->sendMessage($page_one_messages["message_1"]);

          $player->sendMessage($page_one_messages["message_2"]);

          $player->sendMessage($page_one_messages["message_3"]);

          $player->sendMessage($page_one_messages["message_4"]);

          $player->sendMessage($page_one_messages["message_5"]);

          $player->sendMessage($page_one_messages["message_6"]);

          $player->sendMessage($page_one_messages["message_7"]);

          $player->sendMessage($page_one_messages["message_8"]);

          $player->sendMessage($page_one_messages["message_9"]);

          $player->sendMessage($page_one_messages["message_10"]);

          $event->setCancelled();

        if($command[1] === "1" or $command[1] === "one") {

          $page_one_messages = $this->cfg->get("page_1");

          $player->sendMessage($page_one_messages["message_1"]);

          $player->sendMessage($page_one_messages["message_2"]);

          $player->sendMessage($page_one_messages["message_3"]);

          $player->sendMessage($page_one_messages["message_4"]);

          $player->sendMessage($page_one_messages["message_5"]);

          $player->sendMessage($page_one_messages["message_6"]);

          $player->sendMessage($page_one_messages["message_7"]);

          $player->sendMessage($page_one_messages["message_8"]);

          $player->sendMessage($page_one_messages["message_9"]);

          $player->sendMessage($page_one_messages["message_10"]);

        } else if($command[1] === "2" or $command[1] === "two") {

          $page_two_messages = $this->cfg->get("page_2");

          $player->sendMessage($page_two_messages["message_1"]);

          $player->sendMessage($page_two_messages["message_2"]);

          $player->sendMessage($page_two_messages["message_3"]);

          $player->sendMessage($page_two_messages["message_4"]);

          $player->sendMessage($page_two_messages["message_5"]);

          $player->sendMessage($page_two_messages["message_6"]);

          $player->sendMessage($page_two_messages["message_7"]);

          $player->sendMessage($page_two_messages["message_8"]);

          $player->sendMessage($page_two_messages["message_9"]);

          $player->sendMessage($page_two_messages["message_10"]);

        } else if($command[1] === "3" or $command[1] === "three") {

          $page_three_messages = $this->cfg->get("page_3");

          $player->sendMessage($page_three_messages["message_1"]);

          $player->sendMessage($page_three_messages["message_2"]);

          $player->sendMessage($page_three_messages["message_3"]);

          $player->sendMessage($page_three_messages["message_4"]);

          $player->sendMessage($page_three_messages["message_5"]);

          $player->sendMessage($page_three_messages["message_6"]);

          $player->sendMessage($page_three_messages["message_7"]);

          $player->sendMessage($page_three_messages["message_8"]);

          $player->sendMessage($page_three_messages["message_9"]);

          $player->sendMessage($page_three_messages["message_10"]);

        } else if($command[1] === "4" or $command[1] === "four") {

          $page_four_messages = $this->cfg->get("page_4");

          $player->sendMessage($page_four_messages["message_1"]);

          $player->sendMessage($page_four_messages["message_2"]);

          $player->sendMessage($page_four_messages["message_3"]);

          $player->sendMessage($page_four_messages["message_4"]);

          $player->sendMessage($page_four_messages["message_5"]);

          $player->sendMessage($page_four_messages["message_6"]);

          $player->sendMessage($page_four_messages["message_7"]);

          $player->sendMessage($page_four_messages["message_8"]);

          $player->sendMessage($page_four_messages["message_9"]);

          $player->sendMessage($page_four_messages["message_10"]);

        } else if($command[1] === "5" or $command[1] === "five") {

          $page_five_messages = $this->cfg->get("page_5");

          $player->sendMessage($page_five_messages["message_1"]);

          $player->sendMessage($page_five_messages["message_2"]);

          $player->sendMessage($page_five_messages["message_3"]);

          $player->sendMessage($page_five_messages["message_4"]);

          $player->sendMessage($page_five_messages["message_5"]);

          $player->sendMessage($page_five_messages["message_6"]);

          $player->sendMessage($page_five_messages["message_7"]);

          $player->sendMessage($page_five_messages["message_8"]);

          $player->sendMessage($page_five_messages["message_9"]);

          $player->sendMessage($page_five_messages["message_10"]);

        } else if($command[1] === "6" or $command[1] === "six") {

          $page_six_messages = $this->cfg->get("page_6");

          $player->sendMessage($page_six_messages["message_1"]);

          $player->sendMessage($page_six_messages["message_2"]);

          $player->sendMessage($page_six_messages["message_3"]);

          $player->sendMessage($page_six_messages["message_4"]);

          $player->sendMessage($page_six_messages["message_5"]);

          $player->sendMessage($page_six_messages["message_6"]);

          $player->sendMessage($page_six_messages["message_7"]);

          $player->sendMessage($page_six_messages["message_8"]);

          $player->sendMessage($page_six_messages["message_9"]);

          $player->sendMessage($page_six_messages["message_10"]);

        } else if($command[1] === "7" or $command[1] === "seven") {

          $page_seven_messages = $this->cfg->get("page_7");

          $player->sendMessage($page_seven_messages["message_1"]);

          $player->sendMessage($page_seven_messages["message_2"]);

          $player->sendMessage($page_seven_messages["message_3"]);

          $player->sendMessage($page_seven_messages["message_4"]);

          $player->sendMessage($page_seven_messages["message_5"]);

          $player->sendMessage($page_seven_messages["message_6"]);

          $player->sendMessage($page_seven_messages["message_7"]);

          $player->sendMessage($page_seven_messages["message_8"]);

          $player->sendMessage($page_seven_messages["message_9"]);

          $player->sendMessage($page_seven_messages["message_10"]);

        } else if($command[1] === "8" or $command[1] === "eight") {

          $page_eight_messages = $this->cfg->get("page_8");

          $player->sendMessage($page_eight_messages["message_1"]);

          $player->sendMessage($page_eight_messages["message_2"]);

          $player->sendMessage($page_eight_messages["message_3"]);

          $player->sendMessage($page_eight_messages["message_4"]);

          $player->sendMessage($page_eight_messages["message_5"]);

          $player->sendMessage($page_eight_messages["message_6"]);

          $player->sendMessage($page_eight_messages["message_7"]);

          $player->sendMessage($page_eight_messages["message_8"]);

          $player->sendMessage($page_eight_messages["message_9"]);

          $player->sendMessage($page_eight_messages["message_10"]);

        } else if($command[1] === "9" or $command[1] === "nine") {

          $page_nine_messages = $this->cfg->get("page_9");

          $player->sendMessage($page_nine_messages["message_1"]);

          $player->sendMessage($page_nine_messages["message_2"]);

          $player->sendMessage($page_nine_messages["message_3"]);

          $player->sendMessage($page_nine_messages["message_4"]);

          $player->sendMessage($page_nine_messages["message_5"]);

          $player->sendMessage($page_nine_messages["message_6"]);

          $player->sendMessage($page_nine_messages["message_7"]);

          $player->sendMessage($page_nine_messages["message_8"]);

          $player->sendMessage($page_nine_messages["message_9"]);

          $player->sendMessage($page_nine_messages["message_10"]);

        } else if($command[1] === "10" or $command[1] === "ten") {

          $page_ten_messages = $this->cfg->get("page_10");

          $player->sendMessage($page_ten_messages["message_1"]);

          $player->sendMessage($page_ten_messages["message_2"]);

          $player->sendMessage($page_ten_messages["message_3"]);

          $player->sendMessage($page_ten_messages["message_4"]);

          $player->sendMessage($page_ten_messages["message_5"]);

          $player->sendMessage($page_ten_messages["message_6"]);

          $player->sendMessage($page_ten_messages["message_7"]);

          $player->sendMessage($page_ten_messages["message_8"]);

          $player->sendMessage($page_ten_messages["message_9"]);

          $player->sendMessage($page_ten_messages["message_10"]);

        }

      }

    }

  }

?>
