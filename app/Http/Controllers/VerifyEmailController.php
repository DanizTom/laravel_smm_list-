use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyEmail;

class VerifyEmailController extends Controller
{
    public function verify($token)
    {
        $user = User::where('email_verification_token', $token)->first();

        if (!$user) {
            return response()->json(['message' => 'Invalid verification token.'], 404);
        }

        $user->email_verified_at = now();
        $user->email_verification_token = null;
        $user->save();

        Auth::login($user);

        return response()->json(['message' => 'Email address verified successfully.']);
    }
}