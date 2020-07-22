<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <x-head/>
    
    <body>
        <x-header/>

        <x-main title="$pageTitle ?? ''"/>

        <x-footer/>
  	</body>
    
    <x-deferred/>
</html>