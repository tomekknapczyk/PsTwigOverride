<?php
/**
 * Copyright 2020 Mafisz
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0).
 * It is available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 *
 * @author    Mafisz <mafisz@gmail.com>
 * @copyright Mafisz
 * @license   https://opensource.org/licenses/AFL-3.0  Academic Free License (AFL 3.0)
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class MafiszPsTwig extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'mafiszpstwig';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Mafisz';
        $this->need_instance = 0;

        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Mafisz PrestaShop Twig templates');
        $this->description = $this->l('Nadpisywanie standardowych szablonów Twig z PrestaShop');

        $this->confirmUninstall = $this->l('');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
}
