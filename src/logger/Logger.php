<?php

namespace Drupal\log_entries\Logger;

use Drupal\log_entries\Logger\LeLogger;

class Logger {
    const PERSISTENT = true;
    const SSL = false;
    const SEVERITY = LOG_DEBUG;
    const DATAHUB_ENABLED = false;
    const DATAHUB_IP_ADDRESS = "";
    const DATAHUB_PORT = 1000;
    const HOST_ID = "";
    const HOST_NAME = "";
    const HOST_NAME_ENABLED = "";
    const ADD_LOCAL_TIMESTAMP = false;

    public function getLogger($logToken) {
        return LeLogger::getLogger($logToken, self::PERSISTENT, self::SSL, self::SEVERITY, self::DATAHUB_ENABLED, self::DATAHUB_IP_ADDRESS, self::DATAHUB_PORT, self::HOST_ID, self::HOST_NAME, self::HOST_NAME_ENABLED, self::ADD_LOCAL_TIMESTAMP);
    }
}