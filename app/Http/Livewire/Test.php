<?php

namespace App\Http\Livewire;

use Carbon\CarbonImmutable;
use Livewire\Component;

class Test extends Component
{
    public $currentDate;
    public $sevenDaysLater;
    public $currentWeek;
    public $day;
    public $checkDay;
    public $dayOfWeek;

    public function mount()
    {
        $this->currentDate = CarbonImmutable::toDay();
        $this->sevenDaysLater = $this->currentDate->addDays(7);
        $this->currentWeek = [];

        for ($i = 0; $i < 7; $i++) {
            $this->day = CarbonImmutable::today()->addDays($i)->format('m月d日');
            $this->checkDay = CarbonImmutable::today()->addDays($i)->format('Y-m-d');
            $this->dayOfWeek = CarbonImmutable::today()->addDays($i)->dayName;
            array_push($this->currentWeek, [
                'day' => $this->day,
                'checkDay' => $this->checkDay,
                'dayOfWeek' => $this->dayOfWeek
            ]);
        }
       // dd($this->currentWeek);
    }

    public function getDate($date)
    {

        $this->currentDate = $date;
        $this->currentWeek = [];

        $this->sevenDaysLater = CarbonImmutable::parse($this->currentDate)->addDays(7);


        for ($i = 0; $i < 7; $i++) {
            $this->day = CarbonImmutable::parse($this->currentDate)->addDays($i)->format('m月d日');
            $this->checkDay = CarbonImmutable::parse($this->currentDate)->addDays($i)->format('Y-m-d');
            $this->dayOfWeek = CarbonImmutable::parse($this->currentDate)->addDays($i)->dayName;
            array_push($this->currentWeek, [
                'day' => $this->day,
                'checkDay' => $this->checkDay,
                'dayOfWeek' => $this->dayOfWeek
            ]);
        }
    }

    public function render()
    {
        return view('livewire.test');
    }
}
