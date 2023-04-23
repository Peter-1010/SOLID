<?php

namespace SOLID\SRP;

class Bus
{
    private int $busNumber;
    private int $numberOfPassengers;
    private string $color;
    private int $maximumSpeed;
    private string $driverName;
    private int $driverAge;
    private int $doors;
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
     * @return string
     */
    public function getDriverName(): string
    {
        return $this->driverName;
    }

    /**
     * @param string $driverName
     */
    public function setDriverName(string $driverName): void
    {
        $this->driverName = $driverName;
    }

    /**
     * @return int
     */
    public function getDriverAge(): int
    {
        return $this->driverAge;
    }

    /**
     * @param int $driverAge
     */
    public function setDriverAge(int $driverAge): void
    {
        $this->driverAge = $driverAge;
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
     * @return array
     */
    public function getRoutes(): array
    {
        return $this->routes;
    }

    /**
     * @param array $routes
     */
    public function setRoutes(array $routes): void
    {
        $this->routes = $routes;
    }

    /**
     * @param string $from from destination
     * @param string $to to destination
     * @return string output
     */
    public function driverToRoute(string $from, string $to): string
    {
        return "The bus is moving from $from to $to";
    }

    /**
     * @return string
     */
    public function doMaintenance(): string
    {
        return 'The bus is doing maintenance right now';
    }

}