<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style>
            .pink {
                    background-color: pink !important;
                    color: white;
                }
                .black {
                    background-color: black !important;
                    color: white;
                }
        
        </style>

    </head>
    <body style="background: olive; display: flex; flex-direction: column; min-height: 100vh; padding: 60px 80px; margin: 0; box-sizing: border-box; justify-content: center;">
        <div style="display: flex; gap: 30px;">
            <a href="/welcome" style="color: white; text-decoration: none;">Home</a>
            <a href="/secondPage" style="color: white; text-decoration: none;">About</a>
            <a href="/thirdPage" style="color: white; text-decoration: none;">Contact</a>
        </div>
        
        <h1 style="font-size: 70px; color: white;">
            <?= $title ?>
        </h1>
        <button onclick= "gantiWarna()" style= "width: 100%; max-width: 100px; padding: 10px"> Ganti Warna</button>

        <table style="border-collapse: collapse; width: 100%; max-width: 200px; border: 1px solid rgba(0, 0, 0, 0.7)">

        @for ($i = 1; $i <= 8; $i++) 
            <tr>
                @for ($j = 1; $j <= 8; $j++) 

                    @if ($j == 1)
                        <td style= "background-color: red; padding: 1px 1px; vertical-align: top; line-height: 1.4; width = 1px; height: 10px"></td>
                    @endif


                    @if ($j % 2 == 0 && $i % 2 != 0)
                        <td class= "black" style= "background-color: black; border: 1px solid rgba(0, 0, 0, 0.7); padding: 10px 12px; vertical-align: top; font-size: 12px; line-height: 1.4; color: white; width = 10px; height: 10px">{{$i}},{{$j}}</td>
                    @elseif ($j % 2 != 0 && $i % 2 == 0)
                        <td class= "black" style= "background-color: blue; border: 1px solid rgba(0, 0, 0, 0.7); padding: 10px 12px; vertical-align: top; font-size: 12px; line-height: 1.4; color: white; width = 10px; height: 10px">{{$i}},{{$j}}</td>
                    @else
                        <td style= "background-color: white; border: 1px solid rgba(0, 0, 0, 0.7); padding: 10px 12px; vertical-align: top; font-size: 12px; line-height: 1.4; color: black;">{{$i}},{{$j}}</td>
                    @endif

                    @if ($j == 8)
                        <td style= "background-color: blue; padding: 1px 1px; vertical-align: top; line-height: 1.4; width = 1px; height: 10px"></td>
                    @endif
                @endfor
            </tr>

        @endfor

        </table>

        <script>
            function gantiWarna(){
                let bidakHitam = document.getElementsByClassName("black");
                let bidakHitamArray = Array.from(bidakHitam)
                bidakHitamArray.forEach(element => {
                    element.classList.remove("black");
                    element.classList.add("pink")
                })
            }
        </script>
    </body>
</html>
