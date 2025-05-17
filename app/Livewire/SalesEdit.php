<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\prices;
use App\Models\rides_rental_db;
class SalesEdit extends Component
{
    public $rideId;
    public $rideType = '';
    public $classification = '';
    public $life_jacket_usage = 0;
    public $pricePerHour = 0;   
    public $totalPrice = 0;
    public $user;
    public $prices = [];
    public $originalPricePerHour;
    public $note = '';

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function mount($rideId)
    {
        $this->prices = prices::all()
            ->groupBy('ride_type')
            ->map(function ($group) {
                return $group->pluck('price_per_hour', 'classification')->toArray();
            })
            ->toArray();

        $this->rideId = $rideId;
        $this->loadRide();
        $this->originalPricePerHour = $this->pricePerHour;
        $this->updatePricePerHour();
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'rideType') {
            $this->classification = array_key_first($this->prices[$this->rideType]) ?? '';
        }

        if (in_array($propertyName, ['rideType', 'classification'])) {
            $this->updatePricePerHour();
        }
    }

    private function loadRide()
    {
        $ride = rides_rental_db::findOrFail($this->rideId);

        $this->rideType = $ride->rideType;
        $this->classification = $ride->classification;
        $this->life_jacket_usage = $ride->life_jacket_usage;
        $this->pricePerHour = $ride->pricePerHour;
        $this->totalPrice = $ride->totalPrice;
        $this->user = $ride->user;
        $this->note = $ride->note;
    }

    private function updatePricePerHour()
    {
        if (
            $this->rideType &&
            isset($this->prices[$this->rideType]) &&
            isset($this->prices[$this->rideType][$this->classification])
        ) {
            $this->pricePerHour = $this->prices[$this->rideType][$this->classification];
        } else {
            $this->pricePerHour = 0;
        }
    }

    public function updateRides()
    {
        $ride = rides_rental_db::findOrFail($this->rideId);

        $ride->rideType = $this->rideType;
        $ride->classification = $this->classification;
        $ride->life_jacket_usage = $this->life_jacket_usage;
        $ride->pricePerHour = $this->pricePerHour;
        $ride->totalPrice = $this->totalPrice;
        $ride->user = $this->user;
        $ride->note = $this->note;
        $ride->save();

        $this->dispatch('closeModal');
        $this->dispatch('rideUpdated');
        $this->dispatch('refreshPage');
        
        session()->flash('message', 'Ride updated successfully!');
    }

    public function render()
    {
        return view('livewire.sales-edit');
    }
}
