<?php

namespace App\Http\Livewire\Registers;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Registers extends Component
{
    // between '2021-04-04 00:00:00' AND '2021-04-05 23:59:59'
    public function render()
    {
        $collaborators = DB::select(
            "select c.id, c.name as name_subordinate,
            c.ocupattion, m.name as name_manager, r.created_at as hour,
            r.id as register_id from registers r
            inner join collaborators c on r.user_id = c.id
            inner join collaborators m on c.manager_id = m.id
            where c.manager_id = ". auth()->user()->id." and r.created_at"
        );

        return view(
            'livewire.registers.registers',
            ['collaborators' => $collaborators]
        );
    }
}
