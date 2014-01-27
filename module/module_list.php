<?php
/**
 * 모듈 리스트
 *
 * 사용법 :
 *      HOME은 기본 모듈명임. 수정 가능하지만 권장하지 않음.
 *      모듈을 추가하려면 배열의 한 요소로 추가할 모듈명을 입력함. (대소문자 구분)
 *      배열 추가후 /module 안에 아래 디렉토리를 추가해 주어야 함.
 *      /module/[[모듈명]]
 *      /module/[[모듈명]]/model
 *
 *      디렉토리명이 _로 시작하면 라우터에 등록 안함.
 *
 * @author  daekyu.seo dkseo@pentasecurity.com
 * @copyright   2014 Penta Security
 *
 */

return array(
    "home",
    "test",
);

?>
