<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
</head>
<body>
    <h1>Account Details</h1>
    <p><strong>ID:</strong> {{ $account->id }}</p>
    <p><strong>Name:</strong> {{ $account->name }}</p>
    <p><strong>Code:</strong> {{ $account->code }}</p>
    <p><strong>Type:</strong> {{ $account->type }}</p>
    <a href="{{ route('dashboard') }}">Back to Chart of Accounts</a>
</body>
</html>
