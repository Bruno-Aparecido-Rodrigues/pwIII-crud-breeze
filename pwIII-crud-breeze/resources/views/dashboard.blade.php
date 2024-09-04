<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300 dark:border-neutral-700">
                        <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
                            <thead class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                                <tr>
                                    <th scope="col" class="p-4">ID do Produto</th>
                                    <th scope="col" class="p-4">Nome</th>
                                    <th scope="col" class="p-4">Tipo do Produto</th>
                                    <th scope="col" class="p-4">Valor do Produto</th>
                                    <th scope="col" class="p-4">Estoque</th>
                                    <th scope="col" class="p-4">Validade</th>
                                    <th scope="col" class="p-4">Ações</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                                <tr>
                                    <td class="p-4">2335</td>
                                    <td class="p-4">banana</td>
                                    <td class="p-4">fruta</td>
                                    <td class="p-4">5</td>
                                    <td class="p-4">15</td>
                                    <td class="p-4">amanhã</td>
                                    <td class="p-4"><button type="button" class="cursor-pointer whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-500 dark:text-white dark:focus-visible:outline-red-500">Deletar</button>
                                    <button type="button" class="cursor-pointer whitespace-nowrap rounded-md bg-green-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-green-500 dark:text-white dark:focus-visible:outline-green-500">Editar</button></td>
                                </tr>
                                <tr>
                                <td class="p-4">2335</td>
                                    <td class="p-4">banana</td>
                                    <td class="p-4">fruta</td>
                                    <td class="p-4">5</td>
                                    <td class="p-4">15</td>
                                    <td class="p-4">amanhã</td>
                                    <td class="p-4"><button type="button" class="cursor-pointer whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-500 dark:text-white dark:focus-visible:outline-red-500">Deletar</button>
                                    <button type="button" class="cursor-pointer whitespace-nowrap rounded-md bg-green-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-green-500 dark:text-white dark:focus-visible:outline-green-500">Editar</button></td>
                                </tr>
                                <tr>
                                <td class="p-4">2335</td>
                                    <td class="p-4">banana</td>
                                    <td class="p-4">fruta</td>
                                    <td class="p-4">5</td>
                                    <td class="p-4">15</td>
                                    <td class="p-4">amanhã</td>
                                    <td class="p-4"><button type="button" class="cursor-pointer whitespace-nowrap rounded-md bg-red-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-red-500 dark:text-white dark:focus-visible:outline-red-500">Deletar</button>
                                    <button type="button" class="cursor-pointer whitespace-nowrap rounded-md bg-green-500 px-4 py-2 text-sm font-medium tracking-wide text-white transition hover:opacity-75 text-center focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-500 active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-green-500 dark:text-white dark:focus-visible:outline-green-500">Editar</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>