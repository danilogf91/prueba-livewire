<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-6 px-2">
            <div class="bg-white overflow-hidden shadow rounded">
                <table class="w-full text-xs text-left text-gray-500 dark:text-gray-400 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-800 dark:text-gray-600">
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            {{-- <th scope="col" class="px-2 py-2">
                                Id
                            </th> --}}
                            <th scope="col" class="px-2 py-2">
                                Name
                            </th>
                            <th scope="col" class="px-2 py-2">
                                PDA Code
                            </th>
                            <th scope="col" class="px-2 py-2">
                                State
                            </th>
                            <th scope="col" class="px-2 py-2">
                                Justification
                            </th>
                            <th scope="col" class="px-2 py-2">
                                Investments
                            </th>
                            <th scope="col" class="px-2 py-2">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($message as $project)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
                                >
                                    {{-- <th
                                        scope="row"
                                        class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                    >
                                       {{  $project->id }}
                                    </th> --}}
                                    <th
                                        scope="row"
                                        class="px-2 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white"
                                    >
                                        {{$project->name}}
                                    </th>
                                    <td class="px-2 py-2">
                                        {{$project->pda_code}}
                                    </td>
                                    <td class="px-2 py-2">
                                        {{$project->state}}
                                    </td>
                                    <td class="px-2 py-2">
                                        {{$project->justification}}
                                    </td>
                                    <td class="px-2 py-2">
                                        {{$project->investments}}
                                    </td>
                                    <td class="px-2 py-2 flex gap-1">
                                        <x-heroicon-o-pencil-square class="w-6 h-6 text-green-600 cursor-pointer"/>
                                        <x-heroicon-o-x-mark class="w-6 h-6 text-red-600 cursor-pointer"/>
                                    </td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
    </div>
    @livewire('hello-world')
</x-app-layout>
