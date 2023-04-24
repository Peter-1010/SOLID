<?php

namespace SOLID\OCP;

abstract class Vehicle implements IVehicle
{
    private IMove $movable;
    private string $color;
    private int $maximumSpeed;
    private Driver $driver;
    private array $routes;

    /**
     * @return IMove
     */
    public function getMovable(): IMove
    {
        return $this->movable;
    }

    /**
     * @param IMove $movable
     */
    public function setMovable(IMove $movable): void
    {
        $this->movable = $movable;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getMaximumSpeed(): string
    {
        return $this->maximumSpeed . 'K/h';
    }

    /**
     * @param int $maximumSpeed
     */
    public function setMaximumSpeed(int $maximumSpeed): void
    {
        $this->maximumSpeed = $maximumSpeed;
    }

    /**
     * @return Driver
     */
    public function getDriver(): Driver
    {
        return $this->driver;
    }

    /**
     * @param Driver $driver
     */
    public function setDriver(Driver $driver): void
    {
        $this->driver = $driver;
    }

    /**
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param Route $routes
     */
    public function addRoutes(Route $routes): void
    {
        $this->routes[] = $routes;
    }

    /**
     * @return string
     */
    public function move(): string
    {
        return $this->getMovable()->move();
    }


}