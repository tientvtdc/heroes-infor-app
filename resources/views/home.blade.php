@extends('layouts.app')

@section('content')
<div class="container mx-auto min-h-screen  flex py-4 flex-wrap">
    <div class="md:h-screen md:fixed bg-white left-0 top-12">
        <div class="flex flex-col w-full md:w-64  p-4 mb-2 md:mb-0 md:mr-2 max-h-[90%]">
            <h2 class="text-xl font-semibold mb-4">Tìm kiếm</h2>
            <input type="text" class="border border-gray-300 rounded-md p-2 mb-4 __input-seach-name" placeholder="Nhập từ khóa...">
            <ul class="space-y-2 __list-search-result overflow-y-auto">
            </ul>
        </div>
    </div>
    <div class="w-full md:w-auto md:flex-grow  min-h-screen md:ml-64">
        <!-- <div id="draggable-element" class="bg-red-500 w-16 h-16" interact></div> -->
        <h2 class=" text-2xl mt-2 font-semibold pb-2 border-b-2 border-gray-400 ml-4">Thông tin liệt sỹ</h2>
        <div class="__martyrs-information-block px-12 mt-2"></div>
        <h2 class=" text-2xl mt-6 font-semibold pb-2 border-b-2 border-gray-400 ml-4">Vị trí mộ trên bản đồ</h2>
        <div id="map" class="w-[1000px] h-4/5 screen mx-auto mt-4"></div>
    </div>
</div>
@endsection

@section('script')
<script>
        const imageUrl = "{{ asset('images/map.jpg') }}";
</script>
@vite('resources/js/search.js')
@endsection