<?php

trait LogInfo {
    public function log(string $mensaje): string {
        return "[INFO]: {$mensaje}";
    }
}

trait LogWarning {
    public function log(string $mensaje): string {
        return "[WARNING]: {$mensaje}";
    }
}

trait LogError {
    public function log(string $mensaje): string {
        return "[ERROR]: {$mensaje}";
    }
}

class GestorEventos {
    use LogInfo, LogWarning, LogError {
        LogInfo::log insteadof LogWarning, LogError;
        LogInfo::log as logInfo;
        LogWarning::log as logWarning;
        LogError::log as logError;
    }
}

$gestor = new GestorEventos();

print_r($gestor->logInfo('Inicio del proceso.') . PHP_EOL);
print_r($gestor->logWarning('Posible uso elevado de recursos.') . PHP_EOL);
print_r($gestor->logError('Error crítico en el sistema.') . PHP_EOL);
