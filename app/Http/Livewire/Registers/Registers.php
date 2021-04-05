<?php

namespace App\Http\Livewire\Registers;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Registers extends Component
{
    public $dt_start;
    public $dt_end;
    public $search = false;
    public $collaborators;
    public $collaboratores;


    public function render()
    {
        $this->collaboratores = $this->getRegister();
        return view('livewire.registers.registers');
    }


    public function getRegister(){
        $query = "select c.id, c.name as name_subordinate, c.ocupattion,
        m.name as name_manager, r.created_at as hour,
        r.id as register_id from registers r  inner join users u on r.user_id = u.id
        inner join collaborators c on c.user_id = u.id
        inner join users m on c.manager_id = m.id
        where u.id = 2 ORDER BY r.created_at DESC";
        return DB::select($query);
    }

    public function getByRegister()
    {
        $this->search = true;
        $start = $this->dt_start . ' 00:00:00';
        $end = $this->dt_end . ' 23:59:59';

        $query = "select c.id, c.name as name_subordinate, c.ocupattion,
        m.name as name_manager, r.created_at as hour,
        r.id as register_id from registers r  inner join users u on r.user_id = u.id
        inner join collaborators c on c.user_id = u.id
        inner join users m on c.manager_id = m.id
        where u.id = 2 and r.created_at BETWEEN '$start' and '$end' ORDER BY r.created_at DESC";

        $this->collaborators = DB::select($query);

        // dd($this->collaborators);
    }
}
