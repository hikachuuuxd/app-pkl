@extends('layouts.main')
@section('container')
<div class="h-full ml-14 mt-14 mb-10 md:ml-64">
    <div class="container">
        <h3 class="uppercase text-2xl m-6">Jurnal Siswa</h3>
        <hr class=" w-screen">
    </div>


    <div class="overflow-x-auto">
        {{-- <button class="p-4 m-4 bg-purple-200 rounded hover:bg-purple-800 hover:text-white"><a href="{{ route('jurnal.create') }}">Tambah Jurnal</a></button> --}}
        <div class="max-w-screen max-h-screen flex items-center justify-center  font-sans overflow-hidden">
            <div class="w-full lg:w-[90%]">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">No</th>
                                <th class="py-3 px-6 text-left">Tanggal</th>
                                <th class="py-3 px-6 text-left">Isi</th>
                                <th class="py-3 px-6 text-center">Image</th>
                                <th class="py-3 px-6 text-center">Status</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @if(count($jurnals) == 0)
                            <tr >
                                <td colspan="5" class="p-2 flex justify-center text-center"> {{ 'Data tidak ditemukan' }}</td>
                            </tr>
                            @else
                          @foreach ( $jurnals as $jurnal )
                    
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                  {{$loop->iteration}}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    {{  $jurnal->tanggal }}
                                </td>
                                <td class="py-3 px-6 text-left">
                                    
                                  {{ $jurnal->isi }}
                               
                                </td>
                                <td class="py-3 px-6 text-center">
                                
                                    @foreach ($jurnal->images as $image)
                                        <div class="w-10 h-10 inline-block "><img src="{{ asset('storage/' .$image->image) }}" alt=""></div>
                                    @endforeach
                              
                                </td>
                                <td class="py-3 px-6 text-center">
                                @if ($jurnal->konfirmasi == 0)
                                <span class="bg-red-400 text-white py-1 px-3 rounded-full text-xs">Belum Terkonfirmasi</span>
                                @else
                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Terkonfirmasi</span>
                                @endif

                               
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      </div>


</div>


@endsection