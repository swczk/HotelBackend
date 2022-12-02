<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>☕ Usuarios</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="Front/styles/main.css">
</head>
<body>
    <header>
        <a class="title" href=""><h1>Hotel Spa Le Calendal</h1></a>
        <section>
            <nav>
            <ul class="tab-container">
                <li><a href="index.php?action=listacomoda">Reservas</a></li>
                <li><a class="tab-selected" href="index.php?action=listacomoda">Acomodações</a></li>
                <li><a class="tab-selected" href="index.php?action=listtarifa">Tarifa</a></li>
                <li><a class="tab-selected" href="index.php?action=listuser">☕ Usuarios</a></li>
               </ul>
            </nav>
          </section>
       
    </header>
    <main>
        <aside>
            <img class="prop-img" src="../Imagens/propag27.jpg" alt="Propaganda">
        </aside>
        <div>
            <h2>Lista de Usuarios</h2>

            <div class="list-acomodacoes">
            <?php
                foreach( $users as $index => $user) : ?>
                    <div>
                        <h3>ID: <?= $user -> id ?></h3>
                        <p>Nome: <?= $user -> nome ?></p>
                        <p>Email: <?= $user ->  email?></p>
                    </div>
            <?php endforeach; ?>
                
            
        </div>

        </div>

        <aside>
            <img class="prop-img" src="../Imagens/propag27.jpg" alt="Propaganda">
        </aside>
    </main>
    <footer>
        <p>
            Hotel Spa Le Calendal - 2022 <br>
            5 Rue Prte de Laure, 13200 Arles, França <br>
            Tel: +33 4 90 96 11 89
            Email: contato@email.com.br
        </p>
    </footer>
    
    
</body>
</html>