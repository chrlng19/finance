<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Chart of Account</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/FMS.png" rel="icon">
  <link href="assets/img/FMS.png" rel="apple-touch-icon">
  <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input[type="text"],
        form select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        form button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        form button[type="submit"]:hover {
            background-color: #0056b3;
        }
        a.cancel-link {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        a.cancel-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Add New Account</h1>
    <table>
  <tbody>
    <tr>
      <td>
        <form action="{{ route('accounts.store') }}" method="POST">
          @csrf
          <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">
          </div>
          <div>
            <label for="code">Code:</label>
            <input type="text" id="code" name="code">
          </div>
          <div>
            <label for="type">Type:</label>
            <select name="type" id="type">
              <option value="asset">Asset</option>
              <option value="liability">Liability</option>
              <option value="equity">Equity</option>
              <option value="income">Income</option>
              <option value="expense">Expense</option>
            </select>
          </div>
          <button type="submit">Save</button>
        </form>
      </td>
    </tr>
    <tr>
      <td>
        <a href="{{ route('accounts.index') }}">Cancel</a>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
