 <x-layout>
     <x-slot name="title">
         Servizi
     </x-slot>
     <h1>I Miei Servizi</h1>

     <x-lists :services="$services" url="servizio" />

     <x-slot name="extrajs">
         <script src="ciaociao"></script>
     </x-slot>
 </x-layout>
