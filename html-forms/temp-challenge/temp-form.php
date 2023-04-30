<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
</head>

<body>

    <h1>Temperature Converter</h1>
    <form action="temp-processor.php" method="post">
        <input type="text" name="temp">
        <select name="unit">
            <option value="celsius">Convert to Celsius</option>
            <option value="fahrenheit">Convert to Fahrenheit</option>
        </select>
        <select name="decimal">
            <option value="0">Zero decimal</option>
            <option value="1">One decimal</option>
            <option value="2">Two decimal</option>
        </select>
        <input type="submit" name="submit" value="Convert">
    </form>

</body>

</html>