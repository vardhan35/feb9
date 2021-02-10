<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>feb9</title>
</head>

<body>
    <header>
        <h2>This Is my Blog Page</h2>
        <nav class="navbar">
            <ul class="navlist">
                <li><a href="index.html">home</a></li>
                <li><a href="#about">about me</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </nav>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </header>
    <section>
        <div class="container" id="about">
            <h2>About me</h2>
            <img src="joker.png" alt="my picture">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi incidunt corrupti reiciendis atque
                eveniet unde, perferendis optio tempora doloremque, minima molestiae hic architecto mollitia quibusdam
                voluptates nemo dignissimos tempore! Quasi neque dicta sapiente quas numquam. Enim magnam deleniti
                maxime nostrum amet, reprehenderit natus inventore, sequi, facilis ipsa et mollitia temporibus? Lorem
                ipsum dolor sit amet consectetur, adipisicing elit.
                Tempore assumenda quas ex unde minus! Nam optio odit animi eius ipsum!
            </p>

        </div>
    </section>

    <section>
        <form class="container container-contact" id="contact" action="contact.php" method="post">
            <input type="text" name="name" placeholder="write your name here">
            <input type="text" name="email" placeholder="write your email here">
            <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
            <button type="submit">submit here</button>
        </form>
    </section>

    <footer>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto
            distinctio non eum! Ullam, quod! Quasi
            mollitia natus sint sapiente quod! ipsum dolor
            sit amet consectetur, adipisicing elit. Unde, fugit?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Amet error dolores animi non recusandae, quidem beatae?
            Quae facere perspiciatis est. ipsum dolor sit, amet
            consectetur adipisicing elit. Et, laudantium.</p>
    </footer>
    <script>

        burger = document.querySelector('.burger')
        navbar = document.querySelector('.navbar')
        navlist = document.querySelector('.navlist')


        burger.addEventListener('click', () => {
            navbar.classList.toggle('navbar');
            navlist.classList.toggle('navlist');
        })
    </script>

    <?php
    
    
    ?>
</body>

</html>