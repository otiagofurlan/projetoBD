<?php
namespace TsukiTerrace\MVC\Controller;
class Error404Controller implements Controller
{
    public function proccessRequest():void
    {
        http_response_code(404);
    }
}