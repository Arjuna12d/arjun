<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil ID pengguna yang sedang login
        $userId = auth()->id();

        // Menghitung jumlah koin untuk pengguna tersebut
        $coins = Coin::where('user_id', $userId)->sum('amount');

        // Memformat jumlah koin
        $formattedCoins = number_format($coins, 0, ',', '.');

        // Mengirim data ke view
        return view('dashboard', ['formattedCoins' => $formattedCoins]);
    }
}
