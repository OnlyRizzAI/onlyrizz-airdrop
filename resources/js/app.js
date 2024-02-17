import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.onTaskClicked = function (taskId) {
    const form = document.getElementById('taskForm');
    form.action = `/tasks/complete/${taskId}`;
    form.submit();
}
