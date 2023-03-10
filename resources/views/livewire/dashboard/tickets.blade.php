<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-base font-semibold leading-6 text-gray-900">Tickets</h1>
            <p class="mt-2 text-sm text-gray-700">De huidige tickets</p>
        </div>

    </div>
    <div class="mt-8 flow-root">
        <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead>
                        <tr>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Naam</th>
                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Email
                            </th>
                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">
                                Licenseplate
                            </th>
                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">
                                Description
                            </th>
                            <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">
                                <span class="">Status</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($tickets as $ticket)
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                    {{ $ticket['name'] }}</td>
                                <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{ $ticket['email'] }}
                                </td>
                                <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">
                                    {{ $ticket['licenseplate'] }}</td>
                                </td>
                                <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">
                                    {{ $ticket['description'] }}</td>
                                <td wire:click="toggle({{ $ticket['id'] }})"
                                    class="relative whitespace-nowrap text-pink-600 py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                    <button type="button"
                                        class="cursor-pointer w-full mx-auto">{{ ucfirst($ticket['status']) }}<span
                                            class="sr-only"></span></button>
                                </td>
                            </tr>
                        @endforeach

                        <!-- More people... -->
                    </tbody>

                    {{ $tickets->links() }}
                </table>
            </div>
        </div>
    </div>
    <div @closestatus.window="open = false" @openstatus.window="open = true" x-data="{ open: false }" class="flex justify-center">

        <!-- Modal -->
        <div x-show="open" style="display: none" x-on:keydown.escape.prevent.stop="open = false" role="dialog"
            aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')"
            class="fixed inset-0 z-10 overflow-y-auto">
            <!-- Overlay -->
            <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

            <div x-show="open" x-transition x-on:click="open = false"
                class="relative flex min-h-screen items-center justify-center p-4">
                <div x-on:click.stop x-trap.noscroll.inert="open"
                    class="relative w-full max-w-2xl overflow-y-auto rounded-xl bg-white p-4 shadow-lg">
                    <div class="text-center mx-auto h-12 w-12 text-pink-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="mx-auto h-12 w-12">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
                        </svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-5">
                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">{{ __('Status') }}
                        </h3>
                        <div class="mt-2">
                            <p class="text-sm text-gray-500">{{ __('Verander de status') }}</p>
                        </div>
                        <div>
                            <div class="mt-2">
                                <div>
                                    <select wire:model="status" id="location" name="location"
                                        class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                        <option value="open">Open</option>
                                        <option value="In progress">In progress</option>
                                        <option value="done">Done</option>
                                        <option value="remove">Remove</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                        <button type="button" wire:click="updateStatus"
                            class="inline-flex w-full justify-center rounded-md bg-pink-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pink-600 sm:col-start-2">{{ __('Gebruik') }}</button>
                        <button type="button" @click="open = false"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:col-start-1 sm:mt-0">{{ __('Terug') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
