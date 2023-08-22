<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Employ</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
  <!-- Container -->
  <div class="container">
    <header id="title-todo">
      <h1>Crie uma Tarefa</h1>
    </header>

    <!-- Todo -->
    <form id="main-form" class="form">
      <div class="input-box">
        <input type="text" id="txt" placeholder="Adicione sua tarefa" required />
        <button id="btn">
          <i class="fa fa-plus"></i>
        </button>
      </div>
    </form>

    <!-- Edit form -->
    <div id="form-edit" class="form-display">
      <h1 id="title-todo-edit">Editar Tarefa</h1>
      <form id="form-edit">
        <div class="input-box-edit">
          <input type="text" id="txt-edit" />

          <button id="btn-update">
            <i class="fa fa-check-double"></i>
          </button>

        </div>
      </form>

      <div class="footer">
        <button id="btn-cancel-edit">Cancelar</button>
      </div>
    </div>

    <!-- Tarefas -->
    <div id="footer-form">
      <ul id="data"></ul>

      <!-- Footer -->
      <div class="footer">
        <p id="total-task"></p>
        <button id="clear">Limpar</button>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>