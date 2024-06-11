<x-app-layout>
    <section name="header">
        <div class="relative border border-black w-full h-80 flex justify-center items-center flex-col bg-red-200">
            
            <div class="relative z-10 flex flex-col items-center">
                <h2 class="font-semibold text-center text-8xl text-black leading-tight">
                    {{ __('Store') }}
                </h2>
                <p>Jewelry</p>
            </div>
            <div class="absolute inset-0 ">
            
                
            </div>
        </div>
</section>

<div class="py-12 flex w-full">
    <div class="mx-auto sm:px-6 lg:px-8 flex justify-center items-center w-full">
        <div class="overflow-hidden shadow-sm sm:rounded-lg flex w-full justify-around">
            <img src="{{ asset('Puma.png') }}" alt="bracelet" class="w-60 m-2 hover:shadow-xl"/>
            <img src="{{ asset('Tracksuit.png') }}" alt="bracelet" class="w-60 m-2 hover:shadow-xl"/>
            <img src="{{ asset('Lounge.png') }}" alt="bracelet" class="w-60 m-2 hover:shadow-xl"/>
        </div>
    </div>
</div>

</x-app-layout>

