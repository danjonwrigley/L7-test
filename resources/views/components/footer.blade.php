<footer class="bg-red-400 text-white p-4">
    <span>Copyright &copy; {{ now()->year }}</span>
    {{ $slot }}
    @stack('footer')
</footer>