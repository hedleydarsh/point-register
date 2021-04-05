<?php

namespace App\Http\Livewire\Register;

use App\Models\Register as ModelsRegister;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Register extends Component
{
    public function render()
    {
        $user = auth()->user();
        $dtHoje = '%' . Carbon::now()->format('Y-m-d') . '%';
        $registers = ModelsRegister::where('created_at', 'like', $dtHoje)
            ->where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('livewire.register.register', [
            'user' => $user,
            'registers' => $registers
        ]);
    }

    public function storeRegister()
    {
        try {
            $userId = auth()->user()->id;
            ModelsRegister::create(['user_id' => $userId]);
            session()->flash('message', 'Registro criado com sucesso!');
        } catch (\Throwable $th) {
            session()->flash('message', 'Não foi possível criar o registro!');
        }
    }
}
