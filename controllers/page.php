<?php

/**
 * Simple pagescontroller
 */

namespace Controllers;
import('core.controller');
import('core.template');
import('core.exceptions');
import('core.utils.mobile');

class Page extends \Core\Controller {
    private $_pages = array(
        'index' => 'Home',
        'student' => 'Student Protest Advice',
        '26th' => 'Some Facts About March for the Alternative - 26/03/2011'
    );

    private function _init() {
        $t = new \Core\Template();
        $t->date = new \DateTime();
        $t->title = $this->_pages[$this->_args['page']];
        $t->page = $this->_args['page'];
        $t->menu_items = $this->_pages;
        $t->is_mobile = \Core\Utils\Mobile::detect();
        $this->_template = $t;
    }
    public function index() {
        $page = strlen($this->_args['page']) > 0 ? $this->_args['page'] : 'index';
        if(isset($this->_pages[$page])) {
            $this->_init();
            $this->_template->content = $this->_get_page($page);
            $this->_template->canonical = $page . ".html";
            echo $this->_template->render('standard_page.php');
        } else {
            throw new \Core\HTTPError(404, $page);
        }
    }
    
    private function _get_page($filename) {
        $filename = SITE_PATH . '/pages/' . $filename . '.md';
        if (is_file($filename)) {
            ob_start();
            include $filename;
            $contents = ob_get_contents();
            ob_end_clean();
            if(extension_loaded('discount')) {
                $md = \MarkdownDocument::createFromString($contents);
                $md->compile();
                return $md->getHtml();
            } else {            
                import('3rdparty.markdown');
                import('3rdparty.smartypants');
                return \Smartypants(\Markdown($contents));
            }
        }
        throw new \Core\FileNotFoundError($filename);
    }
}