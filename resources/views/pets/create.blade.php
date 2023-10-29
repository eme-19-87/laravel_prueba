<x-app-layout class="">
    <script src="https://cdn.jsdelivr.net/npm/jquery"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
    <div class="from-gray-200 via-gray-300 to-gray-400 bg-gradient-to-br">
        <div class='flex pt-32 2xl:pt-0 items-center justify-center min-h-screen 2xl:h-auto'>
            <div
                class="relative w-full group max-w-md min-w-0 mx-auto mt-6 mb-6 break-words bg-white md:max-w-sm rounded-xl">
                <div class="pb-6">

                    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


                    <div class="max-w-md w-full space-y-8 p-10 z-10">
                        <div class="grid  gap-8 grid-cols-1">
                            <div class="flex flex-col ">
                                <div class="flex flex-col sm:flex-row items-center">
                                    <h2 class="font-semibold text-lg mr-auto">Registro de Mascota</h2>
                                    <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                                </div>
                                <div class="mt-5">
                                    <form method="POST" action="{{route('pets.store')}}" enctype="multipart/form-data" class="form">
                                        <div class="">
                                            <label class="text-xs font-semibold text-gray-600 py-2">Foto de la mascota<abbr class="hidden" title="required">*</abbr></label>
                                            <div class="flex items-center py-6">
                                                <div class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
                                                    <img class="w-12 h-12 mr-4 object-cover"
                                                        src="https://images.unsplash.com/photo-1611867967135-0faab97d1530?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1352&amp;q=80"
                                                        alt="Avatar Upload">
                                                </div>
                                                <label class="cursor-pointer ">
                                                    <span
                                                        class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-amber-400 hover:bg-amber-500 hover:shadow-lg">Buscar</span>
                                                    <input type="file" class="hidden" :multiple="multiple"
                                                        :accept="accept">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                                            <div class="mb-3 space-y-2 w-full text-xs">
                                                <label class="font-semibold text-gray-600 py-2">Nombre
                                                    <abbr title="required">*</abbr></label>
                                                <input placeholder="Nombre de la mascota"
                                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                    required="required" type="text" name="integration[shop_name]"
                                                    id="integration_shop_name">
                                                <p class="text-red text-xs hidden">Por favor rellena este Campo.
                                                </p>
                                            </div>
                                            <div class="mb-3 space-y-2 w-full text-xs">
                                                <label class="font-semibold text-gray-600 py-2">Raza
                                                    <abbr title="required">*</abbr></label>
                                                <input placeholder="Raza"
                                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                    required="required" type="text" name="integration[shop_name]"
                                                    id="integration_shop_name">
                                                <p class="text-red text-xs hidden">Por favor rellena este Campo.
                                                </p>
                                            </div>
                                        </div>
                                        
                                        <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                                            <div class="w-full flex flex-col mb-3">
                                                <label class="font-semibold text-gray-600 py-2">Edad</label>
                                                <input placeholder="Edad"
                                                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                                                    type="text" name="integration[street_address]"
                                                    id="integration_street_address">
                                            </div>
                                            <div class="w-full flex flex-col mb-3">
                                                <label class="font-semibold text-gray-600 py-2">Ubicacion<abbr
                                                        title="required">*</abbr></label>
                                                <select
                                                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                    required="required" name="integration[city_id]"
                                                    id="integration_city_id">
                                                    <option value="">Corrientes</option>
                                                    <option value="">Misiones</option>
                                                    <option value="">Entre Rios</option>
                                                    <option value="">Buenos Aires</option>
                                                    <option value="">Córdoba</option>
                                                    <option value="">Catamarca</option>
                                                    <option value="">Chaco</option>
                                                    <option value="">Chubut</option>
                                                    <option value="">Formosa</option>
                                                    <option value="">Jujuy</option>
                                                    <option value="">La Pampa</option>
                                                    <option value="">La Rioja</option>
                                                    <option value="">Mendoza</option>
                                                    <option value="">Neuquén</option>
                                                    <option value="">Río Negro</option>
                                                    <option value="">Salta</option>
                                                    <option value="">San Juan</option>
                                                    <option value="">San Juan</option>
                                                    <option value="">Santa Cruz</option>
                                                    <option value="">Santa Fe</option>
                                                    <option value="">Santiago del Estero</option>
                                                    <option value="">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
                                                    <option value="">Tucumán</option>
                                                    <option value="">CABA</option>
                                                </select>
                                                <p class="text-sm text-red-500 hidden mt-3" id="error">
                                                    Por favor rellena este Campo.</p>
                                            </div>
                                           
                                        </div>
                                        <div class="w-full flex flex-col mb-3">
                                            <label class="font-semibold text-gray-600 py-2">Genero<abbr
                                                    title="required">*</abbr></label>
                                            <select
                                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                required="required" name="integration[city_id]"
                                                id="integration_city_id">
                                                <option value="">Masculino</option>
                                                <option value="">Femenino</option>
                            
                                            </select>
                                            <p class="text-sm text-red-500 hidden mt-3" id="error">
                                                Por favor rellena este Campo.</p>
                                        </div>
                                        <div class="w-full flex flex-col mb-3">
                                            <label class="font-semibold text-gray-600 py-2">Tipo<abbr
                                                    title="required">*</abbr></label>
                                            <select
                                                class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full "
                                                required="required" name="integration[city_id]"
                                                id="integration_city_id">
                                                <option value="">Perro</option>
                                                <option value="">Gato</option>
                                                <option value="">Loro</option>
                                                <option value="">Tortuga</option>
                            
                                            </select>
                                            <p class="text-sm text-red-500 hidden mt-3" id="error">
                                                Por favor rellena este Campo.</p>
                                        </div>
                                        <div class="flex-auto w-full mb-1 text-xs space-y-2">
                                            <label class="font-semibold text-gray-600 py-2">Description</label>
                                            <textarea required="" name="message" id=""
                                                class="w-full min-h-[100px] max-h-[300px] h-28 appearance-none block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg  py-4 px-4"
                                                placeholder="Describe a tu mascotas" spellcheck="false"></textarea>
                                        </div>
                                        <p class="text-xs text-red-500 text-right my-3">Los Campos requeridos seran marcados con un asterisco<abbr title="Required field">*</abbr></p>
                                        <div class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                                            <button
                                                class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider  text-gray-600 rounded-full hover:shadow-lg hover:bg-amber-200">
                                                Cancel</button>
                                            <button
                                                class="mb-2 md:mb-0 bg-amber-400 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-amber-500">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="relative h-6 overflow-hidden translate-y-6 rounded-b-xl">
                        <div class="absolute flex -space-x-12 rounded-b-2xl">
                            <div
                                class="w-36 h-8 transition-colors duration-200 delay-75 transform skew-x-[35deg] bg-amber-400/90 group-hover:bg-amber-600/90 z-10">
                            </div>
                            <div
                                class="w-28 h-8 transition-colors duration-200 delay-100 transform skew-x-[35deg] bg-amber-300/90 group-hover:bg-amber-500/90 z-20">
                            </div>
                            <div
                                class="w-28 h-8 transition-colors duration-200 delay-150 transform skew-x-[35deg] bg-amber-200/90 group-hover:bg-amber-400/90 z-30">
                            </div>
                            <div
                                class="w-28 h-8 transition-colors duration-200 delay-200 transform skew-x-[35deg] bg-amber-100/90 group-hover:bg-amber-300/90 z-40">
                            </div>
                            <div
                                class="w-28 h-8 transition-colors duration-200 delay-300 transform skew-x-[35deg] bg-amber-50/90 group-hover:bg-amber-200/90 z-50">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        const URL = window.location;

        function generateQRCode() {
            var qrcode = new QRCode(document.getElementById("qrcode"), {
                text: URL.href,
                width: 300,
                height: 300,
            });
            document.getElementById("generar").className = "hidden";
            let canvas = document.getElementsByTagName("canvas")[0];
            let imageDataURL = canvas.toDataURL("image/png");
            let downloadLink = document.getElementById("download-link");
            downloadLink.href = imageDataURL;
            downloadLink.download = "codigo_qr.png";
            downloadLink.style.display = "block";
        }
    </script>
</x-app-layout>
