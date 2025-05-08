<!DOCTYPE html>
<html>
<head>
    <title>Calculator Package</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="POST" action="/summation">
        @csrf
        <input type="number" name="number1" required placeholder="Enter first number">
        <input type="number" name="number2" required placeholder="Enter second number">
        <button type="submit">Calculate</button>
    </form>

    @isset($sum)
        <h2>Sum: {{ $sum }}</h2>
    @endisset
</body>
</html>
