<?php

namespace Github\Exception;

class TeamsRemoveMembershipForUserLegacyForbiddenException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('Response if team synchronization is set up', 403);
    }
}