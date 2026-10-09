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
        
        <h1 style="font-size: 70px; color: white;">
            {{$judul}}
        </h1>

        <div>
            <table style="border-collapse: collapse; width: 100%; max-width: 620px; border: 1px solid rgba(255, 255, 255, 0.7);">
                <tr>
                    <th style="border: 1px solid rgba(255, 255, 255, 0.7); padding: 8px 12px; text-align: left; font-size: 12px; font-weight: bold; color: white;">No</th>
                    <th style="border: 1px solid rgba(255, 255, 255, 0.7); padding: 8px 12px; text-align: left; font-size: 12px; font-weight: bold; width: 22%; color: white;">Project</th>
                    <th style="border: 1px solid rgba(255, 255, 255, 0.7); padding: 8px 12px; text-align: left; font-size: 12px; font-weight: bold; color: white;">Semester</th>
                    <th style="border: 1px solid rgba(255, 255, 255, 0.7); padding: 8px 12px; text-align: left; font-size: 12px; font-weight: bold; color: white;">Description</th>
                </tr>

                @php ($i = 0)
                @foreach ($project as $pro)
                    @php ($i++)
                    <tr>
                        <td style="border: 1px solid rgba(255, 255, 255, 0.7); padding: 10px 12px; vertical-align: top; font-size: 12px; line-height: 1.4; color: white;">{{ $i }}</td>
                        <td style="border: 1px solid rgba(255, 255, 255, 0.7); padding: 10px 12px; vertical-align: top; font-size: 12px; line-height: 1.4; color: white;">{{ $pro }}</td>

                        @if($i%2 == 0)
                             <td style="border: 1px solid rgba(255, 255, 255, 0.7); padding: 10px 12px; vertical-align: top; font-size: 12px; line-height: 1.4; color: white;">EVEN</td>
                        @else
                             <td style="border: 1px solid rgba(255, 255, 255, 0.7); padding: 10px 12px; vertical-align: top; font-size: 12px; line-height: 1.4; color: white;">ODD</td>
                        @endif 


                        @if($i == 6)
                             <td style="border: 1px solid rgba(255, 255, 255, 0.7); padding: 10px 12px; vertical-align: top; font-size: 12px; line-height: 1.4; color: white;">My LAST Project</td>
                        @else
                              <td style="border: 1px solid rgba(255, 255, 255, 0.7); padding: 10px 12px; vertical-align: top; font-size: 12px; line-height: 1.4; color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
    ut labore et dolore magna aliqua. Ut enim ad minim veniam.</td>
                        @endif 
                    </tr>

                @endforeach
            </table>
        </div>
    </body>
</html>
