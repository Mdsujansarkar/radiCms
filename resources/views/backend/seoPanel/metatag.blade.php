@extends('backend.master')
@section('backend')
<main class="w-full flex-grow p-6">
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <main class="w-full flex-grow p-6">
            <a href="{{ URL::to('/setting/view') }}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Setting Edit
            </a>
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
                    <div class="leading-loose">
                        <form class="p-10 bg-white rounded shadow-xl" action="{{ route('web.setting') }}" enctype="multipart/form-data"  method="post">
                            @csrf
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="title">Web Site Title</label>
                                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="title" name="site_title" type="text" placeholder="Web Site Title" aria-label="Web Site Title">
                                
                                    @if($errors->has('site_title'))
                                        <span class="block text-sm text-red-600"><i>{{ $errors->first('site_title') }}<i></span>
                                    @endif
                            </div>
                            <div class="mt-2">
                                <label class="block text-sm text-gray-600" for="site_tagline">Web Site Tagline</label>
                                <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="site_tagline" name="site_tagline" type="text" placeholder="Web Site Tagline" aria-label="Web Site Tagline">
                                    @if($errors->has('site_tagline'))
                                    <span class="block text-sm text-red-600"><i>{{ $errors->first('site_tagline'); }}<i></span>
                                    @endif
                            </div>
                            <div class="mt-6">
                                <button class="w-full px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</main>
@endsection


@section('javascript')
<script>

</script>
@stop
