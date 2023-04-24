<?php

namespace SOLID\OCP;

class Bus extends Vehicle
{

    private int $busNumber;
    private int $numberOfPassengers;
    private int $doors;

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
     * @return string
     */
    public function doMaintenance(): string
    {
        return 'The bus is doing maintenance right now';
    }

}