<div
    class="font-bold relative text-center"
    x-data="{
        open: false,
        selected: $persist(@js($selectedCurrency->value)).as('selected-currency'),
        flag: @js($selectedCurrency->flag()),
        toggle() {
            this.open = !this.open;
        },
        select(currency, flag) {
            this.selected = currency;
            this.flag = flag;
            $wire.dispatch('currency-selected', { currency: currency });
        },
        init() {
            if (this.selected !== @js($selectedCurrency->value)) {
                this.select(this.selected, $wire.getCurrencyFlag(this.selected));
            }
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
        <span class="text-md mr-1" x-text="flag"></span>
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
                                @click.prevent="select(@js($currency->value), @js($currency->flag())); toggle()"
                        >
                            <span class="text-md mr-1">{{ $currency->flag() }}</span>
                            <span class="text-md">{{ $currency->value }}</span>
                        </button>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
