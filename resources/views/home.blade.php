<x-layout>
    <div class="w-64 mx-auto">
        <form action="{{ route('tracks.store') }}" method="post">
            @csrf
            
            <div class="form-field mb-4">
                <label for="title">Title</label>
                <input id="title" name="title" type="text">
            </div>
            <div class="form-field mb-4">
                <label for="artist">Artist</label>
                <input id="artist" name="artist" type="text">
            </div>
            <div class="form-field mb-4">
                <label for="genre">Genre</label>
                <input id="genre" name="genre" type="text">
            </div>
            <div class="form-field mb-8">
                <label for="style">Style</label>
                <input id="style" name="style" type="text">
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="button-primary">Submit</button>
            </div>
        </form>
    </div>
</x-layout>