<?php

namespace HeurekaAgency\Switcheroo\Events;

use App\Models\User;
use HeurekaAgency\Switcheroo\Enums\Currency;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class CurrencySwitched implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public User $user;

    public function __construct(
        public Currency $currency,
        protected ?bool $shouldBroadCast = null,
        protected ?bool $privateChannel = null
    ) {
        $this->user = auth()->user();
    }

    public function broadcastOn(): array
    {
        $shouldBroadcast = $this->shouldBroadCast ?? config('switcheroo.events.broadcast');
        $privateChannel = $this->privateChannel ?? config('switcheroo.events.private');

        if ($shouldBroadcast) {
            return [
                $privateChannel
                    ? new PrivateChannel("switcheroo.{$this->user->id}")
                    : new Channel('switcheroo')
            ];
        }

        return [];
    }
}
