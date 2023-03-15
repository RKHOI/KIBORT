<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Forest Landing Page | Nothing4us </title>
    <link rel="stylesheet" href="css/home.css">

</head>

<body>
    <!-- partial:index.partial.html -->

    <head>
        <title>Parallax Scrolling Website</title>
    </head>

    <body>
        <header id="header">
            <a href="#" class="logo">Forest</a>
            <ul>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Destination</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </header>

        <Section>
            <h2 id="text"><span>It's time for a new</span><br>Adventure</h2>

            <img src="https://user-images.githubusercontent.com/65358991/170092504-132fa547-5ced-40e5-ab64-ded61518fac2.png" id="bird1">
            <img src="https://user-images.githubusercontent.com/65358991/170092542-9747edcc-fb51-4e21-aaf5-a61119393618.png" id="bird2">
            <img src="https://user-images.githubusercontent.com/65358991/170092559-883fe071-eb4f-4610-8c8b-a037d061c617.png" id="forest">

            <a href="#" id="btn">Explore</a>

            <img src="https://user-images.githubusercontent.com/65358991/170092605-eada6510-d556-45cc-b7fa-9e4d1d258d26.png" id="rocks">
            <img src="https://user-images.githubusercontent.com/65358991/170092616-5a70c4af-2eed-496f-bde9-b5fcc7142a31.png" id="water">
        </Section>

        <div class="sec">
            <h2>Parallax Scrolling Effects</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Est pellentesque elit ullamcorper dignissim cras tincidunt lobortis. Pellentesque elit eget gravida cum sociis. Id aliquet lectus proin nibh nisl condimentum id. Vestibulum lectus mauris ultrices eros in cursus turpis massa. Amet facilisis magna etiam tempor orci eu lobortis elementum. Proin libero nunc consequat interdum varius sit amet mattis vulputate. Lacus sed turpis tincidunt id. At augue eget arcu dictum. Tempor id eu nisl nunc. Sem fringilla ut morbi tincidunt. Bibendum est ultricies integer quis auctor. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus. Tortor at risus viverra adipiscing at in tellus. Est lorem ipsum dolor sit amet consectetur. Dui faucibus in ornare quam viverra orci. Sapien faucibus et molestie ac feugiat sed lectus vestibulum mattis. Fringilla est ullamcorper eget nulla facilisi. At varius vel pharetra vel turpis.
                <br><br>
                Nunc congue nisi vitae suscipit tellus mauris a. Pharetra convallis posuere morbi leo urna molestie at elementum. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Arcu odio ut sem nulla pharetra. In pellentesque massa placerat duis ultricies. Blandit massa enim nec dui nunc mattis enim. Sit amet facilisis magna etiam tempor orci eu lobortis. Donec ac odio tempor orci dapibus. Sed viverra tellus in hac habitasse platea dictumst. Vulputate dignissim suspendisse in est ante in nibh mauris.
                <br><br>
                Nisi porta lorem mollis aliquam ut. Condimentum mattis pellentesque id nibh tortor id. Sed elementum tempus egestas sed sed risus pretium quam vulputate. Sed pulvinar proin gravida hendrerit lectus a. Risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada. Integer enim neque volutpat ac. Faucibus a pellentesque sit amet porttitor eget dolor. Elementum eu facilisis sed odio. Enim nunc faucibus a pellentesque sit amet porttitor eget. Aliquam ultrices sagittis orci a scelerisque purus. Netus et malesuada fames ac. Iaculis eu non diam phasellus vestibulum lorem sed risus. Gravida in fermentum et sollicitudin.
                <br><br>
                Sed adipiscing diam donec adipiscing. Neque viverra justo nec ultrices. Ipsum suspendisse ultrices gravida dictum fusce ut. Non blandit massa enim nec dui nunc mattis enim. Pellentesque elit eget gravida cum sociis natoque. Massa tincidunt dui ut ornare lectus sit amet. Dapibus ultrices in iaculis nunc sed augue. Turpis massa tincidunt dui ut ornare lectus sit. Consequat nisl vel pretium lectus quam id. Viverra vitae congue eu consequat ac felis donec. Rutrum quisque non tellus orci. Tellus integer feugiat scelerisque varius morbi enim. Lobortis feugiat vivamus at augue. Pellentesque pulvinar pellentesque habitant morbi.
                <br><br>
                Nisi quis eleifend quam adipiscing vitae proin. In fermentum posuere urna nec tincidunt. Massa vitae tortor condimentum lacinia quis. Amet massa vitae tortor condimentum lacinia quis vel eros. Nunc sed augue lacus viverra. In tellus integer feugiat scelerisque. Velit ut tortor pretium viverra suspendisse potenti nullam ac tortor. Lacinia at quis risus sed vulputate odio ut. Eu non diam phasellus vestibulum. Elit sed vulputate mi sit amet mauris. Porta lorem mollis aliquam ut porttitor leo a diam. Orci sagittis eu volutpat odio facilisis. Tellus id interdum velit laoreet. Morbi tincidunt augue interdum velit euismod in. Eget nulla facilisi etiam dignissim diam. Magna fringilla urna porttitor rhoncus dolor purus non enim. Enim lobortis scelerisque fermentum dui. Nisl tincidunt eget nullam non nisi est sit. Eu scelerisque felis imperdiet proin fermentum leo vel orci.
            </p>
        </div>



        <script>
            let text = document.getElementById('text');
            let bird1 = document.getElementById('bird1');
            let bird2 = document.getElementById('bird2');
            let btn = document.getElementById('btn');
            let rocks = document.getElementById('rocks');
            let forest = document.getElementById('forest');
            let water = document.getElementById('water');
            let header = document.getElementById('header');

            window.addEventListener('scroll', function() {
                let value = window.scrollY;

                text.style.top = 50 + value * -.1 + '%';
                bird2.style.top = value * -1.5 + 'px';
                bird2.style.left = value * 2 + 'px';
                bird1.style.top = value * -1.5 + 'px';
                bird1.style.left = value * -5 + 'px';
                btn.style.marginTop = value * 1.5 + 'px';
                rocks.style.top = value * -.12 + 'px';
                forest.style.top = value * .25 + 'px';
                header.style.top = value * .5 + 'px';
            })
        </script>

    </body>
    <!-- partial -->
    <script src="./script.js"></script>

</body>

</html>