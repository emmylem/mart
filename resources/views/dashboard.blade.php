
<x-app2 :checkUser="$checkUser">
            @if ($checkUser && $checkUser->id == auth()->id())
                <x-welcome2/>
            @else
                <x-welcome :products="$products",   categories = "$categories"/>
            @endif

</x-app2>
