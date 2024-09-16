document.addEventListener('DOMContentLoaded', function() {
    const comments = document.querySelectorAll('#comments li');

    comments.forEach(comment => {
        const relevantButton = document.createElement('button');
        relevantButton.textContent = 'Relevante';
        relevantButton.addEventListener('click', function() {
            document.getElementById('relevantes').querySelector('ul').appendChild(comment);
        });

        const notRelevantButton = document.createElement('button');
        notRelevantButton.textContent = 'Não Relevante';
        notRelevantButton.addEventListener('click', function() {
            document.getElementById('naoRelevantes').querySelector('ul').appendChild(comment);
        });

        const toEvaluateButton = document.createElement('button');
        toEvaluateButton.textContent = 'A Avaliar';
        toEvaluateButton.addEventListener('click', function() {
            document.getElementById('aAvaliar').querySelector('ul').appendChild(comment);
        });

        comment.appendChild(relevantButton);
        comment.appendChild(notRelevantButton);
        comment.appendChild(toEvaluateButton);
    });
});