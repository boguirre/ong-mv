<x-app-layout>
    <div class="container py-6">
        <div class="card">
            <div class="card-body">
                <h1 class="text-2xl font-bold ">FORMULARIO ACCION POR IGUALDAD</h1>

                <hr class="mt-2 mb-6">

                <div class="pt-2 relative mx-auto text-gray-600">
                    <input  class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm hover:border-rose-500"
                    id="documento" placeholder="Buscar DNI" autocomplete="off" type="number" min="1" max="999999999999" onkeypress="return solonumeros(event)">
                
                    <button type="button" id="buscar" class="bg-rose-500 hover:bg-rose-600 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                        Buscar
                    </button>
                </div>

                {{-- <form class="pt-2 relative mx-auto text-gray-600" autocomplete="off">
                    <input  class="w-full border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none"
                    name="search" placeholder="Buscar">
                
                    <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded absolute right-0 top-0 mt-2">
                        Buscar
                    </button>
                </form> --}}

                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 gap-4 mt-4">
                    <div>
                        {!! Form::label('category_id', 'DNI') !!}
                        {!! Form::text('subtitle', null, ['class' => 'form-input rounded-lg  block w-full mt-1' . ($errors->has('subtitle') ? ' border-red-600' : ''), 'autocomplete'=>'off', 'id'=>'dni', 'disabled']) !!}
                    </div>
                    <div>
                        {!! Form::label('level_id', 'Nombres') !!}
                        {!! Form::text('subtitle', null, ['class' => 'form-input rounded-lg block w-full mt-1' . ($errors->has('subtitle') ? ' border-red-600' : ''), 'autocomplete'=>'off', 'id'=>'nombres', 'disabled']) !!}
                    </div>
                    <div>
                        {!! Form::label('price_id', 'Apellido Paterno') !!}
                        {!! Form::text('subtitle', null, ['class' => 'form-input rounded-lg block w-full mt-1' . ($errors->has('subtitle') ? ' border-red-600' : ''), 'autocomplete'=>'off', 'id'=>'apellidopat', 'disabled']) !!}
                    </div>
                    <div>
                        {!! Form::label('price_id', 'Apellido Materno') !!}
                        {!! Form::text('subtitle', null, ['class' => 'form-input rounded-lg block w-full mt-1' . ($errors->has('subtitle') ? ' border-red-600' : ''), 'autocomplete'=>'off', 'id'=>'apellidomat', 'disabled']) !!}
                    </div>
                </div>

                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 gap-4 mt-4">

                    <div>
                        {!! Form::label('identida_label', '¿Como te Identificas?') !!}
                        {!! Form::select("identidad_id", ['Mujer Cis', 'Mujer Trans', 'Hombre Cis', 'Hombre Trans'], null, ['class' => 'form-input rounded-lg block w-full mt-1']) !!}
                    </div>

                    <div>
                        {!! Form::label('nombresocial_label', 'Nombre Social') !!}
                        {!! Form::text('nombresocial', null, ['class' => 'form-input rounded-lg block w-full mt-1', 'onkeypress'=> 'return soloLetrasTildesNombreCampo(event)']) !!}
                    </div>
                    <div>
                        {!! Form::label('fecha_naci_label', 'Fecha de Nacimiento') !!}
                        {!! Form::date('fecha_naci', null, ['class' => 'form-input rounded-lg block w-full mt-1']) !!}
                    </div>
                    <div>
                        {!! Form::label('estadocivil_label', 'Estado Civil') !!}
                        {!! Form::select("estadocivil", ['Casado(a)', 'Divorciado(a)', 'Soltero(a)'], null, ['class' => 'form-input rounded-lg block w-full mt-1']) !!}
                    </div>

                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 gap-4 mt-4">
                    <div>
                        {!! Form::label('lugnaci_label', 'Lugar de Nacimiento') !!}
                        {!! Form::select('lugar_nacimiento', ['Lima'], null, ['class' => 'form-input rounded-lg block w-full mt-1']) !!}
                    </div>
                    <div>
                        {!! Form::label('lugarresi_label', 'Lugar de Residencia') !!}
                        {!! Form::select('lugar_residencia', ['Lima'], null, ['class' => 'form-input rounded-lg block w-full mt-1']) !!}
                    </div>
                    <div>
                        {!! Form::label('nacio_label', 'Nacionalidad') !!}
                        {!! Form::text('nacionalidad', null, ['class' => 'form-input rounded-lg block w-full mt-1', 'onkeypress'=> 'return soloLetrasTildesNombreCampo(event)']) !!}
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 gap-4 mt-4">
                    <div>
                        {!! Form::label('email_label', 'Correo Electronico') !!}
                        {!! Form::text('email', null, ['class' => 'form-input rounded-lg block w-full mt-1']) !!}
                    </div>
                    <div>
                        {!! Form::label('telefono_label', 'Telefono(Opcional)') !!}
                        {!! Form::text('telefono', null, ['class' => 'form-input rounded-lg block w-full mt-1', 'onkeypress'=> 'return solonumeros(event)']) !!}
                    </div>
                    <div>
                        {!! Form::label('profesion_label', 'Profesion u Ocupacion') !!}
                        {!! Form::select('profesion', ['Ingeniero', 'Profesor'], null, ['class' => 'form-input rounded-lg block w-full mt-1']) !!}
                    </div>
                </div>

                <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 xs:grid-cols-1 gap-4 mt-4">
                    <div>
                        {!! Form::label('grado_label', 'Grado de Instruccion') !!}
                        {!! Form::select('grado', ['Egresado', 'Bachiller'], null, ['class' => 'form-input rounded-lg block w-full mt-1']) !!}
                    </div>
                    <div>
                        {!! Form::label('situacion_label', 'Situacion Laboral') !!}
                        {!! Form::select('situacion', ['empleado/a dependiente', 'empleado/a independiente', 'desempleado/a'], null, ['class' => 'form-input rounded-lg block w-full mt-1']) !!}
                    </div>
                    <div id="div1">
                        {!! Form::label('hijos_label', '¿Tienes hijos?') !!}
                        {!! Form::select('selecthijos', ['NO', 'SI'], null, ['class' => 'form-input rounded-lg block w-full mt-1', 'id' => 'selecthijos', 'onchange'=>'javascript:showContent()']) !!}
                    </div>

                    <div id="xxx" style="display: none">
                        {!! Form::label('num_hijos', 'Numero de Hijos') !!}
                        {!! Form::text('numhijos', null, ['class' => 'form-input rounded-lg block w-full mt-1', 'onchange'=>'javascript:showContent()', 'id'=>'numh', 'onkeypress'=> 'return solonumeros(event)']) !!}
                    </div>
                </div>

                <div class="flex justify-end mt-4">
                    {!! Form::submit('Guardar Informacion', ['class' => 'btn btn-primary cursor-pointer rounded-lg']) !!}
                </div>
                
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script type="text/javascript">
            function showContent() {
                var div2 = document.getElementById("xxx");
                var numtext = document.getElementById("numh");
                var select = document.getElementById("selecthijos");
                if (select.value == "NO") {
                    div2.style.display='none';
                    numtext.style.display='none';
                }
                else {
                    div2.style.display='block';
                    

                }
            }
        </script>

        {{-- <script>
            function solonumeros(e){
                key=e.keyCode || e.which;
                teclado= String.fromCharCode(key);
        
                numero="0123456789";
        
                especiales="8-37-38-46";//array
        
                teclado_especial=false;
        
        
                for(var i in especiales){
        
                    if(key==especiales[i]){
                        teclado_especial=true;               
                    }
                }
        
                if(numero.indexOf(teclado)==-1 && !teclado_especial){
        
                    return false;
        
        
                }
            }
        
        </script> --}}

        
        {{-- <script>

            function soloLetrasTildesNombreCampo(e) {
            try {
                key = window.event ? e.which : e.keyCode;
                
                tecla = String.fromCharCode(key).toLowerCase();
                
                /*
                    * 8 - backspace
                    */
                especiales = [8];
                tecla_especial = false;
                for (var i in especiales) {
                    if (key === especiales[i]) {
                        tecla_especial = true;
                        break;
                    }
                }
        
                //Sólo se permite letras, tildes, ñ y espacio en blanco
                if (!/[a-zäëïöüáéíóúáéíóúâêîôûàèìòù\u00f1\u00d1\s]/.test(tecla) && !tecla_especial) {
                    return false;
                }
            } catch (error) {
                console.log(error);
            }
        }
        </script> --}}
        
        <script src="{{asset('js/api/api.js')}}"></script>
    </x-slot>

</x-app-layout>