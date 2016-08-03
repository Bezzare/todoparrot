<!DOCTYPE html>
<html>
<head>
    <title>Welcome to TODOParrot</title>
</head>
<body>
    <h1>Welcome to TODOParrot</h1>
    {{-- Output the $name variable. --}}
    <p>{{ $name or "Hank Chen" }}</p>

    {{ 'My list <script>alert("spam spam!")</script>' }}

    <ul>
      @forelse ($lists as $list)
        <li>{{ $list }}</li>
      @empty
        <li>None lists saved.</li>
      @endforelse
    </ul>
</body>
</html>