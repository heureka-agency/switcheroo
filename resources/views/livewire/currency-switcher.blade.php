<div
    class="font-bold relative text-center"
    x-data="{
        open: false,
        selected: $persist(@js($selectedCurrency->value)).as('selected-currency'),
        flag: '',
        async init() {
            this.flag = await this.getFlag(@js($selectedCurrency->value));
            if (this.selected !== @js($selectedCurrency->value)) {
                await this.select(this.selected);
            }
        },
        async getFlag(currency) {
            return await $wire.getCurrencyFlag(currency);
        },
        toggle() {
            this.open = !this.open;
        },
        async select(currency) {
            this.selected = currency;
            this.flag = await this.getFlag(currency);
            $wire.dispatch('currency-selected', { currency: currency });
        }
    }"
    @click.outside="open = false"
    x-cloak
    wire:ignore.self
>
    <button type="button"
            class="btn px-3 py-1 h-full rounded focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 flex items-center"
            @click.prevent="toggle()"
            :aria-expanded="open"
            :class="{ 'bg-gray-100': open }"
            aria-haspopup="true"
            id="switcheroo-button"
    >
        <span class="sr-only">{{ trans('switcheroo::translations.view_currencies') }}</span>
        <span class="text-md mr-1 w-4 h-4 fi" :class="'fi-' + flag"></span>
        <span class="text-md" x-text="selected"></span>
    </button>

    <div
        x-show="open"
        x-transition:enter="transition duration-100 ease-out"
        x-transition:enter-start="scale-95 transform opacity-0"
        x-transition:enter-end="scale-100 transform opacity-100"
        x-transition:leave="transition duration-75 ease-in"
        x-transition:leave-start="scale-100 transform opacity-100"
        x-transition:leave-end="scale-95 transform opacity-0"
        class="absolute z-10 mt-2 min-w-max origin-top-left rounded-md bg-white shadow-lg ring-2 ring-gray-900/5 focus:ring-offset-2"
    >
        <ul
            role="menu"
            aria-orientation="vertical"
            aria-labelledby="switcheroo-button"
            tabindex="-1"
        >
            @foreach($currencies as $currency)
                @if($currency->value !== $selectedCurrency->value)
                    <li>
                        <button type="button"
                                class="btn px-3 py-2 w-full text-left hover:bg-gray-100 flex items-center rounded-md"
                                @click.prevent="await select(@js($currency->value)); toggle()"
                        >
                            <span class="text-md mr-1 w-4 h-4 fi fi-{{ $currency->flag() }}"></span>
                            <span class="text-md">{{ $currency->value }}</span>
                        </button>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
