<?php
include 'config.php';

$sql = "SELECT * FROM tarefa";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <li>
            <div class="itens-todo">
                <?php if ($row['feito'] == 1) : ?>
                    <span class="done-task" id="span-todo"><?php echo $row['txt']; ?></span>
                <?php else : ?>
                    <span id="span-todo"><?php echo $row['txt']; ?></span>
                <?php endif; ?>

                <button id="check" data-txt="<?php echo $row['txt'] ?>" data-id="<?php echo $row['id'] ?>" data-done="<?php echo $row['feito'] ?>">
                    <i class="fa fa-check"></i>
                </button>

                <button id="update" data-txt="<?php echo $row['txt'] ?>" data-id="<?php echo $row['id'] ?>">
                    <i class="fa fa-pen"></i>
                </button>

                <button id="delete" data-id="<?php echo $row['id'] ?>">
                    <i class="fa fa-trash"></i>
                </button>
            </div>
        </li>
    <?php
    }
} else {
    echo "<div class='without-task'>Aeeee, não há tarefas para fazer.</div>";
} ?>