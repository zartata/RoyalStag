<?php
use GetSky\ParserExpressions\Rules\FirstOf;
use GetSky\ParserExpressions\Rules\String;

class ActionParser
{
    public $action = null;

    public function closure()
    {
        return new FirstOf([$this->foo(), $this->bar()]);
    }

    public function foo()
    {
        return new String(
            'foo',
            'String',
            function () {
                $this->action = 'It\'s foo-action!';
            }
        );
    }

    public function bar()
    {
        return new String(
            'bar',
            'String',
            function () {
                $this->action = 'It\'s bar-action!';
            }
        );
    }
}
