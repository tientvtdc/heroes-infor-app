import interact from 'interactjs';
import './bootstrap';

const draggableElement = document.getElementById('draggable-element');

interact(draggableElement)
    .draggable({
        onmove: function (event) {
            var target = event.target
            var x = (parseFloat(target.getAttribute('data-x')) || 0) + event.dx
            var y = (parseFloat(target.getAttribute('data-y')) || 0) + event.dy
            console.log(x, y);
            target.style.transform = 'translate(' + x + 'px, ' + y + 'px)'
            target.setAttribute('data-x', x)
            target.setAttribute('data-y', y)
        },
        modifiers: [
            interact.modifiers.restrictRect({
                restriction: 'parent', // Giới hạn di chuyển trong phạm vi của phần tử cha
            })
        ],
    });


