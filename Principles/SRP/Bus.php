<?php

namespace SOLID\SRP;

class Bus
{
    private int $busNumber;
    private int $numberOfPassengers;
    private string $color;
    private int $maximumSpeed;
    private int $doors;
    private Driver $driver;
    private array $routes;

    /**
     * @param int $busNumber
     */
    public function __construct(int $busNumber)
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @return int
     */
    public function getBusNumber(): int
    {
        return $this->busNumber;
    }

    /**
     * @param int $busNumber
     */
    public function setBusNumber(int $busNumber): void
    {
        $this->busNumber = $busNumber;
    }

    /**
     * @return int
     */
    public function getNumberOfPassengers(): int
    {
        return $this->numberOfPassengers;
    }

    /**
     * @param int $numberOfPassengers
     */
    public function setNumberOfPassengers(int $numberOfPassengers): void
    {
        $this->numberOfPassengers = $numberOfPassengers;
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
     * @return int
     */
    public function getDoors(): int
    {
        return $this->doors;
    }

    /**
     * @param int $doors
     */
    public function setDoors(int $doors): void
    {
        $this->doors = $doors;
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
    public function doMaintenance(): string
    {
        return 'The bus is doing maintenance right now';
    }

    public function move(): void
    {
        foreach ($this->getRoutes() as $route){
           echo "<p style='color: red; font-size: 30px; font-weight: bold'>From {$route->getSource()} To {$route->getDestination()}</p>";
        }
    }

}