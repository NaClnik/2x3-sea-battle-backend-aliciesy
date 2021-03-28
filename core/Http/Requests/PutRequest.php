<?php


namespace Core\Http\Requests;


class PutRequest
{
    // Приватный конструктор.
    private function __construct()
    {
    } // __construct.

    // Статический метод для создания экземпляра объекта.
    public static function make(): self {
        return new self();
    } // make.

    public function getData()
    {
        $request = file_get_contents('php://input');

        $data = array();
        parse_str($request, $data);

        return $data;
    } // getData.
} // PutRequest.