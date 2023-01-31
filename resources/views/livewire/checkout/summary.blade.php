<div>
    <h1 class="sr-only">Order information</h1>
    <section aria-labelledby="summary-heading"
             class="bg-gray-50 px-4 pt-16 pb-10 sm:px-6 lg:col-start-2 lg:row-start-1 lg:bg-transparent lg:px-0 lg:pb-16">
        <div x-cloak x-data="{ total: false, price: '', subscription: '' }" @update-subscription.window="price = $event.detail.price, subscription = $event.detail.name" class="mx-auto max-w-lg lg:max-w-none">
            <h2 id="summary-heading" class="text-lg font-medium text-gray-900 hidden sm:block">Jouw mandje</h2>
            <ul role="list" class="divide-y divide-gray-200 text-sm font-medium text-gray-900">
                <li class="flex items-start space-x-4 py-6">
                    <div class="flex-auto space-y-1">
                        <h3 x-text="subscription"></h3>
                    </div>
                    <p class="flex-none text-base font-medium" x-text="price"></p>
                </li>
            </ul>

            <dl class="hidden space-y-6 border-t border-gray-200 pt-6 text-sm font-medium text-gray-900 lg:block">
                <div class="flex items-center justify-between pt-6">
                    <dt class="text-base">Total</dt>
                    <dd class="text-base" x-text="price"></dd>
                </div>
            </dl>
            <div
                class="fixed inset-x-0 bottom-0 flex flex-col-reverse text-sm font-medium text-gray-900 lg:hidden z-50">
                <div class="relative z-10 border-t border-gray-200 bg-white px-4 sm:px-6">
                    <div class="mx-auto max-w-lg">
                        <button @click="total = true" @click.away="total = false" type="button"
                                class="flex w-full items-center py-6 font-medium"
                                aria-expanded="false">
                            <span class="mr-auto text-base">Total</span>
                            <span class="mr-2 text-base" x-text="price"></span>
                            <!-- Heroicon name: mini/chevron-up -->
                            <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div x-show="total">
                    <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>
                    <div class="relative bg-white px-4 py-6 sm:px-6">
                        <dl class="mx-auto max-w-lg space-y-6">
                            <div class="flex items-center justify-between">
                                <dt class="text-gray-600" x-text="subscription"></dt>
                                <dd x-text="price"></dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
