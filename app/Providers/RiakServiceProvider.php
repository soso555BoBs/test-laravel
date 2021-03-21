<?php

namespace App\Providers;

use Riak\Connection;
use App\Contracts\ServerProvider;
use App\Contracts\DowntimeNotifier;
use Illuminate\Support\ServiceProvider;
use App\Services\PingdomDowntimeNotifier;
use App\Services\DigitalOceanServerProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * プロバイダのローディングを遅延させるフラグ
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * 登録する必要のある全コンテナ結合
     *
     * @var array
     */
    public $bindings = [
        ServerProvider::class => DigitalOceanServerProvider::class,
    ];

    /**
     * 登録する必要のある全コンテナシングルトン
     *
     * @var array
     */
    public $singletons = [
        DowntimeNotifier::class => PingdomDowntimeNotifier::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Connection::class, function ($app) {
            return new Connection(config('riak'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * このプロバイダにより提供されるサービス
     *
     * @return array
     */
    public function provides()
    {
        return [Connection::class];
    }
}
