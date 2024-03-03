<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
</head>
<body>
    <h1>Edit Account</h1>
    <form action="{{ route('accounts.update', $account->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ $account->name }}">
        </div>
        <div>
            <label for="code">Code:</label>
            <input type="text" id="code" name="code" value="{{ $account->code }}">
        </div>
        <div>
            <label for="type">Type:</label>
            <select name="type" id="type">
                <option value="asset" {{ $account->type == 'asset' ? 'selected' : '' }}>Asset</option>
                <option value="liability" {{ $account->type == 'liability' ? 'selected' : '' }}>Liability</option>
                <option value="equity" {{ $account->type == 'equity' ? 'selected' : '' }}>Equity</option>
                <option value="income" {{ $account->type == 'income' ? 'selected' : '' }}>Income</option>
                <option value="expense" {{ $account->type == 'expense' ? 'selected' : '' }}>Expense</option>
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('dashboard') }}">Cancel</a>
</body>
</html>
