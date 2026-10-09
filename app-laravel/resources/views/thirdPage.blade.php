<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body style="background: olive; display: flex; flex-direction: column; min-height: 100vh; padding: 60px 80px; margin: 0; box-sizing: border-box; justify-content: center;">
        <div style="display: flex; gap: 30px;">
            <a href="/welcome" style="color: white; text-decoration: none;">Home</a>
            <a href="/secondPage" style="color: white; text-decoration: none;">About</a>
            <a href="/thirdPage" style="color: white; text-decoration: none;">Contact</a>
        </div>
        
        <text style="font-size: 70px; color: white;">
            Contact
        </text>

        <text style="font-size: 50px; color: white">
            My name is Michelle
        </text>

        <div style="font-size: 50px; color: white">
            Contact me at
            <a href="https://mail.google.com/mail/u/1/#inbox?compose=jrjtXPWHxvFVTFBgLxVnJJzSNzVqqJDGMsRMXwhnqGLSfmVHRfFgtQcWfLBBHdqqsPFKMZDq">amichelle06@student.ciputra.ac.id</a>
        </div>
    </body>
</html>
