<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository' shared service.

return $this->services['PrestaShop\\Module\\PrestashopFacebook\\Repository\\ProductRepository'] = new \PrestaShop\Module\PrestashopFacebook\Repository\ProductRepository(${($_ = isset($this->services['ps_facebook.language']) ? $this->services['ps_facebook.language'] : $this->load('getPsFacebook_LanguageService.php')) && false ?: '_'});
