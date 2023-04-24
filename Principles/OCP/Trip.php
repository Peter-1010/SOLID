<?php

namespace SOLID\OCP;

class Trip
{
    private Vehicle $vehicle;
    private string $tripNumber;
    private float $tripPrice;
    private int $duration;

    /**
     * @param Vehicle $vehicle
     * @param string $tripNumber
     * @param float $tripPrice
     * @param int $duration
     */
    public function __construct(Vehicle $vehicle, string $tripNumber, float $tripPrice, int $duration)
    {
        $this->vehicle = $vehicle;
        $this->tripNumber = $tripNumber;
        $this->tripPrice = $tripPrice;
        $this->duration = $duration;
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->vehicle;
    }

    /**
     * @param Vehicle $vehicle
     */
    public function setVehicle(Vehicle $vehicle): void
    {
        $this->vehicle = $vehicle;
    }

    /**
     * @return string
     */
    public function getTripNumber(): string
    {
        return $this->tripNumber;
    }

    /**
     * @param string $tripNumber
     */
    public function setTripNumber(string $tripNumber): void
    {
        $this->tripNumber = $tripNumber;
    }

    /**
     * @return float
     */
    public function getTripPrice(): float
    {
        return $this->tripPrice;
    }

    /**
     * @param float $tripPrice
     */
    public function setTripPrice(float $tripPrice): void
    {
        $this->tripPrice = $tripPrice;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function move(): string
    {
        return $this->vehicle->move();
    }
}