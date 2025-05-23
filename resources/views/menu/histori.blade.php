@extends('layouts.app')
@section('title', 'Histori') {{-- Ini buat title di tab browser --}}
@section('page_title', 'Histori') {{-- Ini buat judul yang tampil di halaman --}}
@section('content')
    <style>
        .icon-wrapper {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            background: rgb(209, 210, 241);
            /* Warna latar belakang */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-wrapper i {
            font-size: 36px;
            /* Ukuran icon */
            color: #4f52ba;
            /* Warna icon */
        }

        .dashboard-header {
            margin-bottom: 10px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .kotak-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 25px;
        }

        .kotak-containerhistori {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 25px;
        }

        .kotak {
            background: rgba(209, 210, 241, 0.316);
            border-radius: 15px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            /* Added border instead of box-shadow */
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .kotak:hover {
            transform: translateY(-5px);
        }

        .kotak-header {
            padding: 20px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .icon-wrapper .material-symbols-outlined {
            font-size: 36px;
            color: white;
        }

        .device-icon {
            background: linear-gradient(135deg, #F59E0B, #D97706);
        }

        .header-text h3 {
            color: black;
            font-size: 18px;
            font-weight: 600;
            margin: 0;
        }

        .kotak-body {
            padding: 20px;
            border-top: 1px solid rgb(209, 210, 241);
        }

        .kotak-body p {
            color: gray;
            font-size: 14px;
            margin-bottom: 15px;
            font-weight: normal;
        }

        .view-btn {
            width: 100%;
            background: #f8fafc;
            color: #4f52ba;
            border: 1px solid #e2e8f0;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .view-btn:hover {
            background: #4f52ba;
            color: white;
            border-color: #4f52ba;
        }

        .view-btn i {
            font-size: 12px;
            transition: transform 0.3s ease;
        }

        .view-btn:hover i {
            transform: translateX(4px);
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .kotak-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <div class="main">
        <div class="container" style="margin-top: 20px;">
            <div id="mainContent" class="kotak-containerhistori">
                <div class="kotak">
                    <div class="kotak-header">
                        <div class="icon-wrapper">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div class="header-text">
                            <h3>Perangkat</h3>
                        </div>
                    </div>
                    <div class="kotak-body">
                        <p>Histori Perangkat</p>
                        <button class="view-btn" onclick="window.location.href='{{ route('histori.perangkat') }}'">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="kotak">
                    <div class="kotak-header">
                        <div class="icon-wrapper">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div class="header-text">
                            <h3>Fasilitas</h3>
                        </div>
                    </div>
                    <div class="kotak-body">
                        <p>Histori Fasilitas</p>
                        <button class="view-btn" onclick="window.location.href='{{ route('histori.fasilitas') }}'">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="kotak">
                    <div class="kotak-header">
                        <div class="icon-wrapper">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div class="header-text">
                            <h3>Alat Ukur</h3>
                        </div>
                    </div>
                    <div class="kotak-body">
                        <p>Histori Alat Ukur</p>
                        <button class="view-btn" onclick="window.location.href='{{ route('histori.alatukur') }}'">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <div class="kotak">
                    <div class="kotak-header">
                        <div class="icon-wrapper">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div class="header-text">
                            <h3>Jaringan</h3>
                        </div>
                    </div>
                    <div class="kotak-body">
                        <p>Histori Jaringan</p>
                        <button class="view-btn" onclick="window.location.href='{{ route('histori.jaringan') }}'">
                            <span>Lihat Detail</span>
                            <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection