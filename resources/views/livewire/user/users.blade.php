{{-- Sessão do Painel de usuários --}}
<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Usuários') }}
    </h2>
</x-slot>

<div class="py-12">

    @if (session()->has('message'))
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-4">
            <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 relative" role="alert"
                x-data="{show: true}" x-show="show">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                </svg>
                <p>{{ session('message') }}</p>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="show = false">
                    <svg class="fill-current h-6 w-6 text-white" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                    </svg>
                </span>
            </div>
        </div>
    @endif

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{-- Painel botão novo --}}
        <div class="py-3 px-5 bg-white rounded shadow-md mb-8">
            <div class="flex flex-row-reverse">
                <div class="inline-block mr-2 mt-2">
                    <button wire:click='createUser()' type="button"
                        class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg flex items-center">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        Novo
                    </button>
                </div>
            </div>
        </div>

        {{-- TABELA DE USUÁRIOS --}}
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nome
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Cargo
                                        </th>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Status
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Ações
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    @if ($user->profile_photo_url)
                                                        <div class="flex-shrink-0 mr-3">
                                                            <img class="h-10 w-10 rounded-full object-cover"
                                                                src="{{ $user->profile_photo_url }}"
                                                                alt="{{ $user->name }}" />
                                                        </div>
                                                    @else
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <div
                                                                class="rounded-full bg-gray-200 flex items-center justify-center p-2">
                                                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    @endif

                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $user->name }}
                                                        </div>
                                                        <div class="text-sm text-gray-500">
                                                            {{ $user->email }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">
                                                    {{ $user->collaborator->ocupattion }}
                                                </div>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if (!$user->deleted_at)
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Ativo
                                                    </span>
                                                @else
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                        Inativo
                                                    </span>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                {{-- Button Show --}}
                                                <button type="button" wire:click="showUser({{ $user->id }})"
                                                    class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-400 hover:bg-blue-500 hover:shadow-lg">
                                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                        <path fill-rule="evenodd"
                                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                                {{-- Button Edit --}}
                                                <button type="button" wire:click="editUser({{ $user->id }})"
                                                    class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-yellow-400 hover:bg-yellow-500 hover:shadow-lg">
                                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                                    </svg>
                                                </button>
                                                {{-- Button Delete --}}
                                                <button type="button"
                                                    wire:click="confirmUserDeletion({{ $user->id }})"
                                                    class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-400 hover:bg-red-500 hover:shadow-lg">
                                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- More items... -->
                                </tbody>
                            </table>
                            <div class="p-10">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-jet-confirmation-modal wire:model="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Deletar usuário') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Você tem certeza que deseja deletar este usuário?') }}
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('confirmingUserDeletion', false)" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser({{ $confirmingUserDeletion }})"
                    wire:loading.attr="disabled" wire:loading.attr="disabled">
                    {{ __('Deletar') }}
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>

        <!-- Show User Modal -->
        <x-jet-dialog-modal wire:model="showingUser">
            <x-slot name="title">
                Colaborador
            </x-slot>

            <x-slot name="content">
                @if ($userSelected)
                    <div class="grid grid-cols-2 gap-4">
                        <div class="...">
                            <div>
                                <strong>Nome: </strong> {{ $userSelected['name'] }}
                            </div>
                            <div>
                                <strong>Email: </strong> {{ $userSelected['email'] }}
                            </div>
                            <div>
                                <strong>CPF: </strong> {{ $userSelected['collaborator']['cpf'] }}
                            </div>
                            <div>
                                <strong>Data Nascimento: </strong> {{ $userSelected['collaborator']['dt_birth'] }}
                            </div>
                            <div>
                                <strong>Cep: </strong> {{ $userSelected['collaborator']['cep'] }}
                            </div>
                            <div>
                                <strong>Endereço: </strong> {{ $userSelected['collaborator']['address'] }}
                            </div>
                        </div>
                        <div class="...">
                            <div>
                                <strong>Cargo: </strong> {{ $userSelected['collaborator']['ocupattion'] }}
                            </div>
                            <div>
                                <strong>Gestor: </strong> {{ $userSelected['manager'] }}
                            </div>
                            <div>
                                <strong>Criado por: </strong> {{ $userSelected['created_by'] }}
                            </div>
                        </div>
                    </div>
                @endif
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('showingUser', false)" wire:loading.attr="disabled">
                    {{ __('Sair') }}
                </x-jet-secondary-button>
            </x-slot>
        </x-jet-dialog-modal>

        <!-- Create User Modal -->
        <x-jet-dialog-modal wire:model="creatingUser">
            <x-slot name="title">
                Novo Colaborador
            </x-slot>
            <x-slot name="content">
                <form wire:submit.prevent="storeUser">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">
                                    Nome *
                                </label>
                                <input type="text" wire:model="name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="cpf" class="block text-sm font-medium text-gray-700">
                                    CPF *
                                </label>
                                <input type="text" wire:model="cpf"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('cpf') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="dt_bith" class="block text-sm font-medium text-gray-700">
                                    Data Nascimento *
                                </label>
                                <input type="date" wire:model="dt_birth"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('dt_birt') <span class="error">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="email_address" class="block text-sm font-medium text-gray-700">
                                    Email *
                                </label>
                                <input type="text" wire:model="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="ocupattion" class="block text-sm font-medium text-gray-700">
                                    Cargo *
                                </label>
                                <input type="text" wire:model="ocupattion"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('ocupattion') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="manager" class="block text-sm font-medium text-gray-700">
                                    Gestor
                                </label>
                                <select wire:model="manager_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @if ($managers)
                                        <option>Selecione</option>
                                        @foreach ($managers as $m)
                                            <option value={{ $m->id }}>{{ $m->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('manager_id') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    Senha *
                                </label>
                                <input type="password" wire:model="password"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('password') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="postal_code" class="block text-sm font-medium text-gray-700">
                                    CEP *
                                </label>
                                <div class="flex">
                                    <input type="text" wire:model="cep"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <button type="button" wire:click="searchCEP({{ $cep }})"
                                        class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-400 hover:bg-blue-500 hover:shadow-lg">
                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                </div>
                                @if ($isInvalidCep)
                                    <span class="error">Cep inválido</span>
                                @endif
                                @error('cep') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6">
                                <label for="address" class="block text-sm font-medium text-gray-700">
                                    Endereco *
                                </label>
                                <input type="text" wire:model="address" disabled autocomplete="street-address"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('address') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex mt-6">
                                <label class="flex items-center">
                                    <input type="checkbox" wire:model="type" class="form-checkbox">
                                    <span class="ml-2">Acesso administrativo?</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <x-slot name="footer">
                        <button type="submit" wire:click="storeUser() wire:loading.attr=" disabled"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Salvar') }}
                        </button>
                    </x-slot>
                </form>
            </x-slot>
        </x-jet-dialog-modal>

        <!-- Update User Modal -->
        <x-jet-dialog-modal wire:model="editingUser">
            <x-slot name="title">
                Editar Colaborador
            </x-slot>
            <x-slot name="content">
                <form wire:submit.prevent="storeUser">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="name" class="block text-sm font-medium text-gray-700">
                                    Nome *
                                </label>
                                <input type="text" wire:model="name"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="cpf" class="block text-sm font-medium text-gray-700">
                                    CPF *
                                </label>
                                <input type="text" wire:model="cpf"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('cpf') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="dt_bith" class="block text-sm font-medium text-gray-700">
                                    Data Nascimento *
                                </label>
                                <input type="date" wire:model="dt_birth"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('dt_birt') <span class="error">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="email_address" class="block text-sm font-medium text-gray-700">
                                    Email *
                                </label>
                                <input type="text" wire:model="email"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="ocupattion" class="block text-sm font-medium text-gray-700">
                                    Cargo *
                                </label>
                                <input type="text" wire:model="ocupattion"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('ocupattion') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="manager" class="block text-sm font-medium text-gray-700">
                                    Gestor
                                </label>
                                <select wire:model="manager_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @if ($managers)
                                        <option>Selecione</option>
                                        @foreach ($managers as $m)
                                            <option value={{ $m->id }}>{{ $m->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('manager_id') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    Senha *
                                </label>
                                <input type="password" wire:model="password"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('password') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="postal_code" class="block text-sm font-medium text-gray-700">
                                    CEP *
                                </label>
                                <div class="flex">
                                    <input type="text" wire:model="cep"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    <button type="button" wire:click="searchCEP({{ $cep }})"
                                        class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-400 hover:bg-blue-500 hover:shadow-lg">
                                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </button>
                                </div>
                                @if ($isInvalidCep)
                                    <span class="error">Cep inválido</span>
                                @endif
                                @error('cep') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-span-6">
                                <label for="address" class="block text-sm font-medium text-gray-700">
                                    Endereco *
                                </label>
                                <input type="text" wire:model="address" disabled autocomplete="street-address"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                @error('address') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex mt-6">
                                <label class="flex items-center">
                                    <input type="checkbox" wire:model="type" class="form-checkbox">
                                    <span class="ml-2">Acesso administrativo?</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <x-slot name="footer">
                        <button type="submit" wire:click="updateUser({{ $editingUser }}) wire:loading.attr="
                            disabled"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Salvar') }}
                        </button>
                    </x-slot>
                </form>
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
