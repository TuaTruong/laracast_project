@props(["trigger"])

<div x-data="{ show: false }" class="py-2 pl-3 pr-9 text-sm font-semibold" class="display:none">
    <div @click ="show=!show">
        {{$trigger}}
    </div>

    <div x-show="show" class="py-2 absolute bg-gray-100 w-full mt-2 rounded-xl left-0 top-17 rounded-xl z-50 max-h-52 overflow-auto" style="display:none">
        {{$slot}}
    </div>
</div>
