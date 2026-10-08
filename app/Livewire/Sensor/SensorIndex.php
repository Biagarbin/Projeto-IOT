<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorIndex extends Component
{
    public $search='';

    public function delete ($id){
        $sensor = Sensor::find($id);

        if($sensor != null){
            $sensor->delete();
            session()->flash('succcess', 'Excluido');
        }
    }

    public function render()
    {
        $sensor = Sensor::where('nome', 'like', '%'.$this->search.'%')->get();
        return view('livewire.sensor.sensor-index', compact('sensor'));
    }
}
