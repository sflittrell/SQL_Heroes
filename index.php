<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>SQL Heroes</title>
  </head>
  <body>
    <h1>SQL Heroes</h1>

    <!-- Optional JavaScript; choose one of the two! -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-12">
          <h1>
            Menu
          </h1>
          <ul>
            <li><a href="/api.php?route=getAllHeroes" target="_blank">Get All Heroes</a><br>
            <em>show all heros</em></li>
            <li><a href="/api.php?route=getHeroByID&hero_id=1" target="_blank">Get Hero By ID</a><br>
            <em>change the id in the address bar to choose the hero</em></li>
            <li><a href="/api.php?route=getAllAbilities" target="_blank">Get All Abilities</a><br>
            <em>show all hero abilities</em></li>
            <li><a href="/api.php?route=getAllHerosAndAbilities" target="_blank">Get All Heros with Abilities</a><br>
            <em>show all hero with their abilities</em></li>
            <li><a href="/api.php?route=updateAndGetAllAbilities" target="_blank">Update Ability</a><br>
            <em>changes super strength</em></li>
            <li><a href="/api.php?route=UndoUpdateAndGetAllAbilities" target="_blank">Undo Update Ability</a><br>
            <em>undo the above ability change</em></li>
             <li><a href="/api.php?route=createHero" target="_blank">Create Hero</a><br>
            <em>creates a new hero</em></li>
            <li><a href="/api.php?route=deleteHero" target="_blank">Delete Hero</a><br>
            <em>deletes the created hero</em></li>
          </ul>
          
        </div>
      </div>
    </div>
    

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>