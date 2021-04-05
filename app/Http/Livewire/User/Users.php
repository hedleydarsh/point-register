<?php

namespace App\Http\Livewire\User;

use App\Http\Resources\UserResource;
use App\Models\Collaborator;
use App\Models\Manager;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;
use Manny;

class Users extends Component
{
    use WithPagination;

    //Atributos para fazer o bind na view
    public $confirmingUserDeletion = false;
    public $showingUser = false;
    public $creatingUser = false;
    public $editingUser = false;
    public $userSelected = false;
    public $isInvalidCep = false;
    public $edit = false;

    //Atributos para a criação de usuários
    public $name;
    public $cpf;
    public $email;
    public $dt_birth;
    public $cep = '';
    public $address;
    public $password;
    public $manager_id;
    public $ocupattion;


    //Regras de validação
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email|unique:users',
        'cpf' => 'required|cpf|unique:collaborators',
        'ocupattion' => 'required',
        'dt_birth' => 'required',
        'password' => 'required',
        'cep' => 'required',
        'manager_id' => 'required',
        'address' => 'required',
    ];

    public function render()
    {
        $users = User::with('collaborator')->paginate(5);
        $managers = User::where('type', 1)->orderBy('name', 'asc')->get();
        return view('livewire.user.users', ['users' => $users, 'managers' => $managers]);
    }

    public function confirmUserDeletion($id)
    {
        $this->confirmingUserDeletion = $id;
    }

    public function createUser()
    {
        $this->creatingUser = true;
    }

    public function editUser(User $user)
    {
        $this->name        = $user->name;
        $this->cpf         = $user->collaborator->cpf;
        $this->email       = $user->email;
        $this->dt_birth    = $user->collaborator->birth;
        $this->cep         = $user->collaborator->cep;
        $this->address     = $user->collaborator->address;
        $this->password    = $user->password;
        $this->manager_id  = $user->collaborator->manager_id;
        $this->ocupattion  = $user->collaborator->ocupattion;
        $this->editingUser = $user->id;
    }

    public function showUser($id)
    {
        $user = User::with('collaborator')->find($id);
        $this->userSelected = collect(new UserResource($user));
        $this->showingUser = true;
    }

    public function storeUser()
    {
        $user = [
            'name'     => $this->name,
            'email'    => $this->email,
            'password' => $this->password,
        ];

        $collaborator = [
            'name'     => $this->name,
            'cpf'        => $this->cpf,
            'dt_birth'   => $this->dt_birth,
            'cep'        => $this->cep,
            'addres'     => $this->address,
            'manager_id'    => $this->manager_id,
            'ocupattion' => $this->ocupattion,
            'created_by' => auth()->user()->id,
        ];

        $this->validate();

        //Inicia o Database Transaction
        DB::beginTransaction();

        $newUser = User::create($user);
        $collaborator['user_id'] = $newUser->id;
        $newCollaborattor = Collaborator::create($collaborator);

        if ($newUser && $newCollaborattor) {
            //Sucesso!
            DB::commit();
            session()->flash('message', 'Usuário Salvo com sucesso!');
            $this->creatingUser = false;
        } else {
            dd('falhou');
            //Fail, desfaz as alterações no banco de dados
            DB::rollBack();
        }
    }

    public function updateUser($id)
    {
        $userForm = [
            'name'     => $this->name,
            'email'    => $this->email,
            'password' => $this->password,
        ];

        $collaborator = [
            'name'     => $this->name,
            'cpf'        => $this->cpf,
            'dt_birth'   => $this->dt_birth,
            'cep'        => $this->cep,
            'address'     => $this->address,
            'manager_id' => $this->manager_id,
            'ocupattion' => $this->ocupattion,
            'user_id'    => $id,
            'created_by' => auth()->user()->id,
        ];

        $this->validate();

        //Inicia o Database Transaction
        DB::beginTransaction();

        $newUser = User::find($id)->update($userForm);
        $newCollaborattor = Collaborator::where('user_id', $id)->update($collaborator);

        if ($newUser && $newCollaborattor) {
            //Sucesso!
            DB::commit();
            session()->flash('message', 'Usuário Salvo com sucesso!');
            $this->editingUser = false;
        } else {
            dd('falhou');
            //Fail, desfaz as alterações no banco de dados
            DB::rollBack();
        }

        $this->editingUser = false;
    }

    public function deleteUser(User $user)
    {
        try {
            $user->delete();
            $this->confirmingUserDeletion = false;
            session()->flash('message', 'Usuário deletado com sucesso!');
            return redirect()->to('/usuarios');
        } catch (\Throwable $th) {
            session()->flash('message', 'Não foi possível deletar este usuário!');
        }
    }

    public function updated($field)
    {
        if ($field == 'cep') {
            $this->cep = Manny::mask($this->cep, "11111-111");
        }
    }


    public function searchCEP($cep)
    {
        $cep = $this->cep;
        if ($cep) {
            $response = Http::get('https://ws.apicep.com/cep.json?code=' . $cep);
            $address = $response->collect();
            if ($address['status'] == 200) {
                $this->address = $address['address'] .
                    ', '  . $address['district'] .
                    ', '  . $address['city'] .
                    ' - ' . $address['state'];

                $this->isInvalidCep = false;
            } else {
                $this->isInvalidCep = true;
            }
        }
    }
}
