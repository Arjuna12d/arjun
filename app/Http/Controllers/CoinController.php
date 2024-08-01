<?php
namespace App\Http\Controllers;

use App\Models\Coin;
use Illuminate\Http\Request;

class CoinController extends Controller
{
    public function index()
    {
        // Ambil jumlah saldo dari tabel coins
        $totalCoins = Coin::sum('amount');
        
        // Format jumlah saldo
        $formattedCoins = number_format($totalCoins, 0, ',', '.');

        return view('dashboard', compact('formattedCoins'));
    }
}
