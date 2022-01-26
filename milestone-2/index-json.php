


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DISC</title>
</head>
<body>
    <div id="root">
        <!-- HEADER -->
        <header>
            <div class="logo">
                <img src="img/logo.png" alt="logo spotify">
            </div>
        </header>
        <!-- HEADER -->

        <!-- MAIN -->
        <div class="main-app">
            <div class="container">
                <div class="row row-cols-5">
                    <div v-for="(disc,index) in albums":key="index" class="main-card">
                            <!-- SINGLE CARD -->
                        <div class="single_card">
                            <div class="my_banner">
                                <img :src="disc.poster" :alt="disc.title">
                                <div class="banner_title">
                                    <h2> {{disc.title}} </h2>
                                    <h3> {{disc.author}} </h3>
                                    <h4> {{disc.year}} </h4>
                                </div>
                            </div>
                        </div>
                        <!-- SINGLE CARD -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>