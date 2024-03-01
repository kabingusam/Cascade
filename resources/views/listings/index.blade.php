<x-layout>

@include('partials._hero')
@include('partials._search')
<h7 class="flex flex-col items-center justify-center text-center text:lg">Our Products</h7>
<section class="projects section-padding" id="section_4">
        <div class="container" display="row">
            <div class="row" display="">
                <div class="clearfix"></div>
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing" />
                @endforeach
            </div>
        </div>
</section>
<div class="mt-1 p-1">
    {{$listings->links()}}
</div>
</x-layout>

