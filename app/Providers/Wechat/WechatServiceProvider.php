<?php namespace App\Providers\Wechat;

use Illuminate\Support\ServiceProvider;

class WechatServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		// JeffyYang $this->package('cooper/wechat');

		// 加载路由
		//
		// JeffyYang include __DIR__ .'/../../routes.php';

		// 加载过滤数据
		//
		// JeffyYang include __DIR__ .'/../../filters.php';
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app->bind('wechatserver', 'App\Providers\Wechat\WeChatServer');
        $this->app->bind('wechatclient', 'App\Providers\Wechat\WeChatClient');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('wechat');
	}

}