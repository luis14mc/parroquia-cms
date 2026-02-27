<footer class="bg-parroquia-darkBg text-parroquia-darkText py-8 px-4 mt-12 text-sm">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6 text-center md:text-left">
        <div>
            <p class="text-parroquia-gold font-bold">Parroquia Cristo Resucitado</p>
            <p class="text-xs">Tegucigalpa, Honduras</p>
        </div>

        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('home') }}" class="hover:text-parroquia-gold transition-colors">Inicio</a>
            <a href="{{ route('sacramentos') }}" class="hover:text-parroquia-gold transition-colors">Sacramentos</a>
            <a href="{{ route('contacto') }}" class="hover:text-parroquia-gold transition-colors">Contacto</a>
            <a href="{{ route('donaciones') }}" class="hover:text-parroquia-gold transition-colors">Donaciones</a>
        </div>

        <div>
            <p class="text-xs">© {{ date('Y') }} Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
