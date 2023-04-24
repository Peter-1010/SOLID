<?php

namespace SOLID\ISP;

class Car implements Vehicle, Speedable, Joyful
{

    public function move()
    {
        echo 'I am moving';
    }

    public function accelerate()
    {
        echo '200K/h';
    }

    public function stop()
    {
        echo 'Stopping ...';
    }

    public function musicPlay()
    {
        echo 'Playing music';
    }

    public function pause()
    {
        echo 'Pausing';
    }

    public function rewind()
    {
        echo 'rewind';
    }

}