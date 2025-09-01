<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class PesawatController extends Controller
{
    public function index()
    {
        return view('pesawat');
    }

    public function checkout()
    {
        return view('checkout.checkout-pesawat');
    }

    public function processCheckout(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'telepon' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'kursi' => 'required|string|max:10',
            'ktp' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
            'surat_dinas' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
        ], [
            'nama.required' => 'Nama lengkap wajib diisi',
            'telepon.required' => 'Nomor telepon wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'kursi.required' => 'Pilihan kursi wajib diisi',
            'ktp.required' => 'Upload KTP wajib diisi',
            'ktp.file' => 'KTP harus berupa file',
            'ktp.mimes' => 'KTP harus berupa gambar (JPEG, PNG, JPG) atau PDF',
            'ktp.max' => 'Ukuran KTP maksimal 2MB',
            'surat_dinas.required' => 'Upload surat dinas wajib diisi',
            'surat_dinas.file' => 'Surat dinas harus berupa file',
            'surat_dinas.mimes' => 'Surat dinas harus berupa gambar (JPEG, PNG, JPG) atau PDF',
            'surat_dinas.max' => 'Ukuran surat dinas maksimal 2MB',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            // Upload file KTP
            $ktpPath = $request->file('ktp')->store('documents/ktp', 'public');
            
            // Upload file surat dinas
            $suratDinasPath = $request->file('surat_dinas')->store('documents/surat_dinas', 'public');

            // Simpan data ke database (contoh sederhana)
            $bookingData = [
                'nama' => $request->nama,
                'telepon' => $request->telepon,
                'email' => $request->email,
                'kursi' => $request->kursi,
                'ktp_path' => $ktpPath,
                'surat_dinas_path' => $suratDinasPath,
                'status' => 'pending',
                'created_at' => now(),
            ];

            // Di sini Anda bisa menyimpan ke database
            // DB::table('bookings')->insert($bookingData);

            return response()->json([
                'success' => true,
                'message' => 'Data pemesanan berhasil disimpan',
                'data' => $bookingData
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan: ' . $e->getMessage()
            ], 500);
        }
    }

    public function getAvailableSeats()
    {
        // Contoh data kursi yang tersedia
        $availableSeats = [
            'A1', 'A2', 'A3', 'A4', 'A5', 'A6',
            'B1', 'B2', 'B3', 'B4', 'B5', 'B6',
            'C1', 'C2', 'C3', 'C4', 'C5', 'C6',
            'D1', 'D2', 'D3', 'D4', 'D5', 'D6',
        ];

        return response()->json([
            'success' => true,
            'seats' => $availableSeats
        ]);
    }
}
