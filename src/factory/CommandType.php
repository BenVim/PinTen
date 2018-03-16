<?php
/**
 * Created by PhpStorm.
 * User: Ben
 * Date: 03/11/2017
 * Time: 17:48
 */

namespace src\factory;


use src\command\LoginCommand;

class CommandType
{
    const LOGIN_COMMAND_KEY            = "login";
    const CREATE_COMMAND_KEY           = "create";
    const CHAT_COMMAND_KEY             = "chat";
    const JOIN_COMMAND_KEY             = "join";
    const HEART_COMMAND_KEY            = "heart";
    const EXIT_ROOM_COMMAND_KEY        = "exitRoom";
    const DISSOLVE_ROOM_COMMAND_KEY    = "dissolveRoom";
    const READY_COMMAND_KEY            = "ready";
    const BANKER_COMMAND_KEY           = "banker";
    const BET_COMMAND_KEY              = "bet";
    const HISTORY_COMMAND_KEY          = "history";
    const DESC_COMMAND_KEY             = "desc";
    const VERIFY_COMMAND_KEY           = "verify";
    const QUICK_COMMAND_KEY            = "quick";
    const VOTE_COMMAND_KEY             = "vote";
    const OVER_COMMAND_KEY             = "over";
    const STATE_COMMAND_KEY            = "state";
    const TIMER_COMMAND_KEY            = 'timer';
    const FINISH_COMMAND_KEY           = "ov";
    const GAME_TICK_COMMAND_KEY        = "tick";
    const GAME_ACTIVE_COMMAND_KEY      = 'acList';
    const GAME_ACTIVE_DESC_COMMAND_KEY = "acDesc";
    const GAME_ACTIVE_JOIN_GAME        = "joinActive";
    const GAME_ROBOT_GET_ROOM          = "robot";
    const GAME_ROBOT_MANAGER           = "robot_m";
    const SIT_COMMAND_KEY              = "sit";
    const POKE_COMMAND_KEY             = "poke";
    const RECORD_LIST_COMMAND_KEY      = "lck";
    const GUILD_COMMAND_KEY            = "guild";
    const GUILD_JOIN_COMMAND_KEY       = "JUnion";
    const NOTICE_COMMAND_KEY           = "notice";
    const EXIT_UNION_APPLY_KEY         = "eua";
    const EXIT_UNION_KEY               = "eu";
    const DETAIL_UNION_KEY             = "uDetail";
    const GUILD_JOIN_STATUS_KEY        = "js";
    const GUILD_CLOSE_UI_KEY           = "gcu";
    const ERROR_KEY                    = "error";

    public static function getCommandList()
    {
        $commandList                                 = [];
        $commandList[CommandType::LOGIN_COMMAND_KEY] = LoginCommand::class;
        return $commandList;
    }
}