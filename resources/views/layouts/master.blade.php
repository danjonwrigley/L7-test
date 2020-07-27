<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <x-head/>
    
    <body>
        <x-header/>

        <x-main title="$pageTitle ?? ''" class="p-5"/>

        <x-footer/>
  	</body>
    
    <x-deferred/>
</html>