const questionForm = document.getElementById('questionForm');

questionForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const newQuestion = {
        question: document.getElementById('question').value,
        choice1: document.getElementById('choice1').value,
        choice2: document.getElementById('choice2').value,
        choice3: document.getElementById('choice3').value,
        choice4: document.getElementById('choice4').value,
        answer: document.querySelector('input[name="answer"]:checked').value,
        difficulty: document.getElementById('difficulty').value,
    };

    let questions = JSON.parse(localStorage.getItem('questions')) || [];
    questions.push(newQuestion);
    localStorage.setItem('questions', JSON.stringify(questions));

    alert('Soru başarıyla eklendi!');
    questionForm.reset();
});
