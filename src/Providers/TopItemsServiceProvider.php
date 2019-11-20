<?php
  namespace TopItems\Providers;


  use Plenty\Plugin\ServiceProvider;

  class TopItemsServiceProvider extends ServiceProvider
  {

    public function register()
    {
      // Registering the RouteServiceProvider
      $this->getApplication()->register(TopItemsRouteServiceProvider::class);
    }
  }

 ?>
