<?php

namespace SOLID\ISP;

class Truck implements Vehicle, Cargo
{

    public function move()
    {
        echo 'I am moving';
    }

    public function stop()
    {
        echo 'Stopping ...';
    }

    public function carryHeavyCargo()
    {
        echo 'Carry Heavy Cargo (200KG)';
    }
}