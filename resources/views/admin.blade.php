@extends('layouts.admin')

@section('content')
    <div class="grid grid-cols-12 gap-4 p-4">
        <div class="col-span-4">
            <div class="rounded-lg border border-gray-200 p-4 dark:border-gray-700 dark:bg-gray-800">
                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Total Guests</h3>
                <p class="text-2xl font-bold leading-none text-gray-900 dark:text-white sm:text-3xl">100</p>
            </div>
        </div>
        <div class="col-span-4">
            <div class="rounded-lg border border-gray-200 p-4 dark:border-gray-700 dark:bg-gray-800">
                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Uninvited Guests</h3>
                <p class="text-2xl font-bold leading-none text-gray-900 dark:text-white sm:text-3xl">30</p>
            </div>
        </div>
        <div class="col-span-4">
            <div class="rounded-lg border border-gray-200 p-4 dark:border-gray-700 dark:bg-gray-800">
                <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Invited Guests</h3>
                <p class="text-2xl font-bold leading-none text-gray-900 dark:text-white sm:text-3xl">70</p>
            </div>
        </div>

        <div
             class="border-1 relative col-span-full overflow-x-hidden rounded-lg border border-gray-200 p-4 dark:border-gray-700 dark:bg-gray-800">
            <div class="flex-row items-center justify-between space-y-3 sm:flex sm:space-x-4 sm:space-y-0">
                <div>
                    <h5 class="mr-3 font-semibold dark:text-white">Guests</h5>
                    <p class="text-gray-500 dark:text-gray-400">Manage all your existing guest or add a new one</p>
                </div>
            </div>

            <div
                 class="flex-column mt-4 flex flex-wrap items-end justify-between space-y-4 bg-white dark:bg-gray-800 md:flex-row md:space-y-0">
                <div id="search">
                    <label class="sr-only"
                           for="table-search-users">Search</label>
                    <div class="relative">
                        <div class="rtl:inset-r-0 pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            <svg class="h-4 w-4 text-gray-500 dark:text-gray-400"
                                 aria-hidden="true"
                                 xmlns="http://www.w3.org/2000/svg"
                                 fill="none"
                                 viewBox="0 0 20 20">
                                <path stroke="currentColor"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input class="block w-auto rounded-lg border border-gray-300 bg-gray-50 ps-10 pt-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                               id="table-search-departments"
                               type="text"
                               placeholder="Search for department">
                    </div>
                </div>

                <!-- Create Guest -->
                <button class="flex items-center justify-center rounded-lg bg-blue-700 px-4 py-2 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button"
                        {{-- data-modal-target="create-guests-modal"
                        data-modal-show="create-guests-modal" --}}>
                    Add Guest
                </button>
            </div>

            <div>
                <table class="table-clickable w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400"
                       id="guests-table"
                       x-data="guestsData()"
                       x-init="getGuests()">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <x-table-head class="max-w-6 whitespace-nowrap px-3 py-3"
                                          scope="col">
                                No
                            </x-table-head>
                            <x-table-head class="whitespace-nowrap px-3 py-3"
                                          scope="col">
                                Name
                            </x-table-head>
                            <x-table-head class="whitespace-nowrap px-3 py-3"
                                          scope="col">
                                Created at
                            </x-table-head>
                            <x-table-head class="whitespace-nowrap px-3 py-3"
                                          scope="col">
                                Last Updated
                            </x-table-head>
                            <x-table-head class="px-3 py-3"
                                          data-dt-order="disable"
                                          scope="col" />
                        </tr>
                    </thead>
                    <tbody>
                        <template x-for="guest in guests">
                            <tr class="cursor-pointer border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600"
                                data-href="#">
                                <th class="whitespace-nowrap px-3 py-4 font-medium text-gray-900 dark:text-white"
                                    scope="row">
                                    1
                                </th>
                                <th class="whitespace-nowrap px-3 py-4 font-medium text-gray-900 dark:text-white"
                                    scope="row">
                                    Reihan Faizal Hanif
                                </th>
                                <td class="whitespace-nowrap px-3 py-4">
                                    Column
                                </td>
                                <td class="whitespace-nowrap px-3 py-4">
                                    Column
                                </td>
                                <td class="float-end py-4 pe-2 ps-6">
                                    Action
                                </td>
                            </tr>
                        </template>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>
        function guestsData() {
            return {
                guests: [],
                getGuests: function() {
                    fetch('{!! route('guest.data') !!}')
                        .then(response => response.json())
                        .then(data => this.guests = data);
                },
            }
        }
    </script>
@endsection
