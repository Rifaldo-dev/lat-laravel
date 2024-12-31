use Illuminate\Support\Facades\Auth;
use App\Models\User;

public function handle($request, Closure $next)
{
    // Misal login otomatis dengan ID pengguna 1
    $user = User::find(1);
    if ($user) {
        Auth::login($user);
    }

    return $next($request);
}
