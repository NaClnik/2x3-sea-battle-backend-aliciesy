<?php


namespace Core\Bootstrap;

// Класс для создания WebApplication в паттерне FluentBuilder.
use Core\Routing\Router;

class WebApplicationBuilder
{
    // Поля класса.
    private WebApplication $webApplication;

    // Конструктор.
    public function __construct()
    {
        $this->webApplication = new WebApplication();
    } // __construct.

    public function setRouter(Router $router)
    {
        $this->webApplication->setRouter($router);

        return $this;
    } // setRouter.
    
    public function build(): WebApplication {
        return $this->webApplication;
    } // build.
} // WebApplicationBuilder.