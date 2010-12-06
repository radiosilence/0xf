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
    private $template;
    private $pages = array(
        'index' => 'Home',
        'student' => 'Student Protest Advice'
    );
    private function init() {
        $t = new \Core\Template();
        $t->date = new \DateTime();
        $t->title = $this->pages[$this->args['page']];
        $t->page = $this->args['page'];
        $t->menu_items = $this->pages;
        $t->is_mobile = \Core\Utils\Mobile::detect();
        $this->template = $t;
    }
    public function index() {
        $page = strlen($this->args['page']) > 0 ? $this->args['page'] : 'index';
        if(isset($this->pages[$page])) {
            $this->init();
            $this->template->content = $this->get_page($page);
            $this->template->canonical = $page . ".html";
            echo $this->template->render('standard_page.php');
        } else {
            throw new \Core\HTTPError(404, $page);
        }
    }

    public function page() {
    }
    
    private function get_page($filename) {
        $filename = SITE_PATH . '/pages/' . $filename . '.html';
        if (is_file($filename)) {
            ob_start();
            include $filename;
            $contents = ob_get_contents();
            ob_end_clean();
            return $contents;
        }
        throw new \Core\FileNotFoundError($filename);
    }
}