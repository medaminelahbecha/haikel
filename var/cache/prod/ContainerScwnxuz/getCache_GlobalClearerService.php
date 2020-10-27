<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.global_clearer' shared service.

return $this->services['cache.global_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(['cache.app' => ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->load('getCache_AppService.php')) && false ?: '_'}, 'cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->load('getCache_SystemService.php')) && false ?: '_'}, 'cache.validator' => ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->load('getCache_ValidatorService.php')) && false ?: '_'}, 'cache.annotations' => ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->load('getCache_AnnotationsService.php')) && false ?: '_'}, 'cache.property_access' => ${($_ = isset($this->services['cache.property_access']) ? $this->services['cache.property_access'] : $this->getCache_PropertyAccessService()) && false ?: '_'}]);
