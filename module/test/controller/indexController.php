<?php
/**
 * test 컨트롤러
 *
 * @author  daekyu.seo dkseo@pentasecurity.com
 * @copyright   2014 Penta Security
 *
 */

namespace module\test\controller;

class indexController
{
    public function indexAction()
    {
        $aaa = "aaa";

        return array(
            "test" => $aaa,
        );
    }
}
?>