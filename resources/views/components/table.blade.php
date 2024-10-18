<table class="min-w-full bg-white border-collapse border border-gray-300">
    <thead>
        <tr>
            <th class="py-2 px-4 border-b">No</th>
            <th class="py-2 px-4 border-b">Nama</th>
            <th class="py-2 px-4 border-b">NIM</th>
            <th class="py-2 px-4 border-b">Email</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $index => $student)
            <tr class="{{ $loop->odd ? 'bg-gray-100' : 'bg-white' }}">
                <td class="py-2 px-4 border-b">{{ $index + 1 }}</td>
                <td class="py-2 px-4 border-b">{{ $student['name'] }}</td>
                <td class="py-2 px-4 border-b">{{ $student['nim'] }}</td>
                <td class="py-2 px-4 border-b">{{ $student['email'] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
