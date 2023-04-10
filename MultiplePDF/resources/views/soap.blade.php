<!-- resources/views/soap.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>SOAP Test</title>
</head>
<body>
    <h1>SOAP Test</h1>
    @if(isset($result))
        <p>El Resultado de la suma es: {{ $result }}</p>
    @endif
    <form method="POST" action="{{ route('soap') }}">
        @csrf
        <label for="intA">intA:</label>
        <input type="number" name="intA" id="intA"><br>
        <label for="intB">intB:</label>
        <input type="number" name="intB" id="intB"><br>
        <button type="submit">Add</button>
    </form>
</body>
</html>
