<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    /**
     * Handle the logout request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        // Log out the user
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token to prevent CSRF attacks
        $request->session()->regenerateToken();

        // Clear all cookies by setting them with a past expiration date
        foreach ($request->cookies as $cookieName => $cookieValue) {
            setcookie($cookieName, '', time() - 3600, '/');
        }

        // Redirect to the login page after logout
        return redirect('/login');
    }
}
