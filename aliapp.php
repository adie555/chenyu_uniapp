<?php
/**
 * chenyu_uniapp支付宝小程序接口定义
 *
 * @author 尘雨雾录
 * @url
 */
defined('IN_IA') or exit('Access Denied');

class Chenyu_uniappModuleAliapp extends WeModuleAliapp {
	public function doPageTest(){
        global $_GPC, $_W;
        $errno = 0;
        $message = '此处是微擎小程序后端返回消息';
        $data = array(
            'w'=>$_W,
            'gpc'=>$_GPC
        );
        return $this->result($errno, $message, $data);
	}
}