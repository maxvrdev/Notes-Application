<div>
    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
        <thead>
        <tr class="text-center font-bold">
            @foreach($headers as $header)
                <td class="border px-6 py-4">{{ $header }}</td>
            @endforeach
        </tr>
        </thead>
        {{ $slot }}
        {{--@foreach($users as $user)
            <tr>
                <td class="border px-6 py-4">{{$user->name}}</td>
                <td class="border px-6 py-4">{{$user->email}}</td>
            </tr>
        @endforeach--}}
    </table>
</div>
