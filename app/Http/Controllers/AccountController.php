<?php

// app/Http/Controllers/AccountController.php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('account.index', ['accounts' => $accounts]);
    }
 
    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:accounts',
            'type' => 'required|in:asset,liability,equity,income,expense',
        ]);

        $account = Account::create($validatedData);

        return redirect()->route('accounts.index')->with('success', 'Account created successfully!');
    }

    public function show($id)
    {
        $account = Account::findOrFail($id);
        return view('accounts.show', ['account' => $account]);
    }

    // Other methods...

    /**
     * Remove the specified resource from storage.
     *
     * @param 
     * @return 
     */
   public function destroy(Account $account)
   {
       // Delete the account
       $account->delete();

       // Redirect back with a success message or any other action
       return redirect()->back()->with('success', 'Account deleted successfully');
   }

    // Other controller methods (create, store, show, edit, update, destroy)...
}

