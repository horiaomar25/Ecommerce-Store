<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    @vite('resources/css/app.css')
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <main class="flex flex-col justify-center items-center">
        <section aria-labelledby="form-heading" class="  w-full">
       
            <form action="/register" method="POST">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Username" class="border w-72 border-black p-2 mt-1"/>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Password" class="border w-full border-black p-2 mt-1"/>
                </div>
                <button type="submit" class="border border-red-700 text-black hover:bg-red-600 hover:text-white py-2 px-4 w-full rounded">Submit</button>
            </form>
        </section>
    </main>
</body>
</html>