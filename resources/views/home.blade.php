@extends('layouts.paratheme.index')

@section('content')
<div class="container">
    <div class="flex justify-between mt-12">@if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('You are logged in!') }}</div>
    <div class="flex justify-between mt-4 space-x-4 s">
      <div class="bg-white w-1/3 rounded-xl shadow-lg flex items-center justify-around">
        <img src="https://i.imgur.com/VHc5SJE.png" alt="" />
        <div class="text-center">
          <h1 class="text-4xl font-bold text-gray-800">534</h1>
          <span class="text-gray-500">Streaming Hoy</span>
        </div>
      </div>
      <div class="bg-white w-1/3 rounded-xl shadow-lg flex items-center justify-around">
        <img src="https://i.imgur.com/Qnmqkil.png" alt="" />
        <div class="text-center">
          <h1 class="text-4xl font-bold text-gray-800">9.7k</h1>
          <span class="text-gray-500">Nuevos Servicios</span>
        </div>
      </div>
      <div class="bg-white w-1/3 rounded-xl shadow-lg flex items-center justify-around">
        <img src="https://i.imgur.com/dJeEVcO.png" alt="" />
        <div class="text-center">
          <h1 class="text-4xl font-bold text-gray-800">50 M</h1>
          <span class="text-gray-500">Revenue</span>
        </div>
      </div>
    </div>
</div>
@endsection
