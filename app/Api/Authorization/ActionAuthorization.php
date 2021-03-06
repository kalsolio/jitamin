<?php

/*
 * This file is part of Jitamin.
 *
 * Copyright (C) 2016 Jitamin Team
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jitamin\Api\Authorization;

/**
 * Class ActionAuthorization.
 */
class ActionAuthorization extends ProjectAuthorization
{
    public function check($class, $method, $action_id)
    {
        if ($this->userSession->isLogged()) {
            $this->checkProjectPermission($class, $method, $this->actionModel->getProjectId($action_id));
        }
    }
}
