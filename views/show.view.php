<?php

foreach ($tasks as $task) {
	echo "Description: {$task->description}", "\n";
	echo "Completed: {$task->completed}", "\n\n";
}