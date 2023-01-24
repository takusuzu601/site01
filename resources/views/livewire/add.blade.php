<div>
    <h2>予定を追加出来ます</h2>

    <input id="calendar" class="block mt-1 mb-2 mx-auto" type="text" name="calendar" value="{{ $currentDate }}""
        wire:change="getDate($event.target.value)" />

    <div class="flex mx-auto">
        @for ($i = 0; $i < 7; $i++)
            <div class="w-32">
                <div class="py-1 px-2 border h-8 border-gray-200 text-center"> {{ $currentWeek[$i]['day'] }}</div>
                <div class="py-1 px-2 border h-8 border-gray-200 text-center"> {{ $currentWeek[$i]['dayOfWeek'] }}</div>
                <div class="py-1 px-2 border h-8 border-gray-200 text-center">
                    <button type="button" wire:click="modalOpen('$currentWeek[$i]['day']')" data-micromodal-trigger="modal-1" class="">登録編集</button>
                </div>
            </div>
        @endfor
    </div>

    <div class="container mx-auto my-56 w-2/5 p-6 text-center">
        
        <div class="mt-6" x-data="{ open: false }">
          <button class="bg-green-500 bg-opacity-75 text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none" @click="open = true">modal</button>
      
          <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center" style="background-color: rgba(0,0,0,.5);" x-show="open">
            <div class="text-left bg-white h-auto p-4 md:max-w-xl md:p-6 lg:p-8 shadow-xl rounded mx-2 md:mx-0" @click.away="open = false">
              <h2 class="text-2xl">Modal title</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iure quas laudantium dicta impedit, est id delectus molestiae deleniti enim nobis rem et nihil.</p>
              <div class="flex justify-center mt-8">
                <button class="bg-gray-700 text-white px-4 py-2 rounded no-outline focus:shadow-outline select-none" @click="open = false">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    {{-- micro modal  --}}
    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay" tabindex="-1" data-micromodal-close>
            <div class="modal__container z-100" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <header class="modal__header">
                    <h2 class="text-xl text-gray-700 modal__title" id="modal-1-title">

                        <button type="button" class="modal__close" aria-label="Close modal"
                            data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                    <p>

                    </p>
                </main>
                <footer class="modal__footer">

                    <button type="button" class="modal__btn" data-micromodal-close
                        aria-label="Close this dialog window">閉じる</button>
                </footer>
            </div>
        </div>
    </div>
    {{-- micro modal end --}}

    
</div>
