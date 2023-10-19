<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-800 dark:text-gray-200 leading-tight">
            <a class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-3"
                href="{{ route('cliente.cadastrar') }}" > Cadastrar Cliente
            </a>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-800 dark:text-gray-200 leading-tight">
            <div class="bg-dark dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="shadow-sm overflow-hidden my-8">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                    <a  href="{{ route('cliente.listar', ['orderBy' => 'id', 'order' => $order]) }}">
                                        <strong class="inline-flex">
                                            <div>ID</div>
                                            <div class="ml-1">
                                                <?php if ($orderBy == 'id' && $order == 'asc') {?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                                    </svg>

                                                <?php } elseif ($orderBy == 'id' && $order == 'desc') {?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                <?php }?>
                                            </div>
                                        </strong>
                                    </a>
                                </th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                    <a  href="{{ route('cliente.listar', ['orderBy' => 'name', 'order' => $order]) }}">
                                        <strong class="inline-flex">
                                            <div>Nome</div>
                                            <div class="ml-1">
                                                <?php if ($orderBy == 'name' && $order == 'asc') {?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                                    </svg>

                                                <?php } elseif ($orderBy == 'name' && $order == 'desc') {?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                <?php }?>
                                            </div>
                                        </strong>
                                    </a>
                                </th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                    <a  href="{{ route('cliente.listar', ['orderBy' => 'email', 'order' => $order]) }}">
                                        <strong class="inline-flex">
                                            <div>Email</div>
                                            <div class="ml-1">
                                                <?php if ($orderBy == 'email' && $order == 'asc') {?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                                    </svg>

                                                <?php } elseif ($orderBy == 'email' && $order == 'desc') {?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                <?php }?>
                                            </div>
                                        </strong>
                                    </a>
                                </th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                    <strong>Editar</strong>
                                </th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">
                                    <strong>Excluir</strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-dark dark:bg-slate-800">
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"> {{ $cliente->id }} </td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"> {{ $cliente->name }} </td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"> {{ $cliente->email }} </td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                        <a
                                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-3"
                                            href="{{ route('cliente.editar', ['id' => $cliente->id]) }}" > Editar
                                        </a>
                                    </td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                        <a
                                            class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                                            href="{{ route('cliente.deletar', ['id' => $cliente->id]) }}" > Excluir
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbopy>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
