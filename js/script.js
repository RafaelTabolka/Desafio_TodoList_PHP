const titleTodo = document.querySelector("#title-todo");
const form = document.querySelector("#main-form");
const formEdit = document.querySelector("#form-edit");
const footerForm = document.querySelector("#footer-form");

$(document).ready(function () {
  //Mostrar Itens
  function showData() {
    $.ajax({
      url: "show.php",
      type: "get",
      success: function (result) {
        $("#data").html(result);
      },
    });
  }
  showData();

  // Calcular total de tarefas
  function totalTask() {
    $.ajax({
      url: "task.php",
      type: "post",
      success: function (result) {
        $("#total-task").html(result);
      },
    });
  }
  totalTask();

  //Inserir Item
  $("#btn").on("click", function (e) {
    e.preventDefault();
    txt = $("#txt").val();
    const hasInput = document.getElementById("txt").value;

    if (hasInput.trim() != "") {
      $.ajax({
        url: "insert.php",
        type: "post",
        data: { txt: txt },
        success: function (result) {
          if (result == 1) {
            alert("Tarefa adicionada com sucesso.");
            showData();
            totalTask();
            txt4 = $("#txt").val("");
          } else {
          }
        },
      });
    } else {
      alert("Digite sua tarefa!");
    }
  });

  // Deletar Item
  $(document).on("click", "#delete", function () {
    id = $(this).data("id");
    element = $(this);
    const userChoice = confirm("Deseja realmente excluir?");

    if (userChoice) {
      $.ajax({
        url: "delete.php",
        type: "post",
        data: { id: id },
        success: function (result) {
          if (result == 1) {
            $(element).closest("li").fadeOut();
            showData();
            totalTask();
          }
        },
      });
    }
  });

  // Deletar Itens
  $(document).on("click", "#clear", function () {
    const dataList = document.getElementById("data").children.length;
    if (dataList > 0) {
      const userChoice = confirm("Deseja excluir todas as tarefas?");
      if (userChoice) {
        $.ajax({
          url: "clear.php",
          type: "post",
          success: function (result) {
            if (result == 1) {
              showData();
              totalTask();
            }
          },
        });
      }
    } else {
      alert("Não há tarefas para serem excluídas!");
    }
  });

  // Atualizar Item
  $(document).on("click", "#update", function (e) {
    e.preventDefault();
    txtTodoList = $(this).data();
    document.getElementById("txt-edit").value = txtTodoList.txt;
    showFormEdit();
  });

  $(document).on("click", "#btn-update", function (e) {
    e.preventDefault();
    idUpdate = txtTodoList.id;
    newValue = document.getElementById("txt-edit").value;

    $.ajax({
      url: "update.php",
      type: "post",
      data: {
        idUpdate,
        txtUpdate: newValue,
      },
      success: function (result) {
        if (result == 1) {
          showData();
          totalTask();
          showFormEdit();
        }
      },
    });
  });

  // Marca ou desmarca a tarefa
  $(document).on("click", "#check", function (e) {
    e.preventDefault();
    spanTodoList = $(this).data();
    updateIdTask = spanTodoList.id;
    isDone = spanTodoList.done;

    $.ajax({
      url: "update_is_done.php",
      type: "post",
      data: {
        updateIdTask,
        isDone,
      },
      success: function (result) {
        if (result == 1) {
          showData();
        }
      },
    });
  });
});

// Alternar entre formulário de cadastro e de edição das tarefas
const showFormEdit = () => {
  titleTodo.classList.toggle("form-display");
  form.classList.toggle("form-display");
  formEdit.classList.toggle("form-display");
  footerForm.classList.toggle("form-display");
};

$(document).on("click", "#btn-cancel-edit", (e) => {
  e.preventDefault();
  showFormEdit();
});
