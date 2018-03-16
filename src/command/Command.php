<?php
/**
 * Created by PhpStorm.
 * User: ben
 * Date: 16/03/2018
 * Time: 17:49
 */


namespace src\command;

class Command
{

    protected function init(){
        $this->beforeFilter();
        $this->execute();
        $this->afterFilter();
        $this->destroy();
    }

    protected function beforeFilter(){

    }

    protected function execute(){

    }

    protected function afterFilter(){

    }

    protected function destroy(){

    }

}