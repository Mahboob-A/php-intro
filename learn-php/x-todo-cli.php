<?php
$todo_list = [];

function showMenu()
{
        echo "\n--- TO-DO LIST ---\n";
        echo "1. View all tasks\n";
        echo "2. Add a task\n";
        echo "3. Delete a task\n";
        echo "4. Update a task\n";
        echo "5. Exit\n";
        echo "Enter your choice: ";
}

function viewTasks($todo_list)
{
        if (empty($todo_list)) {
                echo "\nYour to-do list is empty!\n";
        } else {
                echo "\nYour Tasks:\n";
                foreach ($todo_list as $index => $task) {
                        echo ($index + 1) . ". " . $task . "\n";
                }
        }
}

function addTask(&$todo_list)
{
        echo "\nEnter a new task: ";
        $task = trim(fgets(STDIN));
        if (!empty($task)) {
                $todo_list[] = $task;
                echo "Task added!\n";
        } else {
                echo "Invalid task. Please try again.\n";
        }
}

function deleteTask(&$todo_list)
{
        if (empty($todo_list)) {
                echo "\nNo tasks to delete!\n";
                return;
        }

        viewTasks($todo_list);
        echo "\nEnter the task number to delete: ";
        $taskNumber = (int) trim(fgets(STDIN));

        if ($taskNumber > 0 && $taskNumber <= count($todo_list)) {
                unset($todo_list[$taskNumber - 1]);
                $todo_list = array_values($todo_list);  // Reindex array
                echo "Task deleted!\n";
        } else {
                echo "Invalid task number. Please try again.\n";
        }
}

function updateTask(&$todo_list)
{
        if (empty($todo_list)) {
                echo "\nNo tasks to update!\n";
                return;
        }

        viewTasks($todo_list);
        echo "\nEnter the task number to update: ";
        $taskNumber = (int) trim(fgets(STDIN));

        if ($taskNumber > 0 && $taskNumber <= count($todo_list)) {
                echo "Enter the updated task: ";
                $newTask = trim(fgets(STDIN));
                if (!empty($newTask)) {
                        $todo_list[$taskNumber - 1] = $newTask;
                        echo "Task updated!\n";
                } else {
                        echo "Invalid task input. Please try again.\n";
                }
        } else {
                echo "Invalid task number. Please try again.\n";
        }
}

// Main app loop
while (true) {
        showMenu();
        $choice = trim(fgets(STDIN));

        switch ($choice) {
                case '1':
                        viewTasks($todo_list);
                        break;
                case '2':
                        addTask($todo_list);
                        break;
                case '3':
                        deleteTask($todo_list);
                        break;
                case '4':
                        updateTask($todo_list);
                        break;
                case '5':
                        echo "Exiting... Goodbye!\n";
                        exit;
                default:
                        echo "Invalid choice. Please select from the menu.\n";
        }
}
