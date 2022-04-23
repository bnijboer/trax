<x-layout>
    @if ($tracks)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Artist(s)</th>
                    <th>Title</th>
                    <th>Genre(s)</th>
                    <th>Style(s)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tracks as $track)
                    <tr class="odd:bg-white even:bg-gray-200">
                        <td>{{ $track->id }}</td>
                        <td>{{ $track->artists }}</td>
                        <td>{{ $track->title }}</td>
                        <td>{{ $track->genres }}</td>
                        <td>{{ $track->styles }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        No tracks...
    @endif
    
</x-layout>