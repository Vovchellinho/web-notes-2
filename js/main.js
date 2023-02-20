function CheckText(form){
    text = document.getElementById('note').value;
    if (text.trim().length==0){
        alert('Пустую заметку сохранить нельзя!');
        return false;
    }
    else if(text.length>140){
        alert('Максимально допустимая длина заметки - 140 символов! Длина Вашего сообщения: ' + text.length + '!');
        return false;
    }
    return true;
}

function UpdateText(form){
    var node_text = form.querySelectorAll('.note_text')[0].textContent;
    document.getElementById('note').innerHTML = String(node_text);
    var node_id = form.querySelectorAll('.note_id')[0].textContent;
    document.getElementById('hidden_choise').value = node_id;
    var button_del = document.getElementById("but_del");
    button_del.type = 'submit';
}