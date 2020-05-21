function createRequiredSubjectForm(subject, placeholder) {
    let div = document.getElementById("rs");
    div.innerHTML += `<div><label for="${subject}">${placeholder}</label><input type="number" name="${subject}" class="required_subject" min=1 max=6 required></div>`
}

document.getElementById('wybor1').addEventListener('change', function (e) {
    let div = document.getElementById("rs");
    div.innerHTML = "";
    klasa = e.target.value;
    switch (klasa) {
        case "A1": 
            createRequiredSubjectForm("Geografia", "Geografia lub Fizyka");
            break;
        case "A2": 
            createRequiredSubjectForm("Geografia", "Geografia");
            break;
        case "A3": 
            createRequiredSubjectForm("Biologia", "Geografia lub Chemia");
            break;
        case "A4": 
            createRequiredSubjectForm("Historia", "Historia");
            break;
        case "B1": 
            createRequiredSubjectForm("Historia", "Historia");
            break;
        case "B2": 
            createRequiredSubjectForm("Historia", "Historia");
            break;
        case "B3": 
            createRequiredSubjectForm("Historia", "Historia");
            break;
        default: 
            createRequiredSubjectForm("Geografia", "Geografia");

    }
});



