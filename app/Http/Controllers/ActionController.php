<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ActionController extends Controller
{
    public function destroy($model, $id)
    {
        try {
            $modelClass = "App\\Models\\" . $model;
            
            if (!class_exists($modelClass)) {
                return response()->json([
                    'success' => false,
                    'message' => 'Model tidak ditemukan.'
                ], 404);
            }

            $record = $modelClass::findOrFail($id);
            $record->delete();

            return response()->json([
                'success' => true,
                'message' => 'Data berhasil dihapus.'
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            // Handle foreign key constraint violation
            if ($e->getCode() == "23000") {
                return response()->json([
                    'success' => false,
                    'message' => 'Gagal menghapus: Data sedang digunakan di tabel lain.'
                ], 422);
            }
            
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan pada database.'
            ], 500);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus data: ' . $e->getMessage()
            ], 500);
        }
    }
}
