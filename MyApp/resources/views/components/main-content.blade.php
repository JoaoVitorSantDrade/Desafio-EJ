<x-layout-main>
    <h1>A EcompJr</h1> <!--Depende da pagina-->
    <div class="flex-row">
        @unless(count($thoughts) == 0)

        @foreach($thoughts as $thought)
        <!--Pensamentos-->
        <x-enterprise-thoughts :thought="$thought"/>
        @endforeach
        @else
        <x-thought-not-found/>
        @endunless
    </div>
</x-layout-main>