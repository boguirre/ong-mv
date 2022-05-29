<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/people-821624.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Accion por Igualdad</h1>
                <p class="text-white text-lg mt-2">Pagina de Apoyo para mujeres que sufrieron el caso de violacion. Registra el caso segun el dni de la afectada</p>
                
                @livewire('search')
            </div>
            
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-2xl mb-6">CONTENIDO</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover"  src="{{asset('img/home/galaxy-g16193c3e3_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Honestidad</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero architecto neque excepturi nihil dolores hic eligendi vel voluptate nisi</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/astronomy-g111fe1c38_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Respeto</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero architecto neque excepturi nihil dolores hic eligendi vel voluptate nisi</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/stars-g7ba7c2e38_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Empatia</h1>
                </header>

                <p class="text-sm text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero architecto neque excepturi nihil dolores hic eligendi vel voluptate nisi</p>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover " src="{{asset('img/home/galaxy-gf03bf2f2e_640.jpg')}}" alt="">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Solidaridad </h1>
                </header>

                <p class="text-sm text-gray-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero architecto neque excepturi nihil dolores hic eligendi vel voluptate nisi</p>
            </article>

        </div>
    </section>

    <section class="mt-24 bg-yellow-400 py-12">
        <h1 class="text-center text-black text-3xl">Get Our Events</h1>
        <p class="text-center  text-black">Find out about events and other news</p>
        <div class="flex justify-center mt-4">
            <a href="" class="bg-rose-500 hover:bg-rose-600 text-white font-bold py-2 px-4 rounded-lg">
                Catalogo de Eventos
            </a>
        </div>
        
    </section>
</x-app-layout>



