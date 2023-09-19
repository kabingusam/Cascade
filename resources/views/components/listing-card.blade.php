<div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
    @props(['listing'])
    <x-card style="background-color: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <div style="display: flex; flex-direction: column;">

            <!-- Image (visible on smaller screens) -->
            <div style="display: none; align-items: center; margin-bottom: 1rem;">
                <img class="w-64 h-64 rounded-md" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
            </div>

            <!-- Details -->
            <div style="display: flex; flex-direction: column; justify-content: center;">

                <!-- Image (visible on larger screens) -->
                <div style="align-items: center; display: flex; margin-bottom: 1rem;">
                    <a href="/listings/{{$listing->id}}"> <img class="h-64 rounded-md mr-6" src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" style="width: auto; max-width: 100%;"></a>
                </div>

                <h3 style="font-size: 2rem; color: #333;">
                    <a href="/listings/{{$listing->id}}" style="color: blue;">{{$listing->title}}</a>
                </h3>
                <!-- <div style="font-size: 1.0rem; font-weight: bold; margin-bottom: 0.75rem; color: #777;">{{$listing->company}}</div> -->

                <!-- enables access to the tags component -->
                <x-listing-tags :tagsCsv="$listing->tags" />

                <div style="font-size: 1.25rem; margin-top: 1rem; color: #ff9900;">
                    <span>Price ksh {{$listing->price}}</span>
                </div>
            </div>
        </div>
    </x-card>
</div>

<style>
@media (min-width: 768px) {
    /* Apply styles for larger screens */
    .grid-layout {
        display: grid;
        grid-template-columns: 1fr 2fr; /* Adjust the column ratio as needed */
    }
}
</style>
