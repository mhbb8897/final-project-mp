<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel + jQuery</title>
    @vite(['resources/js/app.js'])
    <!-- Load jQuery dari folder public/js -->
</head>
<body>
    <h1>Hello Laravel + jQuery</h1>

    <script>
        $(document).ready(function() {
            alert("jQuery sudah berhasil di-load!");
        });
    </script>
</body>
</html>
