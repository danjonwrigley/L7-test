<aside class="w-2/12 bg-gray-200 border-r-2 border-gray-300 {{ $class ?? '' }}">
    <nav class="nav flex-column">
        {{-- 
            @todo Tailwind is vulnerable of introducing classitis and as such we should extend Tailwind to encapsulate
            the many classes into one bespoke class that references the many Tailwind classes
        --}}
        <a class="nav-link p-3 bg-gray-100 border-b-2" href="#">This is a link</a>
        <a class="nav-link p-3 border-b-2" href="#">This is a link</a>
        <a class="nav-link p-3 bg-gray-100 border-b-2" href="#">This is a link</a>
        <a class="nav-link p-3 border-b-2" href="#">This is a link</a>
    </nav>
</aside>