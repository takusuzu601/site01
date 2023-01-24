<div>
    <input id="calendar" class="block mt-1 mb-2 mx-auto" type="text" name="calendar" value="{{ $currentDate }}"" wire:change="getDate($event.target.value)" />

    <div class="flex mx-auto">
        @for ($i = 0; $i < 7; $i++)
            <div class="w-32">
                <div class="py-1 px-2 border h-8 border-gray-200 text-center"> {{ $currentWeek[$i]['day'] }}</div>
                <div class="py-1 px-2 border h-8 border-gray-200 text-center"> {{ $currentWeek[$i]['dayOfWeek'] }}</div>
                <div class="py-1 px-2 border h-8 border-gray-200 text-center"></div>
            </div>
        @endfor
    </div>
</div>
