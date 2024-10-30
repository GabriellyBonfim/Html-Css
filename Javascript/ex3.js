const taskInput = document.getElementById('taskInput');
const addTaskBtn = document.getElementById('addTaskBtn');
const taskList = document.getElementById('taskList');

addTaskBtn.addEventListener('click', () => {
    const taskText = taskInput.value.trim();
    if (taskText === '') return;

    const li = document.createElement('li');
    li.textContent = taskText;

    
    const removeBtn = document.createElement('button');
    removeBtn.textContent = 'Remover';
    removeBtn.onclick = () => {
        taskList.removeChild(li);
    };

  
    const replaceBtn = document.createElement('button');
    replaceBtn.textContent = 'Substituir';
    replaceBtn.onclick = () => {
        const newTaskText = prompt('Nova tarefa:', li.textContent);
        if (newTaskText) {
            li.firstChild.textContent = newTaskText;
        }
    };

    li.appendChild(removeBtn);
    li.appendChild(replaceBtn);
    taskList.appendChild(li);
    taskInput.value = '';
});









