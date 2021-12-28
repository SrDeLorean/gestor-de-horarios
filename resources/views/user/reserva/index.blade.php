<x-app-layout title="Dashboard">
    <div class="container grid px-6 mx-auto">
        <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Menu Reserva 
        </h2>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">1. Seleccione el dia en que desea jugar</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" id="fecha" />
            </label>
        </div>

        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <!-- With avatar -->
            <span class="text-gray-700 dark:text-gray-400">2. Seleccione un horario entre las diferentes canchas</span>

            <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Horarios</th>    
                                <th class="px-4 py-3">Cancha 1</th>
                                <th class="px-4 py-3">Cancha 2</th>
                                <th class="px-4 py-3">Cancha 3</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            <tr class="text-gray-700 dark:text-gray-400">
                            @for ($i = 7; $i < 24; $i++)
                                <td class="px-4 py-3 text-sm">
                                    {{$i}}:00
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    a
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    b
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    c
                                </td>
                            </tr>
                            @endfor                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    {{-- <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div> --}}
</x-app-layout>

<script>
    $(document).ready(function() {
        var minDate = new Date();
        $("#fecha").datepicker({
            showAnim: 'drop',
            numberOfMonth: 1,
            minDate: minDate,
            dateFormat: 'dd-mm-yy',
        });
    });
</script>