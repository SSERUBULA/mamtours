<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xxl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="align">

                    {{-- Admin view: show submissions if user is admin --}}
                    @if(Auth::check() && Auth::user()->is_admin)
                        <h3 class="text-lg font-semibold mb-4">Car Rental Form </h3>

                        @if(isset($mains) && $mains->count())
                            <div class="overflow-x-auto">
                                <table class="min-w-full border text-sm">
                                    <thead class="bg-gray-100 text-gray-700">
                                        <tr>
                                            <th class="px-4 py-2 border">ID</th>
                                            <th class="px-4 py-2 border">Full Name</th>
                                            <th class="px-4 py-2 border">Telephone</th>
                                            <th class="px-4 py-2 border">Address</th>
                                            <th class="px-4 py-2 border">Car</th>
                                            <th class="px-4 py-2 border">Submitted</th>
                                            <th class="px-4 py-2 border">Action</th>
                                            <th class="px-4 py-2 border">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mains as $main)
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-4 py-2 border align-top">{{ $main->id }}</td>
                                                <td class="px-4 py-2 border align-top">{{ $main->Full_Name }}</td>
                                                <td class="px-4 py-2 border align-top">{{ $main->Telephone }}</td>
                                                <td class="px-4 py-2 border align-top">{{ $main->Address }}</td>
                                                <td class="px-4 py-2 border align-top">{{ $main->Car }}</td>
                                                <td class="px-4 py-2 border align-top">
                                                    {{ optional($main->created_at)->format('Y-m-d H:i') ?? '-' }}
                                                </td>
                                                <td class="px-4 py-2 border align-top">
                                                  <a href="{{route('edit',$main->id)}}"><button>Edit</button></a>
                                                </td>
                                                <td class="px-4 py-2 border align-top">
                                                  <form action="{{ route('mains.destroy', $main->id) }}" method="POST">
                                                     @csrf
                                                     @method('DELETE')
                                                    <button>delete</button>
                                                   </form>    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            {{-- pagination links (if $mains is a paginator) --}}
                            @if(is_object($mains) && method_exists($mains, 'links'))
                                <div class="mt-4">
                                    {{ $mains->links() }}
                                </div>
                            @endif

                        @else
                            <p class="text-gray-600">No submissions found.</p>
                        @endif

                    {{-- Non-admin / normal users --}}
                    @else
                        <div class="text-gray-700">
                            ACCESS DENIED!
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
