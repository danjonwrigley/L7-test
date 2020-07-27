<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <x-head/>
    
    <body>
        <x-header/>

        <x-main title="$pageTitle ?? ''" class="flex">
            <x-admin.sidebar/>
            <x-admin.content/>
        </x-main>

        <x-footer/>
  	</body>
    
    <x-deferred/>
</html>