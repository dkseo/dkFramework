<?php
/**
 * test 모듈 설정
 *
  *
 * @author  daekyu.seo dkseo@pentasecurity.com
 * @copyright   2013 Penta Security
 *
*/

return array(
    "routes" => array(
        "route" => "/test",
        "constraints" => array(
            "module",
            "controller",
            "action",
            "arg1",
            "arg2",
        ),
        "defaults" => array(
            "controller"    => "index",
            "action"        => "index",
            "arg1"          => "aaa",
            "arg2"          => "bbb",
        ),
        "mapping" => array(
            "mapping00"   => "index",
            "mapping01"   => "index",
            "mapping02"   => "index",
        ),

        # 선언하면 해당 모듈 페이지만 적용됨.
        "view_manager" => array(
            "layout"    => __DIR__ . "/View/layout/layout.phtml",
            //"error"     => __DIR__ . "/View/layout/error.phtml",
            //"default"     => __DIR__ . "/View/layout/default.phtml",
        ),
    ),
);
