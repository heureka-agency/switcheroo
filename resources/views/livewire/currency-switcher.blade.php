<div
    class="font-bold relative text-center"
    x-data="{
        open: false,
        toggle() {
            this.open = !this.open;
        },
        select(currency) {
            $wire.dispatch('currency-selected', { currency: currency })
            this.toggle();
        }
    }"
    @click.outside="open = false"
    x-cloak
>
    <button type="button"
            class="btn px-3 py-1 h-full rounded focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 flex items-center"
            @click.prevent="toggle()"
            :aria-expanded="open"
            x-bind:class="open ? 'bg-gray-100' : ''"
            aria-haspopup="true"
            id="switcheroo-button"
    >
        <span class="sr-only">View currencies</span>
        <span class="text-lg mr-1">{{$selectedCurrency->flag()}}</span>
        <span class="text-md">{{ $selectedCurrency->value }}</span>
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
                @if($selectedCurrency !== $currency)
                    <li>
                        <button type="button"
                                class="btn px-3 py-2 w-full text-left hover:bg-gray-100 flex items-center rounded-md"
                                @click.prevent="select(@js($currency->value))"
                        >
                            <span class="text-lg mr-1 text-center">{{$currency->flag()}}</span>
                            <span class="text-md">{{ $currency->value }}</span>
                        </button>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
