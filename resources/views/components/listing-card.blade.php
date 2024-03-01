@props(['listing'])
<div class="col-lg-4 col-md-6 col-12">
    <div class="projects-thumb">
        <div class="projects-info">
            <a href="/listings/{{$listing->id}}">
                <small class="projects-tag">{{$listing->title}}</small>
            </a>
        </div>
        <a href="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
            class="popup-image">
            <img src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
                class="projects-image img-fluid" alt="" style="display: grid; aspect-ratio: 1 / 1; width: 100%; object-fit: contain;">  </a>
    </div>
    @auth
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
        <a href="/listings/{{$listing->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl">
            <i class="fas fa-edit"></i> Edit
        </a>
    </td>
    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
        <form method="POST" action="/listings/{{$listing->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500" type="submit">
                <i class="fas fa-trash"></i> Delete
            </button>
        </form>
    </td>
    @endauth
</div>
