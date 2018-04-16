<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('smarty/libs/Smarty.class.php');

class MySmarty extends Smarty
{
    public function __construct()
    {
        parent::__construct();

        $this->caching = false;
        $this->setTemplateDir(APPPATH . 'views');
        $this->setCompileDir(APPPATH . 'third_party/templates_c');
        $this->setConfigDir(APPPATH . 'third_party/configs');
        $this->setCacheDir(APPPATH . 'cache');
    }

    //if specified template is cached then display template and exit, otherwise, do nothing.
    public function useCached($tpl, $cacheId = null)
    {
        if ($this->isCached($tpl, $cacheId)) {
            $this->display($tpl, $cacheId);
            exit();
        }
    }
}