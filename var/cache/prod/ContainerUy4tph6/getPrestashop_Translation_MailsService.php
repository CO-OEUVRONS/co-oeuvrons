<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.translation.mails' shared service.

return $this->services['prestashop.translation.mails'] = new \PrestaShopBundle\Translation\Provider\MailsProvider(${($_ = isset($this->services['prestashop.translation.database_loader']) ? $this->services['prestashop.translation.database_loader'] : $this->load('getPrestashop_Translation_DatabaseLoaderService.php')) && false ?: '_'}, ($this->targetDirs[3].'\\app/Resources/translations'));
