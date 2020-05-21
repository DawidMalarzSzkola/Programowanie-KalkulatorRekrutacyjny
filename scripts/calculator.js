function exam() {
    polish = document.getElementById('polski_exam_input').value * 0.35;
    math = document.getElementById('matematyka_exam_input').value * 0.35;
    ang = document.getElementById('angielski_exam_input').value * 0.30;
    points = polish + math + ang;
    return points
}

function subjects() {
    let point = 0;
    array_points = {
        2: 2,
        3: 8,
        4: 14,
        5: 17,
        6: 18
    }
    subjects_inputs = document.getElementsByClassName("required_subject");
    for(let i=0; i < subjects_inputs.length; i++) {
        point += array_points[subjects_inputs[i].value];
    }
    return point
}

function calculate() {
    score = document.getElementById('score');
    points_from_exam = exam();
    points_from_subjects = subjects();
    score.innerHTML = " ";
    score.innerHTML += `<div>Egzamin: ${points_from_exam}<div>`;
    score.innerHTML += `<div>Przedmioty: ${points_from_subjects}<div>`;
    score.innerHTML += `<div name="score">Wynik: ${points_from_exam + points_from_subjects}<div>`;
}