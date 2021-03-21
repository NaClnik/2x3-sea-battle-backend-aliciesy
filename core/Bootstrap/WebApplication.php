<?php


namespace Core\Bootstrap;


use App\Exceptions\ExceptionsHandler;
use App\Routes\ApiRouteDefiner;
use Core\Collections\HeadersCollection;
use Core\Defaults\DefaultUriMatchValidator;
use Core\Exceptions\RouteNotFoundException;
use Core\External\Eloquent;
use Core\Routing\Router;
use Core\Routing\RouterBuilder;
use Exception;

class WebApplication
{
    // Поля класса.
    private Router $router;

    #region Аксессоры и мутаторы класса
    // Аксессоры и мутаторы класса.
    /**
     * @return Router
     */
    public function getRouter(): Router
    {
        return $this->router;
    }

    /**
     * @param Router $router
     */
    public function setRouter(Router $router): void
    {
        $this->router = $router;
    }
    #endregion

    // TODO: Декомпозировать метод.
    // Методы класса.
    public function run(): void{
        WebApplicationLoader::make()->boot();

        $router = (new RouterBuilder())
            ->setRoutesCollection(new ApiRouteDefiner())
            ->setUriMatchValidator(new DefaultUriMatchValidator())
            ->build();

        try {
            // Получаем ответ из экшена контроллера.
            $response = $router->executeRoute();

            // Удаляем все заголовки.
            header_remove();

            // Устанавливаем заголовки.
            $this->setHeaders($response->getHeaders());

            // Устанавливаем статус код.
            http_response_code($response->getStatusCode());

            // Отдаём клиенту контент из ответа.
            echo $response->getContent();
        } catch (Exception $exception) {
            $exceptionHandler = new ExceptionsHandler();

            $exceptionHandler->handle(get_class($exception), $exception);
        } // catch.
    } // run.

    private function setHeaders(HeadersCollection $headersCollection): void{
        $collection = $headersCollection->getCollection();

        foreach ($collection as $header){
            header($header);
        } // foreach.
    } // setHeaders.
} // WebApplication.