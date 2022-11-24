@extends('layout')
@section('content')
<div class="bg-gray-100">
  <table class="bg-black-100">
    <tr>
        <th class="px-4 py-2 border">No</th>
        <th class="px-4 py-2 border">Judul</th>
        <th class="px-4 py-2 border">Konten</th>
        <th class="px-4 py-2 border">Aksi</th>
    </tr>
    <tr>
      @forelse ($konten as $item => $item)
      <th class="px-4 py-2 border"{{ $index + 1}}></th>
      <th class="px-4 py-2 border"{{ $item->judul}}></th>
      <th class="px-4 py-2 border"{{ $item->konten}}></th>
      <th class="px-4 py-2 border">
          <div>
            <a href="">Edit</a>
            <a href="">Delete</a>
          </div>
      </th>
      @empty
          <th colspan="12" class="px-4 py-2 border">tidak ada konten</th>
      @endforelse
    </tr>
    <table>
</div>
@endsection