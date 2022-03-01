@extends('backend.master')
@section('backend')
<main class="w-full flex-grow p-6">
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <div class="flex flex-wrap">
                {{-- Hello Html --}}
                @if(session('message'))
                    <div id="toast-success" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
                        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="ml-3 text-sm font-normal">{{session('message')}}</div>
                    </div>
                @endif

                {{-- Werning --}}

                <div class="w-full lg:w-full my-6 pr-0 lg:pr-2">
                    <div class="bg-white overflow-auto">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">{{ __('Page Title') }}</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">{{ __('Meta Tag') }}</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">{{ __('Meta Description') }}</th>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">{{ __('Edit') }}</td>
                                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">{{ __('Delete') }}</td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700">
                                @foreach ($metatags as $metatag)
                                    <tr>
                                        <td class="text-left py-3 px-4">{{ $metatag->title_tag }}</td>
                                        <td class="text-left py-3 px-4">{{ $metatag->meta_tag }}</td>
                                        <td class="text-left py-3 px-4">{{ $metatag->site_tagline }}</td>
                                        <td class="text-left py-3 px-4"><a href="{{ route('meta.edit', $metatag->id) }}">Edit</a></td>
                                        <td class="text-left py-3 px-4"><a onclick="return confirm('Are you sure?')" href="{{ route('meta.delete', $metatag->id) }}">Delete</a></td>
                            
                                @endforeach
                            </tbody>
                        </table>
                        <div class="my-6 pr-0 lg:pr-2">
                            {{ $metatags->links('pagination::tailwind') }}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</main>
@endsection


@section('javascript')

@stop
