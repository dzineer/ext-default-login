<?php
// Copyright 1999-2017. Parallels IP Holdings GmbH. All Rights Reserved.

class Modules_DefaultLogin_ConfigDefaults extends pm_Hook_ConfigDefaults
{

    public function getDefaults()
    {
        return [
            'defaultPassword' => 'changeme',
        ];
    }

}
