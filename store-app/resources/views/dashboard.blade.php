<x-app-layout>
    <section name="header">
        <div class="relative border border-black w-full flex justify-center items-center flex-col">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative z-10 flex flex-col items-center">
                <h2 class="font-semibold text-center text-8xl text-black leading-tight">
                    {{ __('Store') }}
                </h2>
                <p>Jewelry</p>
            </div>
            <div class="absolute inset-0 flex justify-center items-center">
                <img src="https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg" alt="bracelet" class="w-24 h-24 object-cover border border-black m-2"/>
                <img src="https://fakestoreapi.com/img/51UDEzMJVpL._AC_UL640_QL65_ML3_.jpg" alt="bracelet" class="w-24 h-24 object-cover m-2"/>
            </div>
        </div>
</section>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
               <h1>Hello World</h1>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .relative {
        position: relative;
    }
    .absolute {
        position: absolute;
    }
    .inset-0 {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    .opacity-50 {
        opacity: 0.5;
    }
    .object-cover {
        object-fit: cover;
    }
    .w-24 {
        width: 6rem;
    }
    .h-24 {
        height: 6rem;
    }
    .z-10 {
        z-index: 10;
    }
    .m-2 {
        margin: 0.5rem;
    }
</style>

