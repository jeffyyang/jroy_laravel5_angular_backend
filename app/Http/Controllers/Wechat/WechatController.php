<?php namespace Wechat\Controllers;

use Controller;
use Wechat\WeChatServer;

class WechatController extends Controller {

    /**
     * 微信
     *
     * @var \Wechat\WeChatServer
     */
    protected $weChatServer;

    /**
     * 构造函数
     *
     * @param WeChatServer $weChatServer
     */
    public function __construct(WeChatServer $weChatServer)
    {
        $this->weChatServer = $weChatServer;
    }

    /**
     * 测试微信功能
     */
    function test()
    {
        dd($this->weChatServer->getMessage());

        //echo WeChatServer::getXml4Txt('abc');

        exit;
    }

}