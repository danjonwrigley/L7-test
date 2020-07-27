{{-- 
    @todo Tailwind is vulnerable of introducing classitis and as such we should extend Tailwind to encapsulate
    the many classes into one bespoke class that references the many Tailwind classes, using the @extend ability in SASS
--}}
<aside class="sidebar {{ $class ?? '' }}">
    <nav class="nav flex-column">
        <a class="nav-linked-odd" href="#">This is a link</a>
        <a class="nav-linked" href="#">This is a link</a>
        <a class="nav-linked-odd" href="#">This is a link</a>
        <a class="nav-linked" href="#">This is a link</a>
    </nav>
</aside>