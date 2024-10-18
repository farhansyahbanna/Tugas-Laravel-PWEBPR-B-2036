@extends('components.template')

@section('title', 'Contact Mahasiswa')

@section('header', 'Daftar Mahasiswa')

@section('content')
    <h2 class="text-xl font-bold mb-4">Data Mahasiswa</h2>

    @php
        $students = [
            ['name' => 'Andi Saputra', 'nim' => '123456789', 'email' => 'andi@example.com'],
            ['name' => 'Budi Santoso', 'nim' => '987654321', 'email' => 'budi@example.com'],
            ['name' => 'Citra Anggraini', 'nim' => '234567891', 'email' => 'citra@example.com'],
            ['name' => 'Dewi Lestari', 'nim' => '876543210', 'email' => 'dewi@example.com'],
        ];
    @endphp

    @include('components.table', ['students' => $students])
@endsection

@section('footer', 'ContactApp Mahasiswa © 2024')
