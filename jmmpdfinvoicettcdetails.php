<?php
/**
 * 
 * @author    Jean-Michel Morillon <jmmorillon@gmail.com>
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License (AFL 3.0)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class Jmmpdfinvoicettcdetails extends Module
{
    public $cron = false;
    protected $sql_checks = array();

    public function __construct()
    {
        $this->name = 'jmmpdfinvoicettcdetails';
        $this->tab = 'administration';
        $this->version = '0.1.0';
        $this->author = 'JM Morillon';
        $this->need_instance = 0;
        $this->bootstrap = true;
        parent::__construct();
        
        $this->displayName = $this->trans('TTC Details in PDF Invoices');
        $this->description = $this->trans('TTC Details in PDF Invoices');
        $this->ps_versions_compliancy = array(
            'min' => '1.7.1.0',
            'max' => _PS_VERSION_,
        );
        $this->confirmUninstall = $this->trans('Are you sure you want to uninstall this module?');
        
        if (!Configuration::get('JMM_PDFINVOICETTCDETAILS_NAME')) {
            $this->warning = $this->l('No name provided');
        }

    }

    /**
     * Google sitemap installation process:
     *
     * @return bool Installation result
     */
    public function install()
    {
        
        return parent::install();
    }

    /**
     * Google sitemap uninstallation process:
     * 
     * @return bool Uninstallation result
     */
    public function uninstall()
    {
        
        return parent::uninstall();
    }

}
