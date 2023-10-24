<?php

interface Workable
{
    public function canCode();
    public function code();
    public function test();
}

class Programmer implements Workable
{
    public function canCode()
    {
        return true;
    }

    public function code()
    {
        return 'coding';
    }

    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester
{
    public function canCode()
    {
        return false;
    }

    public function test()
    {
        return 'testing in test server';
    }
}

class TesterAdapter implements Workable{
    private Tester $obj;
    function __construct(Tester $obj)
    {
        $this->obj = $obj;
    }

    public function canCode()
    {
        return $this->obj->canCode();
    }

    public function code()
    {
        throw new Exception('Opps! I can not code');
    }

    public function test()
    {
        return $this->obj->test();
    }
}

$worker = new Tester();
$workerAdapter = new TesterAdapter($worker);
echo ($workerAdapter->canCode())?"Programa":"No programa";
echo "<br>";
$workerAdapter->code();
