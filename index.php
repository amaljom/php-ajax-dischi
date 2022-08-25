<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VUE DISCHI PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>
<header>
    <div class="nav">
        <img class="width-image-header" src="img/Spotify_logo_without_text.svg.png" alt="">
    </div> 
</header>

<main>
    <div class="main-background">
        <div class="row col-8 mx-auto pt-5">
            <div class="p-0 d-flex flex-wrap justify-content-between">
                <div class="card-size p-3 bg-card my-2 text-white">
                    <div>
                        <img class="card-img" :src="disc.poster" alt="non trovato">
                    </div>
                
                    <div class="text-center pt-2">
                        <h4>{{disc.title}}</h4>
                        <span class="pt-1 text-class">{{disc.author}}</span>
                        <p class="text-class">{{disc.year}}</p>
                    </div>
                </div>
                <div class="card-size p-3 bg-card my-2 text-white">
                    <div>
                        <img class="card-img" :src="disc.poster" alt="non trovato">
                    </div>
                
                    <div class="text-center pt-2">
                        <h4>{{disc.title}}</h4>
                        <span class="pt-1 text-class">{{disc.author}}</span>
                        <p class="text-class">{{disc.year}}</p>
                    </div>
                </div>
                <div class="card-size p-3 bg-card my-2 text-white">
                    <div>
                        <img class="card-img" :src="disc.poster" alt="non trovato">
                    </div>
                
                    <div class="text-center pt-2">
                        <h4>{{disc.title}}</h4>
                        <span class="pt-1 text-class">{{disc.author}}</span>
                        <p class="text-class">{{disc.year}}</p>
                    </div>
                </div>
                <div class="card-size p-3 bg-card my-2 text-white">
                    <div>
                        <img class="card-img" :src="disc.poster" alt="non trovato">
                    </div>
                
                    <div class="text-center pt-2">
                        <h4>{{disc.title}}</h4>
                        <span class="pt-1 text-class">{{disc.author}}</span>
                        <p class="text-class">{{disc.year}}</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</main>

</body>
</html>